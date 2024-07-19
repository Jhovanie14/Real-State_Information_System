@extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark ">Add Broker</h1>
                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                        <li class="breadcrumb-item"><a href="/brokers">Brokers</a></li>
                        <li class="breadcrumb-item">Add Broker</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="d-flex flex-column">
                <form action="/brokers/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-warning">
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
                                            <input type="file" class="border border-dark rounded p-2" name="brokerImage" accept="image/png, image/gif, image/jpeg" 
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="brokerName" class="form-label">Broker Name:</label>
                                                <input type="text" class="form-control border" id="brokerName"
                                                    name="brokerName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="brokerAddress" class="form-label">Broker Address:</label>
                                                <input type="text" class="form-control border" id="brokerAddress"
                                                    name="brokerAddress" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerPRCLicense" class="form-label">PRC
                                                    License:</label>
                                                <input type="text" class="form-control border" id="brokerPRCLicense"
                                                    name="brokerPRCLicense" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerTinNo" class="form-label">TIN
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerTinNo"
                                                    name="brokerTinNo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerContactNo" class="form-label">Contact
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerContactNo"
                                                    name="brokerContactNo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerEmail" class="form-label">Email
                                                    Address:</label>
                                                <input type="text" class="form-control border" id="brokerEmail"
                                                    name="brokerEmail" required>
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
                                                    name="brokerageFirm" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-md-flex justify-content-between align-items-end mt-3">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageAddress" class="form-label">Brokerage
                                                    Address:</label>
                                                <input type="text" class="form-control border" id="brokerageAddress"
                                                    name="brokerageAddress" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageTinNo" class="form-label">TIN
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerageTinNo"
                                                    name="brokerageTinNo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageContactNo" class="form-label">Contact
                                                    No:</label>
                                                <input type="text" class="form-control border" id="brokerageContactNo"
                                                    name="brokerageContactNo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="brokerageEmail" class="form-label">Email
                                                    Address:</label>
                                                <input type="text" class="form-control border" id="brokerageEmail"
                                                    name="brokerageEmail" required>
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
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success btn-lg px-5 my-3">
                                            <span>Submit</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-12">

                            </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>

<script>
    $('.personalInfo_maritalStatusSelect').change(function(){
        var responseID = $(this).val();
        if(responseID == "Married"){
            $('#spouseCard').removeClass("noSpouse");
            $('#spouseCard').addClass("withSpouse");
        }else{
            $('#spouseCard').removeClass("withSpouse");
            $('#spouseCard').addClass("noSpouse");
        }
    });

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

    document.getElementById("addBroker").onchange = function() {
    var selectedOption = this.value;
    var elementToShow = document.getElementById("brokerCard");
    if (selectedOption === "addBroker") {
        elementToShow.style.display = "block";
    } else {
        elementToShow.style.display = "none";
        $('#brokerForm').prop("disabled", true);
    }
};
</script>
@endsection