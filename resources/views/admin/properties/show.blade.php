@extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
    @include('layouts.partials.alert')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 text-dark ">View Property</h1>

                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                        <li class="breadcrumb-item"><a href="/properties">Properties</a>
                        </li>
                        <li class="breadcrumb-item">View Property</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card bg-transparent shadow-none h-100">
                        <div class="card-header show-card bg-transparent pt-0 px-2" style="margin-left: 0.1rem;">
                            <ul class="nav nav-tabs card-header-tabs d-flex justify-content">
                                <li class="nav-item"><a class="nav-link active" href="#propertyInfo"
                                        data-toggle="tab">Property Information</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="#paymentSchedules"
                                        data-toggle="tab">Payment
                                        Schedule</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#paymentHistory"
                                        data-toggle="tab">Payment
                                        History</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body bg-white px-0 shadow-lg">


                            <div class="container-fluid">
                                <div class="tab-content">

                                    {{-- property_info --}}
                                    <div class="active tab-pane" id="propertyInfo">
                                        <div class="row">
                                            <div class="col-md-5 px-3">
                                                <div class="d-flex-column text-md-left text-center">
                                                    <div class="text-center">
                                                        <img src="{{ $property->model == 'Maria Delfina' ?
                                                            asset('/images/housemodels/maria_delfina.png') : ( $property->model == 'Maria Loreza' ? asset('/images/housemodels/maria_lorenza.png') : asset('/images/housemodels/maria_marcela.png')) }}"
                                                            alt="House Model"
                                                            class="rounded shadow shadow-lg mr-3 img-fluid w-100">
                                                    </div>
                                                    <div class="d-flex justify-content-start align-items-center mt-4">
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-1">
                                                        <div class="display-4"> {{ $property->model}}</div>

                                                    </div>

                                                    <div class="d-flex justify-content-start align-items-center mt-1">
                                                        <div class="mr-1 d-sm-none d-block"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <span class="text-secondary text-xs">BASIC INFORMATION</span>
                                                        <div class="ml-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                    </div>
                                                    <div class="mx-2 mt-2">
                                                        <div class="h4 ">
                                                            <i class="fa-solid fa-location-dot px-1">&nbsp;</i>
                                                            <span class="text-bold"> Blk. No: </span>
                                                            {{ $property->blk_no ?? '' }}
                                                        </div>
                                                        <div class="h4 ">
                                                            <i class="fa-solid fa-house">&nbsp;</i>
                                                            <span class="text-bold">Lot No: </span>
                                                            {{$property->lot_no ?? ''}}
                                                        </div>
                                                        <div class="h4 ">
                                                            <i class="fa-solid fa-layer-group">&nbsp;</i>
                                                            <span class="text-bold">Floor Area: </span>
                                                            {{ $property->floor_area ?? '' }}m&#178;
                                                        </div>
                                                        <div class="h4 mb-5">
                                                            <i class="fa-solid fa-id-badge px-1">&nbsp;</i>
                                                            <span class="text-bold">House Title: </span>
                                                            {{ $property->title_no ?? '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-7 px-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-secondary text-bold">OTHER INFORMATION</span>
                                                    <div class="ml-3 my-3"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>



                                                    {{-- @if($property->status == 4 || $property->status ==3)
                                                    <a href="#" class="btn btn-success ml-3">
                                                        <i class="fa-solid fa-square-plus"> </i>
                                                        <span class="d-none d-md-inline-block">&nbsp;Add Payment</span>
                                                    </a>
                                                    @endif --}}

                                                </div>

                                                <div class="col-12 mb-2 d-flex flex-column">
                                                    <span class="display-4 text-bold">&#8369; {{
                                                        number_format($property->total_balance, 2) ?? '0'}}</span>
                                                    <span class="text-secondary text-s mb-0">BALANCE</span>
                                                </div>
                                                <div class="mx-1 my-2"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>

                                                <div class="col-12 d-flex flex-column">
                                                    <label class="control-label text-lg">Next Payment:&nbsp;</label>
                                                    <div>

                                                        <span class="px-2 py-1 h5 rounded bg-success">
                                                            {{
                                                            \Carbon\Carbon::parse($property->payments()->latest()->first()->next_payment)->format('F
                                                            d, Y')
                                                            }}
                                                        </span>
                                                    </div>
                                                    <label class="control-label text-lg mt-2">Status:&nbsp;</label>
                                                    <div>
                                                        @if($property->status == 4)

                                                        <span class="px-3 py-1 h5 rounded bg-primary">
                                                            DOWNPAYMENT SCHEME
                                                        </span>

                                                        @elseif($property->status == 3)

                                                        <span class="px-3 py-1 h5 rounded bg-info">
                                                            BALANCE SCHEME
                                                        </span>

                                                        @elseif($property->status == 2)

                                                        <span class="px-3 py-1 h5 rounded bg-success">
                                                            FULLY PAID
                                                        </span>

                                                        @elseif($property->status == 1)

                                                        <span class="px-3 py-1 h5 rounded bg-warning">
                                                            PROPERTY CANCELLED
                                                        </span>

                                                        @elseif($property->status == 0)

                                                        <span class="px-3 py-1 h5 rounded bg-danger">
                                                            PROPERTY DELETED
                                                        </span>

                                                        @endif
                                                    </div>
                                                    
                                                    @if($property->installment)
                                                    <label class="control-label mt-2 text-lg">Installment:&nbsp;</label>
                                                    <div>
                                                        <span class="px-2 py-1 h5 rounded bg-primary">
                                                            {{ $property->installment ?? ''}} Months
                                                        </span>
                                                    </div>
                                                    @endif
                                                </div>

                                                <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                    <div class="col-md-3 mt-2">
                                                        <label for="equityFee" class="control-label">Equity Fee:</label>

                                                        <input type="text" disabled name="equityFee"
                                                            class="form-control text-lg"
                                                            value="{{  $property->equity_fee ?? ''}}">
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <label for="processingFee" class="control-label">Processing
                                                            Fee:</label>
                                                        <input type="text" disabled name="processingFee"
                                                            class="form-control text-lg"
                                                            value="{{  $property->processing_fee ?? ''}}">
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <label for="cornerLotFee" class="control-label">Corner Lot
                                                            Fee:</label>
                                                        <input type="text" disabled name="cornerLotFee"
                                                            class="form-control text-lg"
                                                            value="{{  $property->corner_lot_fee ?? ''}}">
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <label for="commercialLotFee" class="control-label">Commercial
                                                            Lot
                                                            Fee:</label>
                                                        <input type="text" disabled name="commercialLotFee"
                                                            class="form-control text-lg"
                                                            value="{{  $property->commercial_lot_fee ?? ''}}">
                                                    </div>
                                                </div>

                                                <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                    <div class="col-md-6 mt-2">
                                                        <label for="discount" class="control-label">Discount: </label>
                                                        <input type="text" disabled name="discount"
                                                            class="form-control text-lg"
                                                            value="{{  $property->discount ?? '00.00'}}">
                                                    </div>

                                                    <div class="col-md-6 mt-2">
                                                        <label for="loanableAmount" class="control-label">HDMF/Bank
                                                            Loanable
                                                            Amount:</label>
                                                        <input type="text" disabled name="loanableAmount"
                                                            class="form-control text-lg"
                                                            value="{{ $property->loanable_amount ?? '00.00'}}">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                                    <span class="text-secondary text-xs">OWNER</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                <div class="d-lg-flex justify-content-start">
                                                    <div class="col-lg-12">
                                                        <a href="/clients/{{ $property->client->id }}"
                                                            class="text-dark">
                                                            <div class="card border border-gray shadow h-100 my-auto">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-start ">
                                                                        <div class="mr-4 my-auto align-items-center">
                                                                            <img src="{{ $property->client->image ? asset('/storage/'. $property->client->image) : asset('images/default.png')}}"
                                                                                class="roundedExtraSmallImage mx-auto"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="d-flex-column">
                                                                            <div class="h4 mb-0">

                                                                                {{ $property->client->first_name}}
                                                                                {{ $property->client->middle_name}}
                                                                                {{ $property->client->last_name}}
                                                                                {{ $property->client->suffix}}
                                                                            </div>
                                                                            <div class="h6 mb-0">
                                                                                {{ $property->client->email}}
                                                                            </div>
                                                                            <div class="h6">
                                                                                {{ $property->client->contact_no}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                @if($property->client->broker)
                                                <div class="d-flex justify-content-start align-items-center mt-3 mb-3">
                                                    <span class="text-secondary text-xs">BROKER</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                <div class="d-lg-flex justify-content-start">
                                                    <div class="col-lg-12">
                                                        <a href="/brokers/{{ $property->client->broker->id}}"
                                                            class="text-dark">
                                                            <div class="card border border-gray shadow h-100 my-auto">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div class="mr-4 my-auto align-items-center">
                                                                            <img src="{{ $property->client->broker->image ? asset('/storage/'. $property->client->broker->image) : asset('images/default.png')}}"
                                                                                class="roundedExtraSmallImage mx-auto"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="d-flex-column">
                                                                            <div class="h4 mb-0">
                                                                                {{ $property->client->broker->name}}
                                                                            </div>
                                                                            <div class="h6 mb-0">
                                                                                {{ $property->client->broker->email}}
                                                                            </div>
                                                                            <div class="h6">
                                                                                {{
                                                                                $property->client->broker->contact_no}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mx-1 my-3"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center mx-3">
                                            <a class="btn btn-primary ml-3 px-3"
                                                href="/properties/{{$property->id}}/print">
                                                <i class="fa-solid fa-print"></i>
                                                <span>&nbsp;Print</span>
                                            </a>
                                            {{-- <div class="display-4 text-center">Payment History</div> --}}
                                            {{-- <div class="d-flex align-items-center justify-content-center">
                                                <a href="#" class="btn btn-success" data-target="#addPaymentModal"
                                                    data-toggle="modal">
                                                    <i class="fa-solid fa-plus"></i>
                                                    <span>Add Payment</span>
                                                </a>
                                            </div> --}}

                                        </div>
                                        {{-- <div class="mx-1 my-3"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div> --}}

                                        {{-- <div class="row">
                                            <div class="col-12">

                                                <table class="table table-hover table-bordered table-lg">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="py-2 h6 text-bold text-center">#</th>
                                                            <th scope="col" class=" py-2 h6 text-bold">Amount
                                                                Payed
                                                            </th>
                                                            <th scope="col"
                                                                class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                Payment For
                                                            </th>
                                                            <th scope="col"
                                                                class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                Months to
                                                                Pay
                                                            </th>
                                                            <th scope="col"
                                                                class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                Balance
                                                            </th>
                                                            <th scope="col"
                                                                class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                Received By
                                                            </th>
                                                            <th scope="col" class="py-2 h6 text-bold text-right">
                                                                Transaction
                                                                Date</th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($property->payments as $payment)
                                                        <tr class="text-bold">
                                                            <td class="text-bold h6 text-center">
                                                                {{$loop->iteration}}
                                                            </td>
                                                            <td class="text-bold h6">
                                                                &#8369;
                                                                {{ number_format($payment->payment_amount,2) ??
                                                                ''}}
                                                            </td>
                                                            <td class="text-bold h6">
                                                                {{ $payment->payment_for ?? '' }}
                                                            </td>
                                                            <td class="d-none d-sm-table-cell h6">
                                                                {{ $payment->months_left ?? ''}}
                                                                {{ $payment->months_left == 1 ? "Month" : "Months"}}
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-bold h6">&#8369;
                                                                {{ number_format($payment->balance,2) ??
                                                                ''}}
                                                            </td>
                                                            <td class="d-none d-sm-table-cell h6">
                                                                {{ $employee->emp_first_name }}
                                                                {{ $employee->emp_last_name }}
                                                            </td>
                                                            <td class=" text-right h6">
                                                                {{ Carbon\Carbon::parse($payment->created_at)->format('F
                                                                d, Y')
                                                                ?? ''}}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> --}}
                                    </div>

                                    {{-- payment_sched --}}
                                    <div class="tab-pane" id="paymentSchedules">
                                        <div class="row px-3">
                                            <div class="col-12">
                                                <p class="display-4">Payment Schedule</p>

                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered table-lg ">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col" class="py-2 h6 text-bold text-center">#
                                                                </th>
                                                                <th scope="col" class="py-2 h6 text-bold ">
                                                                    Payment Date</th>
                                                                </th>
                                                                <th scope="col" class=" py-2 h6 text-bold">Amount
                                                                    To Pay
                                                                </th>
                                                                <th scope="col" class=" py-2 h6 text-bold">
                                                                    Payment For
                                                                </th>
                                                                <th scope="col" class=" py-2 h6 text-bold  text-center">
                                                                    Status
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($property->paymentSchedules as $payment)
                                                            <tr class="text-bold">
                                                                <td class="text-bold h6 text-center">
                                                                    {{$loop->iteration}}
                                                                </td>
                                                                <td class="h6">
                                                                    {{
                                                                    Carbon\Carbon::parse($payment->payment_date)->format('F
                                                                    d, Y')
                                                                    ?? ''}}
                                                                </td>
                                                                <td class="text-bold h6">
                                                                    &#8369;
                                                                    {{ number_format($payment->payment_amount,2) ??
                                                                    ''}}
                                                                </td>
                                                                <td class="text-bold h6">
                                                                    {{ $payment->payment_for ?? '' }}
                                                                </td>
                                                                <td class=" h6 text-bold text-center">
                                                                    {{ $payment->paid === 0 ? 'Not Paid' : 'Paid' }}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center mx-3">
                                            <a class="btn btn-primary ml-3 px-3"
                                                href="/properties/{{$property->id}}/print">
                                                <i class="fa-solid fa-print"></i>
                                                <span>&nbsp;Print</span>
                                            </a>
                                            {{-- <div class="display-4 text-center">Payment History</div> --}}
                                            {{-- <div class="d-flex align-items-center justify-content-center">
                                                <a href="#" class="btn btn-success" data-target="#addPaymentModal"
                                                    data-toggle="modal">
                                                    <i class="fa-solid fa-plus"></i>
                                                    <span>Add Payment</span>
                                                </a>
                                            </div> --}}

                                        </div>
                                    </div>

                                    {{-- payment_history --}}
                                    <div class="tab-pane" id="paymentHistory">
                                        <div class="row px-3">

                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="display-4 text-center">Payment History</p>
                                                    <div class="d-flex justify-content-end align-items-center">

                                                        {{-- @if($property->status < 2) --}}
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <a href="#" class="btn btn-success"
                                                                data-target="#addPaymentModal" data-toggle="modal">
                                                                <i class="fa-solid fa-plus"></i>
                                                                <span>Add Payment</span>
                                                            </a>
                                                        </div> 
                                                        {{-- @endif --}}

                                                    </div>

                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered table-lg">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col" class="py-2 h6 text-bold text-center">#
                                                                </th>
                                                                <th scope="col" class=" py-2 h6 text-bold">Amount
                                                                    Payed
                                                                </th>
                                                                <th scope="col"
                                                                    class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                    Payment For
                                                                </th>
                                                                {{-- <th scope="col"
                                                                    class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                    Months to
                                                                    Pay
                                                                </th> --}}
                                                                <th scope="col"
                                                                    class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                    Balance
                                                                </th>
                                                                <th scope="col"
                                                                    class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                    Received By
                                                                </th>
                                                                <th scope="col" class="py-2 h6 text-bold text-right">
                                                                    Transaction
                                                                    Date</th>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($property->payments as $payment)
                                                            <tr class="text-bold">
                                                                <td class="text-bold h6 text-center">
                                                                    {{$loop->iteration}}
                                                                </td>
                                                                <td class="text-bold h6">
                                                                    &#8369;
                                                                    {{ number_format($payment->payment_amount,2) ??
                                                                    ''}}
                                                                </td>
                                                                <td class="text-bold h6">
                                                                    {{ $payment->payment_for ?? '' }}
                                                                </td>
                                                                {{-- <td class="d-none d-sm-table-cell h6">
                                                                    {{ $payment->months_left ?? ''}}
                                                                    {{ $payment->months_left == 1 ? "Month" :
                                                                    "Months"}} --}}
                                                                </td>
                                                                <td class="d-none d-sm-table-cell text-bold h6">
                                                                    &#8369;
                                                                    {{ number_format($payment->total_balance,2) ??
                                                                    ''}}
                                                                </td>
                                                                <td class="d-none d-sm-table-cell h6">
                                                                    {{ $employee->emp_first_name }}
                                                                    {{ $employee->emp_last_name }}
                                                                </td>
                                                                <td class=" text-right h6">
                                                                    {{
                                                                    Carbon\Carbon::parse($payment->created_at)->format('F
                                                                    d, Y')
                                                                    ?? ''}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end align-items-center mx-3">
                                            <a class="btn btn-primary ml-3 px-3"
                                                href="/properties/{{$property->id}}/print">
                                                <i class="fa-solid fa-print"></i>
                                                <span>&nbsp;Print</span>
                                            </a>
                                            {{-- <div class="display-4 text-center">Payment History</div> --}}
                                            {{-- <div class="d-flex align-items-center justify-content-center">
                                                <a href="#" class="btn btn-success" data-target="#addPaymentModal"
                                                    data-toggle="modal">
                                                    <i class="fa-solid fa-plus"></i>
                                                    <span>Add Payment</span>
                                                </a>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="addPaymentModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">Add Payment</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/properties/{{ $property->id}}/payment" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="paymentAmount" class="form-label text-lg">Amount:</label>
                                <input type="text"
                                    class="form-control form-control-lg border border-success text-lg text-bold"
                                    name="paymentAmount" required>
                            </div>
                        </div>
                        {{-- <div class="col-sm-12">
                            <div class="form-group">
                                <label for="paymentAmount" class="form-label text-lg">Payment For:</label>
                                <select class="form-control-lg form-control text-lg border-success" name="paymentFor"
                                    required>
                                    <option value="" hidden selected disabled>Select one...</option>
                                    <option value="Downpayment">Downpayment</option>
                                    <option value="Balance">Balance</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="paymentAmount" class="form-label text-lg">Notes:</label>
                                <textarea class="form-control form-control-lg border border-success" name="paymentNotes"
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span>Submit </span>&nbsp;
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    document.getElementById("tab_propertyInfo").addEventListener("click" , propertyInfo);

    function propertyInfo(){
        document.getElementById("headerTab").style.backgroundColor = "#007bff";  
        document.getElementById("bodyTab").style.borderColor = "#007bff";  
    }

    // document.getElementById("paymentAmount").addEventListener("input", function(){
    // this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    // });

    //  document.getElementById("paymentAmount").addEventListener("change", function(){
    // this.value = parseInt(this.value.replace(/,/g, ''));
    // });
</script>
@endsection