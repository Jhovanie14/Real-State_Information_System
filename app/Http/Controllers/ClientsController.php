<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Broker;
use App\Models\Client;
use App\Models\Dependent;
use App\Models\Employment;
use App\Models\NonRelativeCharacterReference;
use App\Models\SelfEmployment;
use App\Models\Spouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    public function index() 
    {
        return view('admin.clients.index', ['clients' => Client::orderBy('active', 'DESC')->filter(request(['search']))->simplePaginate(10), 'sort' => null]);
    }

    public function active()
    {
        return view('admin.clients.index', [
            'clients' => Client::whereActive(2)->simplePaginate(10),
            'sort' => 'Active'
        ]);
    }

    public function archived()
    {
        return view('admin.clients.index', [
            'clients' => Client::whereActive(1)->simplePaginate(10),
            'sort' => 'Archived'
        ]);
    }
    public function deleted()
    {
        return view('admin.clients.index', [
            'clients' => Client::whereActive(0)->simplePaginate(10),
            'sort' => 'Deleted'
        ]);
    }

    public function print(Client $client)
    {
        return view('admin.clients.print',[
            'client' => $client
        ]);
    }

    public function create()
    {
        return view('admin.clients.create', ['agents' => Agent::whereActive(1)->get()]);
    }

    public function showClient($id)
    {
        return view('admin.clients.show', ['client' => Client::findOrFail($id)]);
    }

    public function addClient(Request $request)
    {
        if ($request->brokerID == "new") {
            $request->brokerImage ? $imagePath = Storage::disk('public')->put('/brokerImages', $request->brokerImage) : $imagePath = null;

            $broker = Broker::create([
                'uuid' => Str::uuid(),
                'name' => $request->brokerName,
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
        }
        $brokerID = $request->brokerID == "new" ? $broker->id : ($request->brokerID > 0 ? $request->brokerID : null);
        $request->image ? $imagePath = Storage::disk('public')->put('/clientImages', $request->image) : $imagePath = null;

        $client = Client::create([
            'uuid' => Str::uuid(),
            'agent_id' => $request->agentID,
            'image' => $imagePath,
            'last_name' => $request->lastName,
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'suffix' => $request->suffix,
            'present_address' => $request->presentAddress,
            'contact_no' => $request->contactNo,
            'gender' => $request->gender,
            'marital_status' => $request->maritalStatus,
            'date_of_birth' => $request->dateOfBirth,
            'place_of_birth' => $request->placeOfBirth,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'pagibig_no' => $request->pagibigNo,
            'sss_no' => $request->sssNo,
            'gsis_no' => $request->gsisNo,
            'tin_no' => $request->tinNo,
            'passport_no' => $request->passportNo,
            'passport_validity' => $request->passportValidity,
            'passport_expiration_date' => $request->passportExpiration,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'messenger' => $request->messenger,
            'viber' => $request->viber,
            'other_social' => $request->otherSocial,
            'residence_status' => $request->residenceStatus,
            'monthly_rental' => $request->monthlyRental,
            'years_of_stay' => $request->yearsOfStay,
            'created_by' => session('emp_id'),
        ]);

        return redirect('clients/' . $client->id)->with('successMessage', 'Client successfully created.');
    }

    public function updateClient(Request $request, Client $client)
    {
        $client->update([
            'last_name' => $request->client_lastName,
            'first_name' => $request->client_firstName,
            'middle_name' => $request->client_middleName,
            'suffix' => $request->client_suffix,
            'present_address' => $request->client_presentAddress,
            'contact_no' => $request->client_contactNo,
            'gender' => $request->client_gender,
            'marital_status' => $request->client_maritalStatus,
            'date_of_birth' => $request->client_dateOfBirth,
            'place_of_birth' => $request->client_placeOfBirth,
            'nationality' => $request->client_nationality,
            'religion' => $request->client_religion,
            'pagibig_no' => $request->client_pagibigNo,
            'sss_no' => $request->client_sssNo,
            'gsis_no' => $request->client_gsisNo,
            'tin_no' => $request->client_tinNo,
            'passport_no' => $request->client_passportNo,
            'passport_validity' => $request->client_passportValidity,
            'passport_expiration_date' => $request->client_passportExpiration,
            'email' => $request->client_email,
            'facebook' => $request->client_facebook,
            'messenger' => $request->client_messenger,
            'viber' => $request->client_viber,
            'other_social' => $request->client_otherSocial,
            'residence_status' => $request->client_residenceStatus,
            'monthly_rental' => $request->client_monthlyRental,
            'years_of_stay' => $request->client_yearsOfStay,
            'updated_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Client information successfully updated.');
    }

    public function updateClientImage(Request $request, Client $client)
    {
        $previousImage = Client::where('id', $client->id)->pluck('image')->first();
        if ($request->client_image) {
            if (Storage::exists($previousImage)) {
                Storage::delete($previousImage);
            }
            if ($request->hasFile('client_image')) {
                $clientImage = $request->file('client_image')->store('clientImages', 'public');
            }
        } else {
            $clientImage = $previousImage;
        }

        $client->image = $clientImage;
        $client->updated_by = session('emp_id');
        $client->save();

        return redirect()->back()->with('successMessage', 'Client image uploaded successfully.');
    }

    //////////////////////////////
    //                          //
    //--------------------------//
    // Reservation Statuses:    //
    //--------------------------// 
    //                          //
    // 2 - Ongoing / Active     //
    // 1 - Cancelled            //
    // 0 - Deleted              //
    //                          //
    //////////////////////////////

    public function deleteClient(Client $client)
    {
        $client->active = 0;
        $client->updated_by = session('emp_id');
        $client->save();

        return redirect()->back()->with('successMessage', 'Client successfully deleted.');
    }

    public function activateClient(Client $client)
    {
        $client->active = 2;
        $client->updated_by = session('emp_id');
        $client->save();

        return redirect()->back()->with('successMessage', 'Client successfully unarchived.');
    }

    public function archiveClient(Client $client)
    {
        $client->active = 1;
        $client->updated_by = session('emp_id');
        $client->save();

        return redirect()->back()->with('successMessage', 'Client successfully archived.');
    }

    public function addSpouse(Request $request, Client $client)
    {
        $request->spouse_image ?
            $spouseImage = $request->file('spouse_image')->store('spouseImages', 'public') : $spouseImage = null;

        $spouse = Spouse::create([
            'uuid' => Str::uuid(),
            'client_id' => $client->id,
            'last_name' => $request->spouse_lastName,
            'first_name' => $request->spouse_firstName,
            'middle_name' => $request->spouse_middleName,
            'suffix' => $request->spouse_suffix,
            'occupation' => $request->spouse_occupation,
            'department' => $request->spouse_department,
            'length_of_employment' => $request->spouse_lengthOfEmployment,
            'employer_name' => $request->spouse_employerName,
            'employer_contact_no' => $request->spouse_employerContactNo,
            'employer_business_address' => $request->spouse_employerBusinessAddress,
            'employer_email' => $request->spouse_employerEmail,
            'gross_pay' => $request->spouse_grossPay,
            'tin_no' => $request->spouse_tinNo,
            'other_income' => $request->spouse_otherIncome,
            'hdmf_no' => $request->spouse_hdmfNo,
            'sss_no' => $request->spouse_sssNo,
            'facebook' => $request->spouse_facebook,
            'gsis_no' => $request->spouse_gsisNo,
            'contact_no' => $request->spouse_contactNo,
            'passport_no' => $request->spouse_passportNo,
            'image' => $spouseImage,
            'created_by' => session('emp_id')
        ]);

        return redirect()->back()->with('successMessage', 'Spouse Record successfully added.');
    }

    public function updateSpouse(Request $request, Spouse $spouse)
    {
        $spouse->update([
            'last_name' => $request->spouse_lastName,
            'first_name' => $request->spouse_firstName,
            'middle_name' => $request->spouse_middleName,
            'suffix' => $request->spouse_suffix,
            'occupation' => $request->spouse_occupation,
            'department' => $request->spouse_department,
            'length_of_employment' => $request->spouse_lengthOfEmployment,
            'employer_name' => $request->spouse_employerName,
            'employer_contact_no' => $request->spouse_employerContactNo,
            'employer_business_address' => $request->spouse_employerBusinessAddress,
            'employer_email' => $request->spouse_employerEmail,
            'gross_pay' => $request->spouse_grossPay,
            'tin_no' => $request->spouse_tinNo,
            'other_income' => $request->spouse_otherIncome,
            'hdmf_no' => $request->spouse_hdmfNo,
            'sss_no' => $request->spouse_sssNo,
            'facebook' => $request->spouse_facebook,
            'gsis_no' => $request->spouse_gsisNo,
            'contact_no' => $request->spouse_contactNo,
            'passport_no' => $request->spouse_passportNo,
            'updated_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Spouse successfully updated.');
    }

    public function updateSpouseImage(Request $request, Spouse $spouse)
    {
        $previousImage = Spouse::where('id', $spouse->id)->pluck('image')->first();
        if ($request->spouse_image) {
            if (Storage::exists($previousImage)) {
                Storage::delete($previousImage);
            }
            if ($request->hasFile('spouse_image')) {
                $spouseImage = $request->file('spouse_image')->store('spouseImages', 'public');
            }
        } else {
            $spouseImage = $previousImage;
        }

        $spouse->image = $spouseImage;
        $spouse->updated_by = session('emp_id');
        $spouse->save();

        return redirect()->back()->with('successMessage', 'Spouse successfully updated.');
    }

    public function deleteSpouse(Spouse $spouse)
    {
        $spouse->client_id = null;
        $spouse->active = 0;
        $spouse->updated_by = session('emp_id');
        $spouse->save();

        return redirect()->back()->with('successMessage', 'Spouse record successfully removed');
    }

    public function addEmployment(Request $request, Client $client)
    {
        $employment = Employment::create([
            'uuid' => Str::uuid(),
            'client_id' => $client->id,
            'occupation' => $request->occupation,
            'position' => $request->position,
            'length_of_employment' => $request->lengthOfEmployment,
            'employer_name' => $request->employerName,
            'contact_no' => $request->contactNo,
            'employer_business_address' => $request->employerBusinessAddress,
            'employer_email' => $request->employerEmail,
            'monthly_gross_pay' => $request->monthlyGrossPay,
            'other_income' => $request->otherIncome,
            'created_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Employment successfully added.');;
    }

    public function updateEmployment(Request $request, Employment $employment)
    {
        $employment->update([
            'occupation' => $request->occupation,
            'position' => $request->position,
            'length_of_employment' => $request->lengthOfEmployment,
            'employer_name' => $request->employerName,
            'contact_no' => $request->contactNo,
            'employer_business_address' => $request->employerBusinessAddress,
            'employer_email' => $request->employerEmail,
            'monthly_gross_pay' => $request->monthlyGrossPay,
            'other_income' => $request->otherIncome,
            'updated_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Employment successfully updated.');;
    }

    public function deleteEmployment(Employment $employment)
    {
        $employment->client_id = null;
        $employment->active = 0;
        $employment->updated_by = session('emp_id');
        $employment->save();

        return redirect()->back()->with('successMessage', 'Employment record successfully deleted.');
    }

    public function addSelfEmployment(Request $request, Client $client)
    {
        $selfEmployment = SelfEmployment::create([
            'uuid' => Str::uuid(),
            'client_id' => $client->id,
            'nature_of_business' => $request->natureOfBusiness,
            'position' => $request->position,
            'years_of_operation' => $request->yearsOfOperation,
            'business_name' => $request->businessName,
            'contact_no' => $request->contactNo,
            'business_address' => $request->businessAddress,
            'business_email' => $request->businessEmail,
            'monthly_gross_pay' => $request->monthlyGrossPay,
            'tin_no' => $request->tinNo,
            'sss_no' => $request->sssNo,
            'pagibig_no' => $request->pagibigNo,
            'other_income' => $request->otherIncome,
            'created_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Self-Employment successfully added.');
    }

    public function updateSelfEmployment(Request $request, SelfEmployment $selfEmployment)
    {
        $selfEmployment->update([
            'nature_of_business' => $request->natureOfBusiness,
            'position' => $request->position,
            'years_of_operation' => $request->yearsOfOperation,
            'business_name' => $request->businessName,
            'contact_no' => $request->contactNo,
            'business_address' => $request->businessAddress,
            'business_email' => $request->businessEmail,
            'monthly_gross_pay' => $request->monthlyGrossPay,
            'tin_no' => $request->tinNo,
            'sss_no' => $request->sssNo,
            'pagibig_no' => $request->pagibigNo,
            'other_income' => $request->otherIncome,
            'created_by' => session('emp_id'),
        ]);

        return redirect()->back()->with('successMessage', 'Self-Employment details successfully updated');
    }

    public function deleteSelfEmployment(SelfEmployment $selfEmployment)
    {
        $selfEmployment->client_id = null;
        $selfEmployment->active = 0;
        $selfEmployment->updated_by = session('emp_id');
        $selfEmployment->save();

        return redirect()->back()->with('successMessage', 'Self-Employment record successfully deleted.');
    }

    public function addDependent(Request $request, Client $client)
    {
        $dependent = Dependent::create([
            'uuid' => Str::uuid(),
            'client_id' => $client->id,
            'name' => $request->name,
            'age' => $request->age,
            'created_by' => session('emp_id')
        ]);

        return redirect()->back()->with('successMessage', 'Dependent successfully added.');
    }

    public function updateDependent(Request $request, Dependent $dependent)
    {
        $dependent->name = $request->name;
        $dependent->age = $request->age;
        $dependent->updated_by = session('emp_id');
        $dependent->save();

        return redirect()->back()->with('successMessage', 'Dependent successfully updated.');
    }

    public function deleteDependent(Dependent $dependent)
    {
        $dependent->client_id = null;
        $dependent->active = 0;
        $dependent->updated_by = session('emp_id');
        $dependent->save();

        return redirect()->back()->with('successMessage', 'Dependent successfully removed.');
    }

    public function addNRCR(Request $request, Client $client)
    {
        $nonRelativeCharacterReference = NonRelativeCharacterReference::create([
            'uuid' => Str::uuid(),
            'client_id' => $client->id,
            'name' => $request->name,
            'address' => $request->address,
            'contact_no' => $request->contactNo,
            'created_by' => session('emp_id')
        ]);

        return redirect()->back()->with('successMessage', 'Reference successfully added.');
    }

    public function updateNRCR(Request $request, NonRelativeCharacterReference $nonRelativeCharacterReference)
    {
        $nonRelativeCharacterReference->name = $request->name;
        $nonRelativeCharacterReference->address = $request->address;
        $nonRelativeCharacterReference->contact_no = $request->contactNo;
        $nonRelativeCharacterReference->updated_by = session('emp_id');
        $nonRelativeCharacterReference->save();

        return redirect()->back()->with('successMessage', 'Reference successfully updated.');
    }

    public function deleteNRCR(NonRelativeCharacterReference $nonRelativeCharacterReference)
    {
        $nonRelativeCharacterReference->client_id = null;
        $nonRelativeCharacterReference->active = 0;
        $nonRelativeCharacterReference->updated_by = session('emp_id');
        $nonRelativeCharacterReference->save();

        return redirect()->back()->with('successMessage', 'Reference successfully removed.');
    }
}
