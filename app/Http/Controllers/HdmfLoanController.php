<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HdmfLoanProperty;
use App\Http\Controllers\Controller;
use App\Models\BrokerCommission;
use App\Models\Employee;
use App\Models\HdmfLoanPayment;
use App\Models\HdmfLoanPaymentSchedule;
use Carbon\Carbon;

class HdmfLoanController extends Controller
{
    public function index()
    {
        return view('admin.reservations.hdmf-loan.index', [
            'reservations' => HdmfLoanProperty::latest()->filter(request(['search']))->paginate(10),
            'sort' => null
        ]);
    }

    public function print($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        // dd($property->hdmfLoanPaymentSchedules);
        return view('admin.reservations.hdmf-loan.print', [
            'reservation' => $property
        ]);
    }

    public function active()
    {
        return view('admin.reservations.hdmf-loan.index', [
            'reservations' => HdmfLoanProperty::whereStatus(1)->latest()->paginate(10),
            'sort' => 'Active'
        ]);
    }

    public function finished()
    {
        return view('admin.reservations.hdmf-loan.index', [
            'reservations' => HdmfLoanProperty::whereStatus(4)->latest()->paginate(10),
            'sort' => 'Finished'
        ]);
    }
    public function cancelled()
    {
        return view('admin.reservations.hdmf-loan.index', [
            'reservations' => HdmfLoanProperty::whereStatus(0)->latest()->paginate(10),
            'sort' => 'Cancelled'
        ]);
    }
    public function deleted()
    {
        return view('admin.reservations.hdmf-loan.index', [
            'reservations' => HdmfLoanProperty::whereStatus(-1)->latest()->paginate(10),
            'sort' => 'Deleted'
        ]);
    }


