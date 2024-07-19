<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Models\Client;
use App\Models\HdmfLoan;
use App\Models\InHouse;
use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Property;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReservationsController extends Controller
{
    public function index()
    {
        // dd(Reservation::orderBy('status', 'DESC')->latest()->filter(request(['search']))->paginate(10));
        return view('admin.reservations.index', [
            'reservations' => Reservation::orderBy('status', 'DESC')->latest()->filter(request(['search']))->paginate(10),
            'sort' => null
        ]);
    }

    public function active()
    {
        return view('admin.reservations.index', [
            'reservations' => Reservation::whereStatus(3)->latest()->paginate(10),
            'sort' => 'Finished'
        ]);
    }
    public function finished()
    {
        return view('admin.reservations.index', [
            'reservations' => Reservation::whereStatus(2)->latest()->paginate(10),
            'sort' => 'Finished'
        ]);
    }
    public function cancelled()
    {
        return view('admin.reservations.index', [
            'reservations' => Reservation::whereStatus(1)->latest()->paginate(10),
            'sort' => 'Cancelled'
        ]);
    }
    public function deleted()
    {
        return view('admin.reservations.index', [
            'reservations' => Reservation::whereStatus(0)->latest()->paginate(10),
            'sort' => 'Deleted'
        ]);
    }

    public function print(Reservation $reservation)
    {
        // dd("TEST");
        return view('admin.reservations.print', [
            'reservation' => $reservation
        ]);
    }

    public function create()
    {
        return view('admin.reservations.create', ['clients' => Client::whereActive(2)->get()]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $client = Client::find($request->owner);

        $houseModel = $request->houseModel;
        // dd($houseModel);

        if ($request->houseModel == "Maria Delfina") {
            $packagePrice = '759000';
        } else if ($request->houseModel == "Maria Lorenza") {
            $packagePrice = '2000000';
        } else if ($request->houseModel == "Maria Marcela") {
            $packagePrice = '2500000';
        }

        $loanableAmount = $request->loanableAmount ?? null;

        // dd("IN HOUSE");
        $basePrice = ($packagePrice + $request->equityFee + $request->processingFee + $request->cornerLotFee +
            $request->commercialLotFee)  - $request->discount - $request->downpayment;
        // $basePrice = ($packagePrice + $request->equityFee + $request->processingFee + $request->cornerLotFee +
        //     $request->commercialLotFee) - $request->discount - $request->downpayment;

        $downpayment_scheme_total = $basePrice * 0.4;
        $downpayment_scheme_monthly_payment = $downpayment_scheme_total / $request->downpaymentTerm;

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

        $reservation = Reservation::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'contract' => $request->contract,
            'model' => $request->houseModel,
            'downpayment' => $request->downpayment,
            'upholding_date' => Carbon::now()->addMonth(1),
            'discount' => $request->discount,
            'loanable_amount' => $loanableAmount,
            'created_by' => session('emp_id'),
        ]);

        $property = Property::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'broker_id' => $client->agent->broker->id,
            'reservation_id' => $reservation->id,
            'contract' => $request->contract,
            'model' => $request->houseModel,
            'blk_no' => $request->blkNo,
            'lot_no' => $request->lotNo,
            'floor_area' => $request->floorArea,
            'title_no' => $request->titleNo,
            'package_price' => $packagePrice,
            'equity_fee' => $request->equityFee,
            'processing_fee' => $request->processingFee,
            'corner_lot_fee' => $request->cornerLotFee,
            'commercial_lot_fee' => $request->commercialLotFee,
            'discount' => $request->discount,
            'total_contract_price' => $totalContractPrice,
            'loanable_amount' => $loanableAmount,
            'downpayment_term' => $request->downpaymentTerm,
            'downpayment_total' => $downpayment_scheme_total,
            'balance_term' => $request->balanceTerm,
            'balance_total' => $balance_scheme_total,
            'total_balance' => $totalContractPrice,
            'created_by' => session('emp_id'),
        ]);

        Payment::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'property_id' => $property->id,
            'reservation_id' => $reservation->id,
            'contract' => $request->contract,
            'payment_amount' => $request->downpayment,
            'payment_for' => "Reservation",
            'total_balance' => $totalContractPrice,
            // 'downpayment_term' => $request->downpaymentTerm,
            // 'downpayment_scheme_months_left' => $request->downpaymentTerm,
            // 'downpayment_scheme_balance' => $downpayment_scheme_total,
            // 'downpayment_scheme_status' => "Pending",
            // 'balance_term' => $request->balanceTerm,
            // 'balance_scheme_months_left' => $request->balanceTerm,
            // 'balance_scheme_balance' => $balance_scheme_monthly_payment,
            // 'balance_scheme_status' => "Pending",
            // 'total_balance' => $totalContractPrice,
            'created_by' => session('emp_id'),
        ]);

        // $totalMonthsOfPayment = $request->downpaymentTerm + $request->balanceTerm; 
        $downpaymentTermStartingDate = Carbon::now();
        for ($i = 0; $i <  $request->downpaymentTerm; $i++) {
            PaymentSchedule::create([
                'uuid' => Str::uuid(),
                'client_id' => $request->owner,
                'property_id' => $property->id,
                'reservation_id' => $reservation->id,
                'contract' => $request->contract,
                'payment_for' => 'Downpayment Scheme',
                'payment_amount' => $downpayment_scheme_monthly_payment,
                'payment_date' => $downpaymentTermStartingDate->addMonth(),
                'total_balance' => $totalContractPrice,
                'created_by' => session('emp_id')
            ]);
        }

        $balanceTermStartingDate = Carbon::now()->addMonths($request->downpaymentTerm + 1);
        for ($i = 0; $i < $request->balanceTerm; $i++) {
            PaymentSchedule::create([
                'uuid' => Str::uuid(),
                'client_id' => $request->owner,
                'property_id' => $property->id,
                'reservation_id' => $reservation->id,
                'contract' => $request->contract,
                'payment_for' => 'Balance Scheme',
                'payment_amount' => $balance_scheme_monthly_payment,
                'payment_date' => $balanceTermStartingDate->addMonth(),
                // 'total_balance' => $totalContractPrice,
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
        return redirect("/reservations/$reservation->id")->with('successMessage', 'Reservation successfully placed.');
    }

    public function show($id)
    {
        // $reservation = Reservation::findOrFail($id);
        $reservation = InHouse::findOrFail($id);        
        $reservation = HdmfLoan::findOrFail($id);
        // dd($reservation->property);
        return view('admin.reservations.show', [
            'reservation' => $reservation,
        ]);
    }

    //////////////////////////////
    //                          //
    //--------------------------//
    // Reservation Statuses:    //
    //--------------------------// 
    //                          //
    // 3 - Ongoing / Active     //
    // 2 - Finished             //
    // 1 - Cancelled            //
    // 0 - Deleted              //
    //                          //
    //////////////////////////////

    public function delete(Reservation $reservation)
    {
        $reservation->active = 0;
        $reservation->status = 0;
        $reservation->updated_by = session('emp_id');
        $reservation->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully deleted.');
    }

    public function cancel(Reservation $reservation)
    {
        $reservation->status = 1;
        $reservation->updated_by = session('emp_id');
        $reservation->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully cancelled.');
    }

    public function restore(Reservation $reservation)
    {
        $reservation->status = 3;
        $reservation->updated_by = session('emp_id');
        $reservation->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully resumed.');
    }

    public function finish(Reservation $reservation)
    {
        $reservation->status = 2;
        $reservation->updated_by = session('emp_id');
        $reservation->payments()->first()->update([
            'updated_by' => session('emp_id')
        ]);
        $reservation->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully finished.');
    }
}
