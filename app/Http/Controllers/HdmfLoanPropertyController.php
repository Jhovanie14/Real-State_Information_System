<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HdmfLoanPayment;
use App\Models\HdmfLoanProperty;
use App\Http\Controllers\Controller;
use App\Models\Client;

class HdmfLoanPropertyController extends Controller
{
    public function index()
    {
        return view('admin.properties.hdmf-loan.index', [
            'properties' => HdmfLoanProperty::whereReservation(2)->orderBy('status', 'DESC')->latest()->filter(request(['search']))->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => null
        ]);
    }

    public function equity()
    {
        // dd("TAGAGO");
        return view('admin.properties.hdmf-loan.index', [
            'properties' => HdmfLoanProperty::whereReservation(2)->whereStatus(4)->orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Equity Scheme'
        ]);
    }
    public function equity_balance()
    {
        return view('admin.properties.hdmf-loan.index', [
            'properties' => HdmfLoanProperty::whereReservation(2)->whereStatus(3)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Taken Out & Fully Paid'
        ]);
    }
    public function fully_paid()
    {
        return view('admin.properties.hdmf-loan.index', [
            'properties' => HdmfLoanProperty::whereReservation(2)->whereStatus(2)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Taken Out with Equity Balance'
        ]);
    }
    public function cancelled()
    {
        return view('admin.properties.hdmf-loan.index', [
            'properties' => HdmfLoanProperty::whereReservation(2)->whereStatus(0)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Cancelled'
        ]);
    }
    public function deleted()
    {
        return view('admin.properties.hdmf-loan.index', [
            'properties' => HdmfLoanProperty::whereReservation(2)->whereStatus(-1)->orderBy('status', 'DESC')->latest()->paginate(10),
            // 'reservations' => InHouse::orderBy('status', 'DESC')->latest()->paginate(10),
            'sort' => 'Deleted'
        ]);
    }

    public function show($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        // dd($property->client_id);
        return view('admin.properties.hdmf-loan.show', [
            'property' => $property,
            // 'clients' => Client::all(),
            'clients' => Client::where('id', '!=', $property->client_id)->get(),
            'employee' => Employee::whereEmpId($property->created_by)->first()
        ]);
    }

    public function payment($id, Request $request)
    {

        $property = HdmfLoanProperty::findOrFail($id);

        // dd($property);

        // dd($property);
        $payment_amount = $request->paymentAmount;

        $payment_schedules = $property->hdmfLoanPaymentSchedules()->where('active', 1)->get();
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

        // Set to manual if what client wants
        $payment_schedule = $property->hdmfLoanPaymentSchedules()->where('active', 1)->first();
        if(!$payment_schedule){
            $property->status = 3;
            $property->save();
        }

        HdmfLoanPayment::create([
            'uuid' => Str::uuid(),
            'client_id' => $property->client->id,
            'hdmf_loan_property_id' => $property->id,
            'payment_amount' => $request->paymentAmount,
            'payment_for' => $payment_schedule->payment_for ?? 'Full Payment',
            'total_balance' => $property->remaining_balance - $request->paymentAmount,
            'or' => $request->paymentOR,
            'created_by' => session('emp_id'),
            'updated_by' => session('emp_id'),
        ]);

        $property->remaining_balance -= $request->paymentAmount;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', 'Payment successful.');
    }

    public function assume($id, Request $request)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        $client = Client::find($request->owner);
        // dd($client->id);

        $property->client_id = $client->id;
        $property->broker_id = $client->agent->broker->id;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', "Property successfully assumed to $client->first_name $client->last_name.");
    }

    public function set_fully_paid($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        
        $property->status = 3;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', "Property successfully taken out and fully paid.");
    }
    public function set_equity_balance($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
       
        $property->status = 2;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', "Property successfully taken out with equity balance.");
    }

    public function delete($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        $property->active = 0;
        $property->status = -1;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully deleted.');
    }

    public function cancel($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        $property->status = 0;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully cancelled.');
    }

    public function restore($id)
    {
        $property = HdmfLoanProperty::findOrFail($id);
        // if($property->hdmfLoanPaymentSchedules()->where('paid', 0)->first()->payment_for == "Equity"){
        //     $property->status = 4;
        // }
        // else if($property->hdmfLoanPaymentSchedules()->where('paid', 0)->first()->payment_for == "Balance Scheme"){
        //     $property->status = 3;
        // }
        $property->status = 4;
        $property->updated_by = session('emp_id');
        $property->save();

        return redirect()->back()->with('successMessage', 'Reservation successfully resumed.');
    }

    public function printPaymentSchedule($id){
        $property = HdmfLoanProperty::findOrFail($id);

        $total = 0;
        $remaining = 0;
        foreach($property->hdmfLoanPaymentSchedules as $payment){
            if($payment){
                $total += $payment->payment_amount;
                $remaining += $payment->payment_remaining;
            }
        }
        // dd($property->client_id);
        return view('admin.properties.hdmf-loan.print', [
            'property' => $property,
            // 'clients' => Client::all(),
            'clients' => Client::where('id', '!=', $property->client_id)->get(),
            'employee' => Employee::whereEmpId($property->created_by)->first(),
            'total' => $total,
            'remaining' => $remaining
        ]);
    }
}
