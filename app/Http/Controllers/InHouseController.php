<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BrokerCommission;
use App\Models\Client;
use App\Models\Employee;
use App\Models\InHouse;
use App\Models\InHousePayment;
use App\Models\InHousePaymentSchedule;
use App\Models\InHouseProperty;
use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Property;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InHouseController extends Controller
{

    public function index()
    {
        return view('admin.reservations.in-house.index', [
            // 'reservations' => InHouseProperty::orderBy('status', 'DESC')->latest()->filter([request(['search']), request(['status'])])->paginate(10),
            'reservations' => InHouseProperty::latest()->filter(request(['search']))->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => null
        ]);
    }

    public function active()
    {
        return view('admin.reservations.in-house.index', [
            'reservations' => InHouseProperty::whereStatus(1)->latest()->paginate(10),
            'sort' => 'Active'
        ]);
    }

    public function finished()
    {
        return view('admin.reservations.in-house.index', [
            'reservations' => InHouseProperty::whereStatus(2)->latest()->paginate(10),
            'sort' => 'Finished'
        ]);
    }
    public function cancelled()
    {
        return view('admin.reservations.in-house.index', [
            'reservations' => InHouseProperty::whereStatus(0)->latest()->paginate(10),
            'sort' => 'Cancelled'
        ]);
    }
    public function deleted()
    {
        return view('admin.reservations.in-house.index', [
            'reservations' => InHouseProperty::whereStatus(-1)->latest()->paginate(10),
            'sort' => 'Deleted'
        ]);
    }

    public function print($id)
    {
        $property = InHouseProperty::findOrFail($id);
        // dd($property);
        return view('admin.reservations.in-house.print', [
            'reservation' => $property
        ]);
    }

    public function create()
    {
        return view('admin.reservations.in-house.create', ['clients' => Client::whereActive(2)->get()]);
    }

    public function store(Request $request)
    {
        // dd(($request->all));
        $client = Client::find($request->owner);
        // dd($client->agent->broker->id);
        // Get house model
        $houseModel = $request->houseModel;

        // Initialize house model price
        if ($houseModel == "Maria Delfina") {
            $packagePrice = '759000';
        } else if ($houseModel == "Maria Lorenza") {
            $packagePrice = '2000000';
        } else if ($houseModel == "Maria Marcela") {
            $packagePrice = '2500000';
        }

        // Calculate base price 
        $basePrice = ($packagePrice + $request->processingFee + $request->cornerLotFee +
            $request->commercialLotFee)  - $request->discount - $request->downpayment;

        // Since downpayment is 40%, get 40% of the base price
        $downpayment_scheme_total = $basePrice * 0.40;
        $downpayment_scheme_monthly_payment = $downpayment_scheme_total / $request->downpaymentTerm;

        // Get remaining balance and add interest depending on terms
        $balance_scheme_total = $basePrice * 0.6;
        if ($request->balanceTerm == 12) {
            $balance_scheme_total *= 1.10;
        } else if ($request->balanceTerm == 18) {
            $balance_scheme_total *= 1.14;
        } else if ($request->balanceTerm == 24) {
            $balance_scheme_total *= 1.18;
        }
        // dd($balance_scheme_total);
        $balance_scheme_monthly_payment = $balance_scheme_total / $request->balanceTerm;
        $totalContractPrice = $downpayment_scheme_total + $balance_scheme_total;

        // echo($basePrice . "\n");
        // echo($totalContractPrice);
        // dd("YAWA");
        // dd($downpayment_scheme_total);
        $property = InHouseProperty::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'broker_id' => $client->agent->broker->id,
            'model' => $request->houseModel,
            'blk_no' => $request->blkNo,
            'lot_no' => $request->lotNo,
            'floor_area' => $request->floorArea,
            'title_no' => $request->titleNo,
            'processing_fee' => $request->processingFee,
            'corner_lot_fee' => $request->cornerLotFee,
            'commercial_lot_fee' => $request->commercialLotFee,
            'reservation_fee' => $request->downpayment,
            'downpayment_term' => $request->downpaymentTerm,
            'downpayment_monthly' => $downpayment_scheme_monthly_payment,
            'downpayment_total' => $downpayment_scheme_total,
            'downpayment_start' => Carbon::now()->addMonth(1),
            'downpayment_end' => Carbon::now()->addMonth($request->downpaymentTerm),
            'balance_term' => $request->balanceTerm,
            'balance_monthly' => $balance_scheme_monthly_payment,
            'balance_total' => $balance_scheme_total,
            'balance_start' => Carbon::now()->addMonth(2 + $request->downpaymentTerm),
            'balance_end' => Carbon::now()->addMonth(1 +  $request->downpaymentTerm + $request->balanceTerm),
            'total_contract_price' => $totalContractPrice,
            'remaining_balance' => $totalContractPrice,
            'upholding_date' => Carbon::now()->addMonth(1),
            'discount' => $request->discount,
            'created_by' => session('emp_id'),
        ]);

        // Create payment for reservation fee
        InHousePayment::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'in_house_property_id' => $property->id,
            'payment_for' => 'Reservation Fee',
            'payment_amount' => $request->downpayment,
            'payment_date' => Carbon::now(),
            'total_balance' => $totalContractPrice,
            // 'paid' => 1,
            'created_by' => session('emp_id')
        ]);

        // Generate payment schedule for reservation
        InHousePaymentSchedule::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'in_house_property_id' => $property->id,
            'payment_for' => 'Reservation Fee',
            'payment_amount' => $request->downpayment,
            'payment_date' => Carbon::now(),
            'paid' => 1,
            'total_balance' => $totalContractPrice,
            'created_by' => session('emp_id')
        ]);

        // Depende sa ingnon ni maam maria
        // $commission = $packagePrice * 0.08;
        $commission = $packagePrice * 0.05;
        BrokerCommission::create([
            'uuid' => Str::uuid(),
            'broker_id' => $client->agent->broker->id,
            'property_uuid' => $property->uuid,
            'commission' => $commission
        ]);

        $downpaymentTermStartingDate = Carbon::now();
        for ($i = 0; $i <  $request->downpaymentTerm; $i++) {
            InHousePaymentSchedule::create([
                'uuid' => Str::uuid(),
                'client_id' => $request->owner,
                'in_house_property_id' => $property->id,
                'payment_for' => 'Downpayment Scheme',
                'payment_remaining' => $downpayment_scheme_monthly_payment,
                'payment_amount' => $downpayment_scheme_monthly_payment,
                'payment_date' => $downpaymentTermStartingDate->addMonth(),
                'total_balance' => $totalContractPrice,
                'created_by' => session('emp_id')
            ]);
        }

        $balanceTermStartingDate = Carbon::now()->addMonths($request->downpaymentTerm + 1);
        for ($i = 0; $i < $request->balanceTerm; $i++) {
            InHousePaymentSchedule::create([
                'uuid' => Str::uuid(),
                'client_id' => $request->owner,
                'in_house_property_id' => $property->id,
                'payment_for' => 'Balance Scheme',
                'payment_remaining' => $balance_scheme_monthly_payment,
                'payment_amount' => $balance_scheme_monthly_payment,
                'payment_date' => $balanceTermStartingDate->addMonth(),
                'total_balance' => $totalContractPrice,
                'created_by' => session('emp_id')
            ]);
        }

        //ADD TO EVENTS
        // $ownerName = $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name . ' ' . $client->suffix;
        // $eventDetails = "Upholding date of " . $ownerName .
        //     "\n" . "\n" . "House Model: " . $houseModel .
        //     "\n" . "Payment Term: " . $request->paymentTerm .
        //     "\n" . "Installment: " . $request->installment . " months" .
        //     "\n" . "Downpayment: " . $request->downpayment .
        //     "\n" . "-----------------------------------------" .
        //     "\n" . "\n" . session('emp_first_name') . " " . session("emp_last_name");

        // DB::table('events')->insert([
        //     'acc_id' => session('acc_id'),
        //     'evt_uuid' => Str::uuid(),
        //     'evt_title' => $ownerName,
        //     'evt_details' => $eventDetails,
        //     'evt_color' => '#FF0000',
        //     'evt_is_whole_day' => 'true',
        //     'evt_start_date' => Carbon::now()->addDays(30)->setTime(0, 0, 22),
        //     'evt_end_date' => Carbon::now()->addDays(30)->setTime(11, 59, 22),
        //     'evt_date_created' => DB::raw('CURRENT_TIMESTAMP'),
        //     'evt_created_by' => session('emp_id'),
        //     'evt_active' => '1'
        // ]);
        return redirect("/reservations/in-house/$property->id")->with('successMessage', 'Reservation successfully placed.');
    }

    public function show($id)
    {
        $house = InHouseProperty::find($id);

        // dd($house->inHouseProperty);
        return view('admin.reservations.in-house.show', ['reservation' => InHouseProperty::findOrFail($id)]);
    }

    public function delete(InHouseProperty $in_house)
    {
        $in_house->active = 0;
        $in_house->status = -1;
        $in_house->reservation = -1;
        $in_house->updated_by = session('emp_id');
        $in_house->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully deleted.');
    }

    public function cancel(InHouseProperty $in_house)
    {
        // dd($in_house);
        $in_house->status = 0;
        $in_house->reservation = 0;
        $in_house->updated_by = session('emp_id');
        $in_house->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully cancelled.');
    }

    public function restore(InHouseProperty $in_house)
    {
        $in_house->status = 1;
        $in_house->reservation = 1;
        $in_house->updated_by = session('emp_id');
        $in_house->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully resumed.');
    }

    public function finish(InHouseProperty $in_house)
    {
        $in_house->status = 4;
        $in_house->reservation = 2;
        $in_house->updated_by = session('emp_id');

        $in_house->inHousePaymentSchedules()
            ->first()
            ->update([
                'updated_by' => session('emp_id'),
                'active' => 0
            ]);
        $in_house->save();

        return redirect("/properties/in-house/$in_house->id")
            ->with([
                'property' => $in_house,
                'employee' => Employee::whereEmpId($in_house->created_by)->first()
            ])->with('successMessage', 'Reservation successfully finished.');
    }
}
