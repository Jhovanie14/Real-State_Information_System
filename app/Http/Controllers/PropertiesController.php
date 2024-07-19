<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Payment;
use App\Models\PaymentSchedule;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    public function index()
    {
        return view('admin.properties.index', [
            'properties' => Property::orderBy('status', 'DESC')->latest()->filter(request(['search']))->get(),
            'sort' => null
        ]);
    }

    public function create()
    {
        return view('admin.properties.create', ['clients' => Client::where('active', 1)->get()]);
    }

    public function show(Property $property)
    {
        $employee = Employee::whereEmpId($property->created_by)->first();
        // dd($employee);
        return view('admin.properties.show', [
            'property' => Property::find($property->id),
            'employee' => $employee
        ]);
    }

    public function payment(Property $property, Request $request)
    {
        $paymentAmount = $request->paymentAmount;

        $paymentSchedules = $property->paymentSchedules()->where('active', 1)->get();
        foreach ($paymentSchedules as $paymentSchedule) {
            if ($paymentAmount <= 0) {
                break;
            }
            $paymentToSubtract = min($paymentAmount, $paymentSchedule->payment_amount);

            $paymentSchedule->payment_amount -= $paymentToSubtract;
            $paymentSchedule->save();

            if ($paymentSchedule->payment_amount == 0) {
                $paymentSchedule->paid = 1;
                $paymentSchedule->active = 0;
                $paymentSchedule->save();
            }
            $paymentAmount -= $paymentToSubtract;
        }

        $paymentSchedule = $property->paymentSchedules()->where('active', 1)->first();
        if ($paymentSchedule) {
            if ($paymentSchedule->payment_for == "Balance Scheme") {
                $property->status = 3;
                $property->save();
            }
        } else {
            $property->status = 2;
            $property->save();
        }

        Payment::create([
            'uuid' => Str::uuid(),
            'client_id' => $property->client->id,
            'property_id' => $property->id,
            'reservation_id' => $property->reservation->id,
            'contract' => $property->contract,
            'payment_amount' => $request->paymentAmount,
            'payment_for' => $paymentSchedule->payment_for ?? 'Full Payment',
            'total_balance' => $property->total_balance - $request->paymentAmount,
            'notes' => $request->paymentNotes,
            'created_by' => session('emp_id'),
            'updated_by' => session('emp_id'),
        ]);

        $property->total_balance -= $request->paymentAmount;
        $property->updated_by = session(('emp_id'));
        $property->save();

        return redirect()->back()->with('successMessage', 'Payment successful.');
    }

    public function store(Request $request)
    {
        $propertyUUID = generateuuid();

        $houseModel = $request->property_houseModel;
        $clientID = $request->property_owner;

        $propertyPaymentTerm = $request->property_paymentTerm;
        $propertyInstallment = $request->property_installment;
        $propertyDownPayment = $request->property_downPayment;
        $propertyBlkNo = $request->property_blkNo;
        $propertyLotNo = $request->property_lotNo;
        $propertyFloorArea = $request->property_floorArea;
        $propertyTitleNo = $request->property_titleNo;
        $propertyEquityFee = $request->property_equityFee;
        $propertyProcessingFee = $request->property_processingFee;
        $propertyCornerLotFee = $request->property_cornerLotFee;
        $propertyCommercialLotFee = $request->property_commercialLotFee;
        $propertyDiscount = $request->property_discount;

        if ($houseModel == "Maria Delfina") {
            $packagePrice = 5000000;
        } else if ($houseModel == "Maria Lorenza") {
            $packagePrice = 10000000;
        } else if ($houseModel == "Maria Marcela") {
            $packagePrice = 15000000;
        }

        //TEMPORARY VALUES
        $loanableAmount = 5;
        // dd($propertyCommercialLotFee);
        $propertyTotalContractPrice = $packagePrice + $propertyEquityFee + $propertyProcessingFee + $propertyCornerLotFee + $propertyCommercialLotFee;
        // dd($propertyTotalContractPrice);
        if ($propertyInstallment) {
            $propertyMonthlyPayment = $propertyTotalContractPrice / $propertyInstallment;
        } else {
            $propertyMonthlyPayment = null;
        }

        $propertyBalance = $propertyTotalContractPrice - $propertyDownPayment - $propertyDiscount;

        $loggedInUserID = session('emp_id');
        $propertyForeignID = DB::table('properties')->insertGetId([
            'ppt_uuid' => $propertyUUID,
            'cln_id' => $clientID,
            'ppt_model' => $houseModel,
            'ppt_blk_no' => $propertyBlkNo,
            'ppt_lot_no' => $propertyLotNo,
            'ppt_floor_area' => $propertyFloorArea,
            'ppt_title_no' => $propertyTitleNo,
            'ppt_package_price' => $packagePrice,
            'ppt_equity_fee' => $propertyEquityFee,
            'ppt_processing_fee' => $propertyProcessingFee,
            'ppt_corner_lot_fee' => $propertyCornerLotFee,
            'ppt_commercial_lot_fee' => $propertyCommercialLotFee,
            'ppt_discount' => $propertyDiscount,
            'ppt_total_contract_price' => $propertyTotalContractPrice,
            'ppt_loanable_amount' => $loanableAmount,
            'ppt_down_payment' => $propertyDownPayment,
            'ppt_monthly_payment' => $propertyMonthlyPayment,
            'ppt_payment_term' => $propertyPaymentTerm,
            'ppt_installment' => $propertyInstallment,
            'ppt_balance' => $propertyBalance,
            'ppt_status' => 2,
            'ppt_date_created' => Carbon::now(),
            'ppt_created_by' => $loggedInUserID,
        ]);


        DB::table('property_payments')->insert([
            'ppp_uuid' => generateuuid(),
            'ppt_id' => $propertyForeignID,
            'cln_id' => $clientID,
            'ppp_total_contract_price' => $propertyTotalContractPrice,
            'ppp_remaining_months' => $propertyInstallment,
            'ppp_payment' => $propertyDownPayment,
            'ppp_balance' => $propertyBalance,
            'ppp_date_created' => Carbon::now(),
            'ppp_created_by' => $loggedInUserID,
        ]);

        // $clientPropertyUUID = generateuuid();

        // DB::table('property_clients')->insert([
        //     'cpp_uuid' => $clientPropertyUUID,
        //     'ppt_id' => $propertyForeignID,
        //     'cln_id' => $clientID,
        //     'cpp_date_created' => Carbon::now(),
        //     'cpp_created_by' => $loggedInUserID
        // ]);

        return redirect('properties/')->with('successMessage', 'Property successfully added!');
    }

    public function archiveProperty($propertyID)
    {
        DB::table('properties')->where('ppt_id', $propertyID)->update([
            'ppt_date_modified' => Carbon::now(),
            'ppt_modified_by' => session('emp_id'),
            'ppt_active' => -1
        ]);

        return redirect()->back()->with('successMessage', 'Property successfully archived');
    }

    public function deleteProperty($propertyID)
    {
        DB::table('properties')->where('ppt_id', $propertyID)->update([
            'ppt_date_modified' => Carbon::now(),
            'ppt_modified_by' => session('emp_id'),
            'ppt_active' => 0
        ]);

        return redirect()->back()->with('successMessage', 'Property successfully deleted');
    }

    public function activateProperty($propertyID)
    {
        DB::table('properties')->where('ppt_id', $propertyID)->update([
            'ppt_date_modified' => Carbon::now(),
            'ppt_modified_by' => session('emp_id'),
            'ppt_active' => 1
        ]);

        return redirect()->back()->with('successMessage', 'Property successfully reactivated');
    }

    public function addPayment(Request $request, Property $property)
    {

        dd($property);

        $clientID = $request->clientID;
        $paymentAmount = $request->paymentAmount;
        $loggedInUserID = session('emp_id');

        $previousPaymentRecord = DB::table('property_payments')->where('ppt_id', $property)->orderBy('ppp_id', 'DESC')->first();


        $newRemainingMonths = $previousPaymentRecord->ppp_remaining_months - 1;
        $newBalance = $previousPaymentRecord->ppp_balance - $paymentAmount;

        if ($newBalance <= 0) {
            $paymentStatus = 1;
            DB::table('properties')->where('ppt_id', $property)->update(['ppt_status' => 1]);
        } else {
            $paymentStatus = 2;
        }

        DB::table('property_payments')->insert([
            'ppp_uuid' => generateuuid(),
            'ppt_id' => $property,
            'cln_id' => $clientID,
            'ppp_total_contract_price' => $previousPaymentRecord->ppp_total_contract_price,
            'ppp_remaining_months' => $newRemainingMonths,
            'ppp_payment' => $paymentAmount,
            'ppp_balance' => $newBalance,
            'ppp_status' => $paymentStatus,
            'ppp_date_created' => DB::raw('CURRENT_TIMESTAMP'),
            'ppp_created_by' => $loggedInUserID
        ]);

        DB::table('properties')->where([
            ['ppt_id', $property],
            ['ppt_active', 1]
        ])->update([
            'ppt_balance' => $newBalance,
        ]);

        return redirect()->back()->with('successMessage', 'An amount of ' . number_format($paymentAmount) . 'was successfully paid for this month.');
        // DB::table('')
    }
}
