@extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark ">Add Client</h1>
                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="{{ action('MainController@home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ action('ClientsController@index') }}">Clients</a></li>
                        --}}
                        <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                        <li class="breadcrumb-item"><a href="/clients">Clients</a></li>
                        <li class="breadcrumb-item">Add Client</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="d-flex flex-column">
                <form action="/clients/" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Personal Information --}}
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="card-title">Personal Information</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="d-flex-column justify-content-center">
                                    <div class="text-center">
                                        <img class="mb-4 text-center roundedLargeImage" id="clientImagePreview"
                                            src="{{ asset('/images/default.png') }}" alt="Client Image">
                                    </div>
                                    <div class="text-center my-3">
                                        <input type="file" class="border border-dark rounded p-2" name="image"
                                            accept="image/png, image/gif, image/jpeg" id="clientImage">
                                    </div>
                                    <div class="text-center mb-5">
                                        <label class="col-md-6 col-form-label">
                                            Client Image
                                        </label>
                                    </div>
                                </div>

                                <div class="d-flex flex-column">
                                    <div class="d-md-flex justify-content-between align-items-end">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_lastName" class="form-label">Last
                                                    Name:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_lastName" name="lastName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_firstName" class="form-label">First
                                                    Name:</label>
                                                <input type="text" class="form-control border "
                                                    id="personalInfo_firstName" name="firstName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="personalInfo_middleName" class="form-label">Middle
                                                    Name:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_middleName" name="middleName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class=" form-group">
                                                <label for="personalInfo_suffix" class="form-label">Suffix:</label>
                                                <input type="text" class="form-control border" id="personalInfo_suffix"
                                                    name="suffix">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="personalInfo_presentAddress" class="form-label">Present
                                                    Address:</label>

                                                <input type="text" class="form-control border"
                                                    id="personalInfo_presentAddress" name="presentAddress">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_contactNo" class="form-label">Contact
                                                    No:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_contactNo" name="contactNo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="gender" class="form-label">Gender:</label>

                                                <select class="custom-select" id="gender" name="gender">
                                                    <option selected disabled hidden>Choose...</option>
                                                    <option value="Male" name="Male">Male</option>
                                                    <option value="Female" name="Female">Female</option>
                                                    <!-- subject to change -->
                                                    <option value="Secret" name="Secret">
                                                        Prefer
                                                        not
                                                        to say</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class=" form-group">
                                                <label for="maritalStatus" class="form-label">Marital
                                                    Status:</label>
                                                <select class="custom-select maritalStatus" id="maritalStatus"
                                                    name="maritalStatus">
                                                    <option hidden selected disabled>Choose...</option>
                                                    <option value="Single" name="Single">Single</option>
                                                    <option value="Married" name="Married">Married</option>
                                                    <option value="Widowed" name="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_dateOfBirth" class="form-label">Date of
                                                    Birth:</label>
                                                <input type="date" class="form-control border"
                                                    id="personalInfo_dateOfBirth" name="dateOfBirth">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        {{-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="personalInfo_age" class="form-label">Age:</label>
                                                <input type="number" class="form-control border" id="personalInfo_age"
                                                    name="age">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_nationality"
                                                    class="form-label">Nationality:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_nationality" name="nationality">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_religion" class="form-label">Religion:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_religion" name="religion">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_placeOfBirth" class="form-label">Place
                                                    of Birth:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_placeOfBirth" name="placeOfBirth">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_pagibigNo" class="form-label">PAG-IBIG
                                                    No.:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_pagibigNo" name="pagibigNo">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_sssNo" class="form-label">SSS
                                                    No.:</label>
                                                <input type="text" class="form-control border" id="personalInfo_sssNo"
                                                    name="sssNo">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email
                                                    Account:</label>
                                                <input type="email" class="form-control border" id="email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="personalInfo_gsisNo" class="form-label">GSIS
                                                    No.:</label>
                                                <input type="text" class="form-control border" id="personalInfo_gsisNo"
                                                    name="gsisNo">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="facebook" class="form-label">Facebook
                                                    Account:</label>
                                                <input type="text" class="form-control border" id="facebook"
                                                    name="facebook">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="personalInfo_tinNo" class="form-label">TIN
                                                    No.:</label>
                                                <input type="text" class="form-control border" id="personalInfo_tinNo"
                                                    name="tinNo">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="messenger" class="form-label">Messenger
                                                    Account:</label>
                                                <input type="text" class="form-control border" id="messenger"
                                                    name="messenger">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="personalInfo_passportNo" class="form-label">Passport
                                                    No.:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_passportNo" name="passportNo">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="viber" class="form-label">Viber:</label>
                                                <input type="text" class="form-control border" id="viber" name="viber">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-md-flex justify-content-between align-items-end">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_passportValidity" class="form-label">
                                                    Passport Validity:</label>
                                                <input type="date" class="form-control border"
                                                    id="personalInfo_passportValidity" name="passportValidity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_passportExpiration" class="form-label">Passport
                                                    Expiration Date:</label>
                                                <input type="date" class="form-control border"
                                                    id="personalInfo_passportExpiration" name="passportExpiration">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="otherSocial" class="form-label">Other
                                                    Social Media Account:</label>
                                                <input type="text" class="form-control border" id="otherSocial"
                                                    name="otherSocial">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-start">
                                        <div class="col-md-4">
                                            <div class=" form-group">
                                                <label for="residenceStatus" class="form-label">Residence
                                                    Status:</label>
                                                <select class="custom-select" id="residenceStatus"
                                                    name="residenceStatus" required>
                                                    <option hidden selected disabled value="">Choose...</option>
                                                    <option value="Owned" name="Owned">Owned</option>
                                                    <option value="Rent" name="Rent">Rent</option>
                                                    <option value="Lived with relatives" name="Relatives">
                                                        Lived
                                                        with relatives
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="personalInfo_yearsOfStay" class="form-label">Years
                                                    of stay:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_yearsOfStay" name="yearsOfStay">
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="personalInfo_monthlyRental">
                                            <div class="form-group">
                                                <label for="personalInfo_monthlyRental" class="form-label">Monthly
                                                    Rental:</label>
                                                <input type="text" class="form-control border"
                                                    id="personalInfo_monthlyRental" name="monthlyRental">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-md-flex justify-content-start">
                                        <div class="col-12">
                                            <div class=" form-group">
                                                <label for="personalInfo_residenceStatus"
                                                    class="form-label">Agent:</label>
                                                <select required class="custom-select" id="agentID" name="agentID">
                                                    <option hidden disabled selected value="">Choose one...</option>
                                                    <option value="0">None</option>
                                                    @foreach ($agents as $agent)
                                                    <option value={{$agent->id}}>{{$agent->name}}</option>
                                                    @endforeach
                                                    {{-- <option value="new">New Agent...</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-warning" id="brokerCard" name="brokerCard" style="display:none">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="card-title">Broker Information</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- BROKER INFORMATION --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex-column justify-content-center align-items-center">
                                        <div class="text-center">
                                            <img class="mb-4 text-center roundedLargeImage" id="brokerImagePreview"
                                                src="{{ asset('/images/default.png') }}" alt="Broker Image">
                                        </div>
                                        <div class="text-center mt-3">
                                            <input type="file" class="border border-dark rounded p-2" name="brokerImage"
                                                id="brokerImage">
                                        </div>
                                        <div class="text-center mb-2">
                                            <label class="col-sm-6 col-form-label">
                                                Broker Picture
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <span class="text-secondary text-xs">BROKER PERSONAL INFORMATION</span>
                                        <div class="mx-1"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="brokerName" class="form-label">Broker Name:</label>
                                                <input type="text" class="form-control border" id="brokerName"
                                                    name="brokerName">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerPRCLicense" class="form-label">PRC
                                                    License:</label>
                                                <input type="text" class="form-control border" id="brokerPRCLicense"
                                                    name="brokerPRCLicense">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerTinNo" class="form-label">TIN
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerTinNo"
                                                    name="brokerTinNo">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerContactNo" class="form-label">Contact
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerContactNo"
                                                    name="brokerContactNo">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerEmail" class="form-label">Email
                                                    Address:</label>
                                                <input type="text" class="form-control border" id="brokerEmail"
                                                    name="brokerEmail">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <span class="text-secondary text-xs">BROKERAGE INFORMATION</span>
                                        <div class="mx-1"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>
                                    </div>

                                    <div class="d-sm-flex justify-content-start align-items-end mt-3">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="brokerageFirm" class="form-label">Brokerage
                                                    Firm:</label>
                                                <input type="text" class="form-control border" id="brokerageFirm"
                                                    name="brokerageFirm">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-md-flex justify-content-between align-items-end mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageAddress" class="form-label">Brokerage
                                                    Address:</label>
                                                <input type="text" class="form-control border" id="brokerageAddress"
                                                    name="brokerageAddress">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageTinNo" class="form-label">TIN
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerageTinNo"
                                                    name="brokerageTinNo">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageContactNo" class="form-label">Contact
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerageContactNo"
                                                    name="brokerageContactNo">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageEmail" class="form-label">Email
                                                    Address:</label>
                                                <input type="text" class="form-control border" id="brokerageEmail"
                                                    name="brokerageEmail">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="mx-1 mt-5 mb-2"
                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                    </div> --}}
                                    {{-- <div class="row">
                                        <div class="container-fluid">
                                            <div class="d-flex justify-content-end">
                                                <button href="{{ action('PropertiesController@store')}}" type="submit"
                                                    class="btn btn-success btn-lg px-5 my-3">
                                                    <span>Next</span>
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-lg px-5 my-3">
                                    <span>Submit</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function (e) {
        $('#clientImage').change(function(){  
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#clientImagePreview').attr('src', e.target.result); 
            }
        reader.readAsDataURL(this.files[0]); 
        });
    });

    $(document).ready(function (e) {
        $('#brokerImage').change(function(){  
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#brokerImagePreview').attr('src', e.target.result); 
            }
        reader.readAsDataURL(this.files[0]); 
        });
    });

    document.getElementById("agentID").onchange = function() {
    var selectedOption = this.value;
    var elementToShow = document.getElementById("brokerCard");
    if (selectedOption === "new") {
        elementToShow.style.display = "block";
    } else {
        elementToShow.style.display = "none";
        $('#brokerCard').prop("disabled", true);
    }
};
</script>
@endsection