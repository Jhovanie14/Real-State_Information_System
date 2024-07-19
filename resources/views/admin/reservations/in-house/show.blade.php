@extends('layouts.themes.admin.main')
@section('content')
    @include('layouts.partials.alert')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 text-dark">View Reservation</h1>
                        <a class="btn btn-primary ml-3" target="_blank" href="/reservations/in-house/{{ $reservation->id }}/print">
                            <i class="fa-solid fa-print"></i>
                            <span>&nbsp;Print</span>
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                            <li class="breadcrumb-item"><a href="/reservations">Reservations</a>
                            </li>
                            <li class="breadcrumb-item">View Reservation</li>
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
                            <div class="card-body bg-white px-0 shadow-lg">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-5 px-3">
                                            <div class="d-flex-column">
                                                <div class="text-center">
                                                    <img src="{{ $reservation->model == 'Maria Delfina'
                                                        ? asset('/images/housemodels/delfina/maria_delfina.png')
                                                        : ($reservation->model == 'Maria Lorenza'
                                                            ? asset('/images/housemodels/lorenza/maria_lorenza.png')
                                                            : asset('/images/housemodels/marcela/maria_marcela.png')) }}"
                                                        alt="House Model"
                                                        class="rounded shadow shadow-lg mr-3 img-fluid w-100">
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center mt-4">
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-1">
                                                    <div class="display-4"> {{ $reservation->model }}</div>
                                                    @if ($reservation->reservation == -1)
                                                        <div class="my-2">
                                                            <span class="px-2 h5 rounded bg-danger">
                                                                RESERVATION DELETED
                                                            </span>
                                                        </div>
                                                    @elseif($reservation->reservation == 0)
                                                        <div class="my-2">
                                                            <span class="px-2 h5 rounded bg-warning">
                                                                RESERVATION CANCELLED
                                                            </span>
                                                        </div>
                                                    @elseif($reservation->reservation == 2)
                                                        <div class="my-2">
                                                            <span class="px-2 h5 rounded bg-success">
                                                                RESERVATION FINISHED
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                    <span class="text-secondary text-xs">HOUSE MODEL</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                {{-- <div class="mt-3 mb-2 d-flex flex-column text-center">
                                                <span class="display-4 text-bold text-wrap">&#8369;{{
                                                    number_format($reservation->package_price, 2) ??
                                                    '0'}}</span>
                                                <span class="text-secondary text-s mb-0">PACKAGE PRICE</span>

                                            </div> --}}
                                                <div class="d-flex justify-content-start align-items-center mt-4">
                                                    <div class="mr-1 d-sm-none d-block"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                    <span class="text-secondary text-xs">BASIC INFORMATION</span>
                                                    <div class="ml-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>

                                                {{-- <ul class="list-group list-group-flush mt-3">
                                                <li class="list-group-item py-0">
                                                    <div
                                                        class="d-flex justify-content-start align-items-center text-left">
                                                        <div class="h4 m-auto text-muted">
                                                            <i class="fa-solid fa-layer-group"></i>
                                                        </div>
                                                        <div class="col-11 pl-3">
                                                            <span>Blk. No</span>
                                                            <div class="text-bold h6">
                                                                {{ $reservation->blk_no }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item py-0">
                                                    <div
                                                        class="d-flex justify-content-start align-items-center text-left">
                                                        <div class="h4 m-auto text-muted">
                                                            <i class="fa-solid fa-house"></i>
                                                        </div>
                                                        <div class="col-11 pl-3">
                                                            <span>Lot No</span>
                                                            <div class="text-bold h6">
                                                                {{ $reservation->lot_no }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item py-0">
                                                    <div
                                                        class="d-flex justify-content-start align-items-center text-left">
                                                        <div class="h4 m-auto text-muted">
                                                            <i class="fa-solid fa-chart-area"></i>
                                                        </div>
                                                        <div class="col-11 pl-3">
                                                            <span>Floor Area</span>
                                                            <div class="text-bold h6"> {{
                                                                $reservation->floor_area
                                                                }}m&#178;
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item py-0">
                                                    <div
                                                        class="d-flex justify-content-start align-items-center text-left">
                                                        <div class="h4 m-auto text-muted">
                                                            <i class="fa-solid fa-id-badge"></i>
                                                        </div>
                                                        <div class="col-11 pl-3">
                                                            <span>House Title</span>
                                                            <div class="text-bold h6"> {{
                                                                $reservation->title_no }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> --}}
                                                <div class="mx-2 mt-4">
                                                    <div class="h4 ">
                                                        <i class="fa-solid fa-location-dot">&nbsp;</i>
                                                        <span class="text-bold"> Blk. No: </span>
                                                        {{ $reservation->blk_no ?? '' }}
                                                    </div>
                                                    <div class="h4 ">
                                                        <i class="fa-solid fa-location-dot">&nbsp;</i>
                                                        <span class="text-bold">Lot No: </span>
                                                        {{ $reservation->lot_no ?? '' }}
                                                    </div>
                                                    <div class="h4 ">
                                                        <i class="fa-solid fa-location-dot">&nbsp;</i>
                                                        <span class="text-bold">Floor Area: </span>
                                                        {{ $reservation->floor_area ?? '' }}m&#178;
                                                    </div>
                                                    <div class="h4 mb-5">
                                                        <i class="fa-solid fa-id-badge">&nbsp;</i>
                                                        <span class="text-bold">House Title: </span>
                                                        {{ $reservation->title_no ?? '' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7 px-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-secondary text-bold">OTHER INFORMATION</span>

                                                <div class="d-flex align-items-center">

                                                    @if ($reservation->reservation == 2)
                                                        <a href="/properties/in-house/{{ $reservation->id }}"
                                                            class="btn btn-success ml-3">
                                                            <i class="fa-solid fa-eye"> </i>
                                                            <span class="d-none d-md-inline-block">&nbsp;View
                                                                Property</span>
                                                        </a>
                                                    @elseif($reservation->reservation == 1)
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#cancelReservation" class="btn btn-warning ml-3">
                                                            <i class="fa-solid fa-xmark"> </i>
                                                            <span class="d-none d-md-inline-block">&nbsp;
                                                                Cancel Reservation
                                                            </span>
                                                        </a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#finishReservation" class="btn btn-success ml-3">
                                                            <i class="fa-solid fa-house-circle-check"> </i>
                                                            <span class="d-none d-md-inline-block">&nbsp;Finish
                                                                Reservation</span>
                                                        </a>
                                                    @elseif($reservation->reservation == 0)
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#restoreReservation" class="btn btn-success ml-3">
                                                            <i class="fa-solid fa-circle-check"> </i>
                                                            <span class="d-none d-md-inline-block">&nbsp;
                                                                Restore Reservation
                                                            </span>
                                                        </a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#deleteReservation" class="btn btn-danger ml-3">
                                                            <i class="fa-solid fa-x"> </i>
                                                            <span class="d-none d-md-inline-block">&nbsp;Delete
                                                                Reservation</span>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mx-1 my-3"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>

                                            <div class="mb-2 d-flex flex-column">
                                                <span class="text-secondary text-s mb-0">TOTAL CONTRACT PRICE</span>
                                                <span class="display-4 text-bold">&#8369;
                                                    {{ number_format($reservation->total_contract_price, 2) ?? '0' }}</span>
                                            </div>

                                            <div class="mx-1 mt-2 mb-4"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>

                                            <div class="d-flex justify-content-between align-items-start mt-1 mb-3">
                                                <div class="col-md-12">
                                                    <div>
                                                        <label class="control-label  text-lg">Upholding
                                                            Period:&nbsp;</label>
                                                        <span class="px-2 py-1 h5 rounded bg-success">
                                                            {{ \Carbon\Carbon::parse($reservation->created_at)->format('F, d, Y') .
                                                                ' - ' .
                                                                \Carbon\Carbon::parse($reservation->created_at)->addMonth()->format('F
                                                                                                                                                                                d, Y') }}
                                                        </span>
                                                    </div>
                                                    {{-- <div>
                                                    <label class="control-label  text-lg">Contract:&nbsp;</label>
                                                    <span class="px-2 py-1 h5 rounded bg-primary">
                                                        {{ $reservation->contract ?? ''}}
                                                    </span>
                                                </div> --}}
                                                    <div>
                                                        <label class="control-label  text-lg">Downpayment
                                                            Installment:&nbsp;</label>
                                                        <span class="px-2 py-1 h5 rounded bg-primary">
                                                            @if ($reservation->downpayment_term == 1)
                                                                Spot Cash
                                                            @else
                                                                {{ $reservation->downpayment_term ?? '' }} Months
                                                            @endif
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <label class="control-label  text-lg">Balance
                                                            Installment:&nbsp;</label>
                                                        <span class="px-2 py-1 h5 rounded bg-primary">
                                                            @if ($reservation->balance_term == 1)
                                                                Spot Cash
                                                            @else
                                                                {{ $reservation->balance_term ?? '' }} Months
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                {{-- <div class="col-md-3 mt-2">
                                                <label for="equityFee" class="control-label text-lg">Equity Fee:</label>

                                                <input type="text" disabled name="equityFee"
                                                    class="form-control form-control-lg form-control-lg text-lg"
                                                    value="&#8369; {{ number_format($reservation->equity_fee, 2) ?? ''}}">
                                            </div> --}}
                                                <div class="col-md-6 mt-2">
                                                    <label for="processingFee" class="control-label text-lg">Total Equity
                                                        Fee:</label>
                                                    <input type="text" disabled name="processingFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->downpayment_total, 2) ?? '' }}">
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for="cornerLotFee" class="control-label text-lg">Monthly
                                                        Payment:</label>
                                                    <input type="text" disabled name="cornerLotFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->downpayment_total / $reservation->downpayment_term, 2) ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                {{-- <div class="col-md-3 mt-2">
                                                <label for="equityFee" class="control-label text-lg">Equity Fee:</label>

                                                <input type="text" disabled name="equityFee"
                                                    class="form-control form-control-lg form-control-lg text-lg"
                                                    value="&#8369; {{ number_format($reservation->equity_fee, 2) ?? ''}}">
                                            </div> --}}
                                                <div class="col-md-6 mt-2">
                                                    <label for="processingFee" class="control-label text-lg">Total Balance
                                                        Fee:</label>
                                                    <input type="text" disabled name="processingFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->balance_total, 2) ?? '' }}">
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for="cornerLotFee" class="control-label text-lg">Monthly
                                                        Payment:</label>
                                                    <input type="text" disabled name="cornerLotFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->balance_total / $reservation->balance_term, 2) ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                {{-- <div class="col-md-3 mt-2">
                                                <label for="equityFee" class="control-label text-lg">Equity Fee:</label>

                                                <input type="text" disabled name="equityFee"
                                                    class="form-control form-control-lg form-control-lg text-lg"
                                                    value="&#8369; {{ number_format($reservation->equity_fee, 2) ?? ''}}">
                                            </div> --}}
                                                <div class="col-md-4 mt-2">
                                                    <label for="processingFee" class="control-label text-lg">Processing
                                                        Fee:</label>
                                                    <input type="text" disabled name="processingFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->processing_fee, 2) ?? '' }}">
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <label for="cornerLotFee" class="control-label text-lg">Corner Lot
                                                        Fee:</label>
                                                    <input type="text" disabled name="cornerLotFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->corner_lot_fee, 2) ?? '' }}">
                                                </div>
                                                <div class="col-md-4 mt-2">
                                                    <label for="commercialLotFee" class="control-label text-lg">Commercial
                                                        Lot
                                                        Fee:</label>
                                                    <input type="text" disabled name="commercialLotFee"
                                                        class="form-control form-control-lg text-lg"
                                                        value="&#8369; {{ number_format($reservation->commercial_lot_fee, 2) ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                {{-- <div class="col-md-6 mt-2">
                                                <label for="discount" class="control-label">Discount: </label>
                                                <input type="text" disabled name="discount"
                                                    class="form-control form-control-lg text-lg"
                                                    value="&#8369; {{ number_format($reservation->discount, 2) ?? ''}}">
                                            </div> --}}
                                                @if ($reservation->loanable_amount)
                                                    <div class="col-md-6 mt-2">
                                                        <label for="loanableAmount" class="control-label">HDMF/Bank
                                                            Loanable
                                                            Amount:</label>
                                                        <input type="text" disabled name="loanableAmount"
                                                            class="form-control form-control-lg text-lg"
                                                            value="{{ $reservation->loanable_amount ?? '' }}">
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center my-3">
                                                <span class="text-secondary text-xs">OWNER</span>
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>
                                            <div class="d-lg-flex justify-content-start">
                                                <div class="col-lg-12">
                                                    <a href="/clients/{{ $reservation->client->id }}" class="text-dark">
                                                        <div class="card border border-gray shadow h-100 my-auto">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-start">
                                                                    <div class="mr-4 my-auto align-items-center">
                                                                        <img src="{{ $reservation->client->image ? asset('/storage/' . $reservation->client->image) : asset('images/default.png') }}"
                                                                            class="roundedExtraSmallImage mx-auto"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="d-flex-column">
                                                                        <div class="h4 mb-0 text-bold">
                                                                            {{ $reservation->client->first_name }}
                                                                            {{ $reservation->client->middle_name }}
                                                                            {{ $reservation->client->last_name }}
                                                                            {{ $reservation->client->suffix }}
                                                                        </div>
                                                                        <div class="h6 mb-0">
                                                                            {{ $reservation->client->email }}
                                                                        </div>
                                                                        <div class="h6">
                                                                            {{ $reservation->client->contact_no }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-start align-items-center mt-3 mb-3">
                                                <span class="text-secondary text-xs">BROKER</span>
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>
                                            <div class="d-lg-flex justify-content-start">
                                                <div class="col-lg-12">
                                                    <a href="/brokers/{{ $reservation->client->agent->broker->id }}"
                                                        class="text-dark">
                                                        <div class="card border border-gray shadow h-100 my-auto">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-start">
                                                                    <div class="mr-4 my-auto align-items-center">
                                                                        <img src="{{ $reservation->client->agent->broker->image ? asset('/storage/' . $reservation->client->agent->broker->image) : asset('images/default.png') }}"
                                                                            class="roundedExtraSmallImage mx-auto"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="d-flex-column">
                                                                        <div class="h4 mb-0 text-bold">
                                                                            {{ $reservation->client->agent->broker->name }}
                                                                        </div>
                                                                        <div class="h6 mb-0">
                                                                            {{ $reservation->client->agent->broker->email }}
                                                                        </div>
                                                                        <div class="h6">
                                                                            {{ $reservation->client->agent->broker->contact_no }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start align-items-center mt-3 mb-3">
                                                <span class="text-secondary text-xs">AGENT</span>
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>
                                            @if ($reservation->client->agent)
                                                <div class="d-lg-flex justify-content-start">
                                                    <div class="col-lg-12">
                                                        <a href="/brokers/{{ $reservation->client->agent->id }}"
                                                            class="text-dark">
                                                            <div class="card border border-gray shadow h-100 my-auto">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div class="mr-4 my-auto align-items-center">
                                                                            <img src="{{ $reservation->client->agent->image ? asset('/storage/' . $reservation->client->agent->image) : asset('images/default.png') }}"
                                                                                class="roundedExtraSmallImage mx-auto"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="d-flex-column">
                                                                            <div class="h4 mb-0 text-bold">
                                                                                {{ $reservation->client->agent->name }}
                                                                            </div>
                                                                            <div class="h6 mb-0">
                                                                                {{ $reservation->client->agent->email_address }}
                                                                            </div>
                                                                            <div class="h6">
                                                                                {{ $reservation->client->agent->contact }}
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="modal fade" id="finishReservation" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Finish Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to proceed to downpayment scheme?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/reservations/in-house/{{ $reservation->id }}/finish" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa-solid fa-cancel"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cancelReservation" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Cancel Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to cancel this reservation?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/reservations/in-house/{{ $reservation->id }}/cancel" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa-solid fa-cancel"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="restoreReservation" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Restore Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to restore this reservation?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/reservations/in-house/{{ $reservation->id }}/restore" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa-solid fa-cancel"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteReservation" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">Delete Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to delete this reservation?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/reservations/in-house/{{ $reservation->id }}/delete" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa-solid fa-cancel"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById("tab_propertyInfo").addEventListener("click", propertyInfo);

        function propertyInfo() {
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
