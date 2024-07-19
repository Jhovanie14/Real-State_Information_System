<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use App\Models\BrokerCommission;
use App\Models\Client;
use App\Models\HdmfLoanProperty;
use App\Models\InHouseProperty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrokersController extends Controller
{
    public function index()
    {
        return view('admin.brokers.index', [
            'brokers' => Broker::orderBy('active', 'DESC')->filter(request(['search']))->simplePaginate(10),
            'sort' => null
        ]);
    }

    public function show($id)
    {
        // dd($id);
        $broker = Broker::findOrFail($id);
        $hdmf_properties = $broker->hdmf_properties()->get();
        $inhouse_properties = $broker->inhouse_properties()->get();
        $commissions = $broker->commissions()->get();

        $inhouse_commissions = [];
        $hdmf_commissions = [];
        $inhouse_total = 0;
        $hdmf_total = 0;
        $inhouse_remaining = 0;
        $hdmf_remaining = 0;
        foreach ($commissions as $commission) {
            $hdmf_commission = HdmfLoanProperty::where('hdmf_loan_properties.uuid', $commission->property_uuid)
                ->leftJoin('broker_commissions', 'broker_commissions.property_uuid', 'hdmf_loan_properties.uuid')
                ->leftJoin('clients', 'hdmf_loan_properties.client_id', 'clients.id')
                ->select(
                    'broker_commissions.id',
                    'broker_commissions.released',
                    'broker_commissions.created_at',
                    'broker_commissions.updated_at',
                    'broker_commissions.commission',
                    'broker_commissions.percent',
                    'hdmf_loan_properties.model',
                    'clients.first_name',
                    'clients.last_name',
                )
                ->first();
            // $gago = $commission->hdmf_property()->get();
            // foreach($gago as $g){
            //     echo ($g->client()->get());
            // }
            // echo ($commission->hdmf_property()->get());
            // echo "<br>";
            $inhouse_commission = InHouseProperty::where('in_house_properties.uuid', $commission->property_uuid)
                ->leftJoin('broker_commissions', 'broker_commissions.property_uuid', 'in_house_properties.uuid')
                ->leftJoin('clients', 'in_house_properties.client_id', 'clients.id')
                ->select(
                    'broker_commissions.id',
                    'broker_commissions.released',
                    'broker_commissions.created_at',
                    'broker_commissions.updated_at',
                    'broker_commissions.commission',
                    'broker_commissions.percent',
                    'in_house_properties.model',
                    'clients.first_name',
                    'clients.last_name',
                )
                ->first();
            if ($hdmf_commission) {
                $hdmf_total += $hdmf_commission->commission;
                if ($hdmf_commission->released == 0) {
                    $hdmf_remaining += $hdmf_commission->commission;
                }
                $hdmf_commissions[] = $hdmf_commission;
            }
            if ($inhouse_commission) {
                $inhouse_total += $inhouse_commission->commission;
                if ($inhouse_commission->released == 0) {
                    $inhouse_remaining += $inhouse_commission->commission;
                }
                $inhouse_commissions[] = $inhouse_commission;
            }
        }
        // dd($inhouse_commissions);

        $client = Client::find(1);
        return view('admin.brokers.show', [
            'broker' => Broker::findOrFail($id),
            // 'properties' => $orderedProperties,
            'hdmf_properties' => $hdmf_properties,
            'inhouse_properties' => $inhouse_properties,
            'inhouse_commissions' => $inhouse_commissions,
            'hdmf_commissions' => $hdmf_commissions,
            'commissions' => $commissions,
            'hdmf_remaining' => $hdmf_remaining,
            'hdmf_total' => $hdmf_total,
            'inhouse_remaining' => $inhouse_remaining,
            'inhouse_total' => $inhouse_total,
        ]);
    }

    public function printInHouseCommission($id)
    {
        $broker = Broker::findOrFail($id);
        $inhouse_properties = $broker->inhouse_properties()->get();
        $commissions = $broker->commissions()->get();

        $total = 0;
        $remaining = 0;
        $inhouse_commissions = [];
        foreach ($commissions as $commission) {
            $inhouse_commission = InHouseProperty::where('in_house_properties.uuid', $commission->property_uuid)
                ->leftJoin('broker_commissions', 'broker_commissions.property_uuid', 'in_house_properties.uuid')
                ->leftJoin('clients', 'in_house_properties.client_id', 'clients.id')
                ->select(
                    'broker_commissions.id',
                    'broker_commissions.released',
                    'broker_commissions.created_at',
                    'broker_commissions.updated_at',
                    'broker_commissions.commission',
                    'broker_commissions.percent',
                    'in_house_properties.model',
                    'clients.first_name',
                    'clients.last_name',
                )
                ->first();

            if ($inhouse_commission) {
                $total += $inhouse_commission->commission;
                if ($inhouse_commission->released == 0) {
                    $remaining += $inhouse_commission->commission;
                }
                $inhouse_commissions[] = $inhouse_commission;
            }
        }
        // dd($inhouse_commissions);

        $client = Client::find(1);
        return view('admin.brokers.commissions.inhouse-print', [
            'broker' => Broker::findOrFail($id),
            // 'properties' => $orderedProperties,
            'inhouse_properties' => $inhouse_properties,
            'inhouse_commissions' => $inhouse_commissions,
            'commissions' => $commissions,
            'total' => $total,
            'remaining' => $remaining
        ]);
    }

    public function printHdmfCommission($id)
    {
        $broker = Broker::findOrFail($id);
        $hdmf_properties = $broker->hdmf_properties()->get();
        $commissions = $broker->commissions()->get();

        $hdmf_commissions = [];
        $total = 0;
        $remaining = 0;
        foreach ($commissions as $commission) {
            $hdmf_commission = HdmfLoanProperty::where('hdmf_loan_properties.uuid', $commission->property_uuid)
                ->leftJoin('broker_commissions', 'broker_commissions.property_uuid', 'hdmf_loan_properties.uuid')
                ->leftJoin('clients', 'hdmf_loan_properties.client_id', 'clients.id')
                ->select(
                    'broker_commissions.id',
                    'broker_commissions.released',
                    'broker_commissions.created_at',
                    'broker_commissions.updated_at',
                    'broker_commissions.commission',
                    'broker_commissions.percent',
                    'hdmf_loan_properties.model',
                    'clients.first_name',
                    'clients.last_name',
                )
                ->first();
            if ($hdmf_commission) {
                $total += $hdmf_commission->commission;
                if ($hdmf_commission->released == 0) {
                    $remaining += $hdmf_commission->commission;
                }
                $hdmf_commissions[] = $hdmf_commission;
            }
        }

        $client = Client::find(1);
        return view('admin.brokers.commissions.hdmf-print', [
            'broker' => Broker::findOrFail($id),
            'hdmf_properties' => $hdmf_properties,
            'hdmf_commissions' => $hdmf_commissions,
            'commissions' => $commissions,
            'total' => $total,
            'remaining' => $remaining
        ]);
    }

    public function release(BrokerCommission $commission)
    {
        // dd($commission->id);
        $commission->released = 1;
        $commission->save();

        return redirect()->back()->with('successMessage', 'Commission successfully released.');
    }

    public function create()
    {
        return view('admin.brokers.create');
    }

    public function store(Request $request)
    {
        $request->brokerImage ? $imagePath = Storage::disk('public')->put('/brokerImages', $request->brokerImage) : $imagePath = null;

        $broker = Broker::create([
            'uuid' => Str::uuid(),
            'name' => $request->brokerName,
            'address' => $request->address,
            'prc_license' => $request->brokerPRCLicense,
            'tin_no' => $request->brokerTinNo,
            'contact_no' => $request->brokerContactNo,
            'email' => $request->brokerEmail,
            'image' => $imagePath,
            'brokerage_firm' => $request->brokerageFirm,
            'brokerage_address' => $request->brokerageAddress,
            'brokerage_tin_no' => $request->brokerageTinNo,
            'brokerage_contact_no' => $request->brokerageContactNo,
            'brokerage_email' => $request->brokerageEmail,
            'created_by' => session('emp_id'),
        ]);

        return redirect("/brokers/{$broker->id}")->with('successMessage', 'Broker successfully added.');
    }

    public function update(Broker $broker, Request $request)
    {
        // dd($request->all());
        $previousImage = Broker::whereId($broker->id)->pluck('image')->first();
        // dd($previousImage);
        if ($request->brokerImage) {
            if (Storage::exists($previousImage)) {
                Storage::delete($previousImage);
            }
            if ($request->hasFile('brokerImage')) {
                $brokerImage = $request->file('brokerImage')->store('brokerImages', 'public');
            }
        } else {
            $brokerImage = $previousImage;
        }

        $broker->update([
            'name' => $request->brokerName,
            'address' => $request->address,
            'prc_license' => $request->brokerPRCLicense,
            'tin_no' => $request->brokerTinNo,
            'contact_no' => $request->brokerContactNo,
            'email' => $request->brokerEmail,
            'image' => $brokerImage,
            'brokerage_firm' => $request->brokerageFirm,
            'brokerage_address' => $request->brokerageAddress,
            'brokerage_tin_no' => $request->brokerageTinNo,
            'brokerage_contact_no' => $request->brokerageContactNo,
            'brokerage_email' => $request->brokerageEmail,
            'created_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Broker successfully updated.');
    }

    public function archive(Broker $broker)
    {
        $broker->active = -1;
        $broker->updated_by = session('emp_id');
        $broker->save();

        return redirect()->back()->with('successMessage', 'Broker successfully archived.');
    }
    public function delete(Broker $broker)
    {
        $broker->active = 0;
        $broker->updated_by = session('emp_id');
        $broker->save();

        return redirect()->back()->with('successMessage', 'Broker successfully deleted.');
    }
    public function unarchive(Broker $broker)
    {
        $broker->active = 1;
        $broker->updated_by = session('emp_id');
        $broker->save();

        return redirect()->back()->with('successMessage', 'Broker successfully unarchived.');
    }

    public function removeClient($id)
    {
        $client = Client::find($id);
        $client->agent_id = 0;
        $client->save();

        return redirect()->back()->with('successMessage', 'Client successfully removed.');
    }

    public function print(Broker $broker)
    {
        return view('admin.brokers.print', [
            'broker' => $broker
        ]);
    }
}
