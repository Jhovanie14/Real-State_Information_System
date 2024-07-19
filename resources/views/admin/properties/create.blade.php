@extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark ">Add Property</h1>
                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ action('MainController@home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ action('PropertiesController@index') }}">Property</a>
                        </li>
                        <li class="breadcrumb-item">Add Property</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ action('PropertiesController@store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="card">

                        <div class="card-header bg-warning h5 d-flex flex-row align-items-center">
                            <span class="mr-4">
                                House Model:
                            </span>
                            <span>
                                <select class="custom-select" id="houseModels" name="property_houseModel">
                                    {{-- <option value="Maria Delfina" hidden selected>Choose...
                                    </option> --}}
                                    <option value="Maria Delfina" selected>Maria Delfina</option>
                                    <option value="Maria Lorenza">Maria Lorenza</option>
                                    <option value="Maria Marcela">Maria Marcela</option>
                                </select>
                            </span>



                        </div>

                        <div class="card-body">
                            {{-- PROPERTY INFORMATION --}}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4 px-3">
                                        <div class="d-flex-column text-md-left text-center">
                                            <div class="text-center">
                                                <img src="{{  asset('/images/housemodels/maria_marcela.png') }}"
                                                    alt="House Model" class="rounded shadow mr-3 img-fluid w-100">
                                            </div>

                                            <div class="d-flex justify-content-start align-items-center mt-4 ">
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>
                                            <div id="propertyDetails"
                                                class="text-center d-flex flex-column align-items-center justify-content-center">
                                                <span class="display-3" id="houseModelName">Maria Delfina</span>
                                                <span class="text-secondary text-s mb-0">HOUSE MODEL</span>
                                            </div>

                                            <div class="mx-1 mt-2 mb-3"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>

                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center mb-4">
                                                <div class="">

                                                    <span class="display-4">&#8369;</span>
                                                    <span class="display-4" id="packagePrice">5,000,000</span>

                                                </div>
                                                <span class="text-secondary text-s mb-0">PACKAGE PRICE</span>
                                            </div>
                                            <div class="mx-1 mt-2 mb-3"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>
                                            <div class="d-flex">
                                                <div class="pt-2 pr-4">
                                                    <span class="h4">Owner: </span>
                                                </div>

                                                <select class="form-control form-control-lg" id="clientList"
                                                    name="property_owner" required>
                                                    {{-- <option hidden selected disabled>Choose...
                                                    </option> --}}
                                                    @foreach ($clients as $client)

                                                    <option value="{{ $clients? $client->cln_id : '' }}">
                                                        {{ $clients ? $client->cln_first_name . ' '
                                                        . $client->cln_last_name: ''}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-8 px-3">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span class="text-secondary text-xs">PROPERTY INFORMATION</span>
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-2 d-flex flex-column">
                                                <span class="display-3" id="packagePrice">5,000,000</span>

                                                <span class="text-secondary text-s mb-2">CONTRACT PRICE</span>
                                                <div class="form-group">
                                                    <label for="property_paymentTerm" class="form-label">Payment
                                                        Term:</label>

                                                    <select class="custom-select" id="property_paymentTerm"
                                                        name="property_paymentTerm">
                                                        {{-- <option selected disabled hidden>Choose...</option> --}}
                                                        <option value="Spot Cash" name="Spot Cash" selected>Spot Cash
                                                        </option>
                                                        <option value="HDMF Loan" name="HDMF Loan">HDMF Loan
                                                        </option>
                                                        <option value="In-house Payment" name="In-house Payment">
                                                            In-house
                                                            Payment</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="property_reservationFee" class="form-label">Reservation
                                                        Fee:</label>
                                                    <input type="text" class="form-control border"
                                                        id="property_reservationFee" name="property_reservationFee"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="property_reservationPaymentDate"
                                                        class="form-label">Upholding Date:</label>
                                                    <input type="date" class="form-control border"
                                                        id="property_reservationPaymentDate"
                                                        name="property_reservationPaymentDate" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mx-1"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>

                                        <div class="d-sm-flex justify-content-start align-items-end mt-3">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_paymentTerm" class="form-label">Payment
                                                        Term:</label>

                                                    <select class="custom-select" id="property_paymentTerm"
                                                        name="property_paymentTerm">
                                                        {{-- <option selected disabled hidden>Choose...</option> --}}
                                                        <option value="Spot Cash" name="Spot Cash" selected>Spot Cash
                                                        </option>
                                                        <option value="HDMF Loan" name="HDMF Loan">HDMF Loan
                                                        </option>
                                                        <option value="In-house Payment" name="In-house Payment">
                                                            In-house
                                                            Payment</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3" id="property_installment" style="display: none">
                                                <div class="form-group">
                                                    <label for="property_installment" id="property_installment"
                                                        class="form-label">Installment:</label>

                                                    <select class="custom-select" id="property_installment"
                                                        name="property_installment">
                                                        {{-- <option selected disabled hidden>Choose...</option> --}}
                                                        <option value="6" name="6 Months">6 Months
                                                        </option>
                                                        <option value="12" name="12 Months">12 Months
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-3">
                                                {{-- <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="property_downpayment"
                                                            class="form-label">Downpayment:</label>
                                                        <input type="text" class="form-control border"
                                                            id="property_downPayment" name="property_downPayment"
                                                            required>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>

                                        <div class="mx-1"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>

                                        <div class="d-sm-flex justify-content-between align-items-end mt-3">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_blkNo" class="form-label">Blk.
                                                        No:</label>
                                                    <input type="text" class="form-control border" id="property_blkNo"
                                                        name="property_blkNo" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_lotNo" class="form-label">Lot
                                                        No:</label>
                                                    <input type="text" class="form-control border " id="property_lotNo"
                                                        name="property_lotNo" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_floorArea" class="form-label">Floor
                                                        Area
                                                        (m²):</label>
                                                    <input type="text" class="form-control border"
                                                        id="property_floorArea" name="property_floorArea" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class=" form-group">
                                                    <label for="property_titleNo" class="form-label">Title
                                                        No:</label>
                                                    <input type="text" class="form-control border" id="property_titleNo"
                                                        name="property_titleNo" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-sm-flex justify-content-between align-items-end mt-3">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_equityFee" class="form-label">Equity
                                                        Fee:</label>
                                                    <input type="text" class="form-control border"
                                                        id="property_equityFee" name="property_equityFee" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_processingFee" class="form-label">Processing
                                                        Fee:</label>
                                                    <input type="text" class="form-control border "
                                                        id="property_processingFee" name="property_processingFee"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="property_cornerLotFee" class="form-label">Corner
                                                        Lot
                                                        Fee:</label>
                                                    <input type="text" class="form-control border"
                                                        id="property_cornerLotFee" name="property_cornerLotFee"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class=" form-group">
                                                    <label for="property_commercialLotFee" class="form-label">Commercial
                                                        Lot Fee:</label>
                                                    <input type="text" class="form-control border"
                                                        id="property_commercialLotFee" name="property_commercialLotFee"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="container-fluid">
                                                <div class="d-flex justify-content-end">
                                                    <button href="{{ action('PropertiesController@store')}}"
                                                        type="submit" class="btn btn-success btn-lg px-5 my-3">
                                                        <span>Next</span>
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    var houseModelPrice = [
        // '0',
        '5,000,000',
        '10,000,000',
        '15,000,000',
    ];

    $(document).ready(function() {
        $('#houseModels').change(function () {
            var index = parseInt($('#houseModels').prop('selectedIndex'));
            // $("#propertyDetails").show()   
            $('#packagePrice').text(houseModelPrice[index]);
            $('#houseModelName').text($(this).val());
        });
    });

    $('#property_paymentTerm').on('change',function(){
        if( $(this).prop('selectedIndex') == 1){
            $("#property_installment").show()
        } else if ($(this).prop('selectedIndex') == 2){
            $("#property_installment").show()   
        } else{
            $("#property_installment").hide()
        }
    });

    $(document).ready(function (e) {
        $('#brokerImage').change(function(){  
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#imagePreview').attr('src', e.target.result); 
            }
        reader.readAsDataURL(this.files[0]); 
        });
    });

    $(document).ready(function(){
    // Get value on button click and show alert
    $("#ownerButton").click(function(){
        var str = $("#ownerButton").val();
        alert(str);
    });
});
</script>
@endsection