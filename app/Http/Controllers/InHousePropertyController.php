<?php

namespace App\Http\Controllers;

use App\Models\InHouse;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InHousePayment;
use App\Models\InHouseProperty;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Carbon\Carbon;

class InHousePropertyController extends Controller
{
    //
    public function index()
    {
        return view('admin.properties.in-house.index', [
            'properties' => InHouseProperty::whereReservation(2)->orderBy('status', 'DESC')->latest()->filter(request(['search']))->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => null
        ]);
    }
    public function downpayment()
    {
        // dd("TAGAGO");
        return view('admin.properties.in-house.index', [
            'properties' => InHouseProperty::whereReservation(2)->whereStatus(4)->orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Downpayment Scheme'
        ]);
    }
    public function balance()
    {
        return view('admin.properties.in-house.index', [
            'properties' => InHouseProperty::whereReservation(2)->whereStatus(3)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Balance Scheme'
        ]);
    }
    public function fully_paid()
    {
        return view('admin.properties.in-house.index', [
            'properties' => InHouseProperty::whereReservation(2)->whereStatus(2)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Fully Paid'
        ]);
    }
    public function cancelled()
    {
        return view('admin.properties.in-house.index', [
            'properties' => InHouseProperty::whereReservation(2)->whereStatus(0)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Cancelled'
        ]);
    }
    public function deleted()
    {
        return view('admin.properties.in-house.index', [
            'properties' => InHouseProperty::whereReservation(2)->whereStatus(-1)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Deleted'
        ]);
    }

    public function show($id)
    {
        $property = InHouseProperty::findOrFail($id);
        return view('admin.properties.in-house.show', [
            'property' => $property,
            'clients' => Client::all(),
            'employee' => Employee::whereEmpId($property->created_by)->first()
        ]);
    }

    public function payment($id, Request $request)
    {

        $property = InHouseProperty::findOrFail($id);
        // dd($property);
        $payment_amount = $request->paymentAmount;

        $payment_schedules = $property->inHousePaymentSchedules()->where('active', 1)->get();
        // dd($payment_schedules);
        foreach ($payment_schedules as $payment_schedule) {
            if ($payment_amount <= 0) {
                // If payment_amount is exhausted, break out of the loop.
                break;
            }

            // Calculate the payment to be subtracted for the current iteration
            $payment_to_subtract = min($payment_amount, $payment_schedule->payment_remaining);

            // Update the current iteration's payment_amount
            $payment_schedule->payment_remaining -= $payment_to_subtract;

            if ($payment_schedule->payment_remaining <= 0) {
                // if ($payment_schedule->payment_amount - $payment_to_subtract <= 0) {
                // If the payment_amount reaches 0, update "paid" and "active" columns
                $payment_schedule->paid = 1;
                $payment_schedule->updated_by = session('emp_id');
                $payment_schedule->active = 0;
            }

            // Save the changes to the current iteration
            $payment_schedule->save();

            // Deduct the payment amount from the total payment
            $payment_amount -= $payment_to_subtract;
        }

        $payment_schedule = $property->inHousePaymentSchedules()->where('active', 1)->first();
        if ($payment_schedule) {
            if ($payment_schedule->payment_for == "Balance Scheme") {
                $property->status = 3;
                $property->save();
            }
        } else {
            $property->status = 2;
            $property->save();
        }

        // InHousePayment::create([
        //     'uuid' => Str::uuid(),
        //     'client_id' => $property->client->id,
        //     'property_id' => $property->id,
        //     'in_house_id' => $property->id,
        //     'in_house_property_id' => $property->id,
        //     'payment_for' => 'Reservation Fee',
        //     'payment_amount' => $request->downpayment,
        //     'payment_date' => Carbon::now(),
        //     'paid' => 1,
        //     'total_balance' => $totalContractPrice,
        //     'created_by' => session('emp_id')
        // ]);

        InHousePayment::create([
            'uuid' => Str::uuid(),
            'client_id' => $property->client->id,
            'in_house_property_id' => $property->id,
            'payment_amount' => $request->paymentAmount,
            'payment_for' => $payment_schedule->payment_for ?? 'Full Payment',
            'total_balance' => $property->remaining_balance - $request->paymentAmount,
            'notes' => $request->paymentNotes,
            'created_by' => session('emp_id'),
            'updated_by' => session('emp_id'),
        ]);


        $property->remaining_balance -= $request->paymentAmount;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', 'Payment successful.');
    }

    public function delete(InHouseProperty $in_house)
    {
        $in_house->active = 0;
        $in_house->status = -1;
        $in_house->updated_by = session('emp_id');
        $in_house->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully deleted.');
    }

    public function cancel(InHouseProperty $in_house)
    {
        // dd($in_house);
        $in_house->status = 0;
        $in_house->updated_by = session('emp_id');
        $in_house->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully cancelled.');
    }

    public function restore(InHouseProperty $in_house)
    {
        if($in_house->inHousePaymentSchedules()->where('paid', 0)->first()->payment_for == "Downpayment Scheme"){
            $in_house->status = 4;
        }
        else if($in_house->inHousePaymentSchedules()->where('paid', 0)->first()->payment_for == "Balance Scheme"){
            $in_house->status = 3;
        }
        $in_house->updated_by = session('emp_id');
        $in_house->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully resumed.');
    }

    
    public function printPaymentSchedule($id){
        $property = InHouseProperty::findOrFail($id);

        $total = 0;
        $remaining = 0;
        foreach($property->inHousePaymentSchedules as $payment){
            if($payment){
                $total += $payment->payment_amount;
                $remaining += $payment->payment_remaining;
            }
        }
        // dd($property->client_id);
        return view('admin.properties.in-house.print', [
            'property' => $property,
            // 'clients' => Client::all(),
            'clients' => Client::where('id', '!=', $property->client_id)->get(),
            'employee' => Employee::whereEmpId($property->created_by)->first(),
            'total' => $total,
            'remaining' => $remaining
        ]);
    }
}