    public function create()
    {
        return view('admin.reservations.hdmf-loan.create', ['clients' => Client::whereActive(2)->get()]);
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $client = Client::find($request->owner);
        // dd($client->agent->broker->id);
        // Get house model
        $houseModel = $request->houseModel;
        $equityTerm = $request->equityTerm == 'custom' ? $request->customMonths : $request->equityTerm;
        $customMonths = $request->customMonths;
        // dd($equityTerm);
        // Initialize house model price
        if ($houseModel == "Maria Delfina") {
            $packagePrice = '759000';
            $equity_total = '155000';
            if ($equityTerm == 1) {
                $equity_monthly = '155000';
            } else if ($equityTerm == 6) {
                $equity_monthly = '25833.33';
            } else if ($equityTerm == 12) {
                $equity_monthly = '12916.67';
            } else if ($equityTerm == 18) {
                $equity_monthly = '8611.11';
            } else {
                $equity_monthly = $equity_total / $equityTerm;
            }
        } else if ($houseModel == "Maria Lorenza") {
            $packagePrice = '2000000';
            $equity_total = '270000';
            if ($equityTerm == 1) {
                $equity_monthly = '270000';
            } else if ($equityTerm == 6) {
                $equity_monthly = '45000';
            } else if ($equityTerm == 12) {
                $equity_monthly = '22500';
            } else if ($equityTerm == 18) {
                $equity_monthly = '15000';
            } else {
                $equity_monthly = $equity_total / $equityTerm;
            }
        } else if ($houseModel == "Maria Marcela") {
            $packagePrice = '2500000';
            $equity_total = '470000';
            if ($equityTerm == 1) {
                $equity_monthly = '470000';
            } else if ($equityTerm == 6) {
                $equity_monthly = '78333.33';
            } else if ($equityTerm == 12) {
                $equity_monthly = '39166.66';
            } else if ($equityTerm == 18) {
                $equity_monthly = '26111.11';
            } else {
                $equity_monthly = $equity_total / $equityTerm;
            }
        }

        $basePrice = ($packagePrice + $request->processingFee + $request->cornerLotFee +
            $request->commercialLotFee)  - $request->discount - $request->downpayment - $request->loanableAmount;

        // dd($equityTerm);
        $property = HdmfLoanProperty::create([
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
            'total_contract_price' => $basePrice,
            'discount' => $request->discount,
            'reservation_fee' => $request->downpayment,
            'equity_term' => $equityTerm,
            'equity_monthly' => $equity_monthly,
            'equity_start' => Carbon::now()->addMonth(),
            'equity_end' => Carbon::now()->addMonth($equityTerm),
            'equity_total' => $equity_total,
            'loanable_amount' => $request->loanableAmount,
            'remaining_balance' => $basePrice,
            'upholding_date' => Carbon::now()->addMonth(1),
            'created_by' => session('emp_id'),
        ]);

        // Create payment for reservation fee
        HdmfLoanPayment::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'hdmf_loan_property_id' => $property->id,
            'payment_for' => 'Reservation Fee',
            'payment_amount' => $request->downpayment,
            'payment_date' => Carbon::now(),
            'total_balance' => $basePrice,
            // 'paid' => 1,
            'created_by' => session('emp_id')
        ]);

        // Generate payment schedule for reservation
        HdmfLoanPaymentSchedule::create([
            'uuid' => Str::uuid(),
            'client_id' => $request->owner,
            'hdmf_loan_property_id' => $property->id,
            'payment_for' => 'Reservation Fee',
            'payment_amount' => $request->downpayment,
            'payment_date' => Carbon::now(),
            'paid' => 1,
            'total_balance' => $basePrice,
            'created_by' => session('emp_id')
        ]);

        // Depende sa ingnon ni maam maria
        // $commission = $request->loanableAmount / 0.05;
        $commission = $request->loanableAmount * 0.08;
        // dd($commission);
        BrokerCommission::create([
            'uuid' => Str::uuid(),
            'broker_id' => $client->agent->broker->id,
            'property_uuid' => $property->uuid,
            'commission' => $commission
        ]);

        $equityStartingDate = Carbon::now();
        for ($i = 0; $i < $equityTerm; $i++) {
            // echo("TANGINA");
            HdmfLoanPaymentSchedule::create([
                'uuid' => Str::uuid(),
                'client_id' => $request->owner,
                'hdmf_loan_property_id' => $property->id,
                'payment_for' => 'Equity',
                'payment_remaining' => $equity_monthly,
                'payment_amount' => $equity_monthly,
                'payment_date' => $equityStartingDate->addMonth(),
                'total_balance' => $basePrice,
                'created_by' => session('emp_id')
            ]);
        }
        return redirect("/reservations/hdmf-loan/$property->id")->with('successMessage', 'Reservation successfully placed.');
    }

    public function show($id)
    {
        $house = HdmfLoanProperty::find($id);
        // dd($house->HdmfLoanProperty);
        return view('admin.reservations.hdmf-loan.show', [
            'reservation' => HdmfLoanProperty::findOrFail($id),
            'clients' => Client::all()
        ]);
    }

    public function assume($id)
    {
    }

    public function delete($id)
    {
        $hdmf_loan = HdmfLoanProperty::find($id);
        $hdmf_loan->active = 0;
        $hdmf_loan->status = -1;
        $hdmf_loan->reservation = -1;
        $hdmf_loan->updated_by = session('emp_id');
        $hdmf_loan->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully deleted.');
    }

    public function cancel($id)
    {
        $hdmf_loan = HdmfLoanProperty::find($id);
        $hdmf_loan->status = 0;
        $hdmf_loan->reservation = 0;
        $hdmf_loan->updated_by = session('emp_id');
        $hdmf_loan->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully cancelled.');
    }

    public function restore($id)
    {
        $hdmf_loan = HdmfLoanProperty::find($id);
        $hdmf_loan->status = 1;
        $hdmf_loan->reservation = 1;
        $hdmf_loan->updated_by = session('emp_id');
        $hdmf_loan->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully resumed.');
    }


    public function finish($id)
    {
        $house = HdmfLoanProperty::find($id);

        // dd($house->hdmfLoanPaymentSchedules()->get());
        $house->status = 4;
        $house->reservation = 2;
        $house->updated_by = session('emp_id');

        $house->hdmfLoanPaymentSchedules()
            ->first()
            ->update([
                'updated_by' => session('emp_id'),
                'active' => 0
            ]);
        $house->save();

        return redirect("/properties/hdmf-loan/$house->id")
            ->with([
                'property' => $house,
                'employee' => Employee::whereEmpId($house->created_by)->first()
            ])->with('successMessage', 'Reservation successfully finished.');
    }
}
