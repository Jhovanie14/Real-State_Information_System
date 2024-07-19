@extends('layouts.themes.admin.main')
@section('content')
    <div class="content-wrapper">
        @include('layouts.partials.alert')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 text-dark">View Broker</h1>
                        <a class="btn btn-primary ml-3" target="_blank" href="/brokers/{{ $broker->id }}/print">
                            <i class="fa-solid fa-print"></i>
                            <span>&nbsp;Print Contract</span>
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                            <li class="breadcrumb-item"><a href="/brokers">Brokers</a>
                            </li>
                            <li class="breadcrumb-item">View Broker</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card bg-transparent shadow-lg h-100">

                            <div class="card-body bg-white px-0 ">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 px-3">

                                            <div class="d-flex-column justify-content-center text-center">

                                                <div class="imgContainer d-flex justify-content-center mb-4">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <img class="roundedLargeImage img-fluid"
                                                                src="{{ $broker->image ? asset('storage/' . $broker->image) : asset('/images/default.png') }}"
                                                                alt="User Image">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="d-flex justify-content-start align-items-center mt-4">
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                <div class="mt-3 mb-0">
                                                    <div class="h1 mb-0">
                                                        {{ $broker->name }}
                                                    </div>
                                                </div>
                                                {{-- <div class="mt-0">
                                                <div class="h5 m-0">
                                                    Broker ID<span class="text-bold">#</span>: {{ $broker ?
                                                    $broker->id : ''}}
                                                </div>
                                            </div> --}}
                                                <div class="mt-0">
                                                    <div class="h4 m-0">
                                                        @if ($broker->active == 2)
                                                            <span class="px-2 py-0 h5 rounded bg-success">
                                                                Active
                                                            </span>
                                                        @elseif($broker->active == 1)
                                                            <span class="px-2 py-0 h5 rounded bg-warning">
                                                                Archived
                                                            </span>
                                                        @else
                                                            <span class="px-2 py-0 h5 rounded bg-danger">
                                                                Deleted
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mt-0 mb-4">
                                                    <div class="h4 m-0"></div>
                                                </div>

                                                {{-- BASIC INFO --}}
                                                <div class="d-flex justify-content-start align-items-center mt-4">

                                                    <span class="text-secondary text-xs">BASIC INFORMATION</span>
                                                    <div class="ml-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>

                                                <ul class="list-group list-group-flush mt-3">
                                                    <li class="list-group-item py-0">
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-id-card"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>PRC License</span>
                                                                <div class="text-bold h6">
                                                                    {{ $broker->prc_license }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item py-0">
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-regular fa-id-card"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>TIN No</span>
                                                                <div class="text-bold h6">
                                                                    {{ $broker->tin_no }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item py-0">
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-phone"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>Contact</span>
                                                                <div class="text-bold h6"> {{ $broker->contact_no }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item pt-0 pb-5">
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-envelope"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>Email</span>
                                                                <div class="text-bold h6"> {{ $broker->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 px-3">
                                            <div class="mb-2 d-flex flex-column">
                                                <div class="d-flex">

                                                    <div class="mx-1 my-3"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                    <a class="btn btn-primary ml-3" href="#" data-toggle="modal"
                                                        data-target="#editBroker">
                                                        <i class="fa-solid fa-pencil"></i>
                                                        &nbsp;Edit Broker
                                                    </a>
                                                </div>
                                                <span
                                                    class="display-3 display-4 text-bold">{{ $broker ? $broker->brokerage_firm : null }}</span>
                                                <span class="text-secondary text-s mb-2 ml-2">BROKERAGE FIRM</span>
                                            </div>
                                            <div class="mx-1 mt-2 mb-2"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-start mt-1 mb-3">

                                                    <div class=" d-flex flex-column">
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-id-card"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>TIN No</span>
                                                                <div class="text-bold h6 ">
                                                                    {{ $broker->brokerage_tin_no ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-location-dot pl-1"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>Address</span>
                                                                <div class="text-bold h6 ">
                                                                    {{ $broker->brokerage_address ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-phone"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>Contact</span>
                                                                <div class="text-bold h6"> {{ $broker->contact_no ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-start align-items-center text-left">
                                                            <div class="h4 m-auto text-muted">
                                                                <i class="fa-solid fa-envelope"></i>
                                                            </div>
                                                            <div class="col-11 pl-3">
                                                                <span>Email</span>
                                                                <div class="text-bold h6"> {{ $broker->email ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mx-1 mt-2 mb-2"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>

                                            <div class="row d-flex justify-content-around align-items-center mt-5">

                                                <div class="col-md-4 col-sm-4">
                                                    <div class="card bg-primary text-white text-center ">

                                                        <div class="card-body text-center">
                                                            <p class="text-bold display-4">
                                                                {{ $broker->agents->where('active', 1)->count() }}
                                                            </p>
                                                            <p class="h5 text-center">
                                                                Agents
                                                            </p>
                                                        </div>
                                                        <a href="#agents" class="text-white">
                                                            <div
                                                                class="py-2 px-3 d-flex justify-content-between align-items-center">
                                                                View Agents
                                                                <i class="fa-solid fa-angle-right"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="card bg-success text-white text-center ">

                                                        <div class="card-body text-center">
                                                            <p class="text-bold display-4">
                                                                {{ $broker->clients->count() }}
                                                            </p>
                                                            <p class="h5 text-center">
                                                                Clients
                                                            </p>
                                                        </div>
                                                        <a href="#clients" class="text-white">
                                                            <div
                                                                class="py-2 px-3 d-flex justify-content-between align-items-center">
                                                                View Clients
                                                                <i class="fa-solid fa-angle-right"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-4">
                                                    <div class="card bg-info text-white text-center ">

                                                        <div class="card-body text-center">
                                                            <p class="text-bold display-4">
                                                                {{ $broker->hdmf_properties->count() + $broker->inhouse_properties->count() }}
                                                            </p>
                                                            <p class="h5 text-center">
                                                                Properties
                                                            </p>
                                                        </div>
                                                        <a href="#properties" class="text-white">
                                                            <div
                                                                class="py-2 px-3 d-flex justify-content-between align-items-center">
                                                                View Properties
                                                                <i class="fa-solid fa-angle-right"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-column mx-2">
                                        <div class="col-12">
                                            <section id="agents">
                                                <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                                    <span class="text-secondary text-xs">AGENTS</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                    <a href="#" data-target="#addAgent" data-toggle="modal"
                                                        class="btn btn-success ml-3"">
                                                        <i class=" fa-solid fa-plus"></i>
                                                        <span>Add Agent</span>
                                                    </a>
                                                </div>
                                                @if ($broker->agents->where('active', 1)->count() > 0)
                                                    <div class="row">
                                                        @foreach ($broker->agents->where('active', 1) as $agent)
                                                            <div class="col-12 mb-3">
                                                                <a href="/agents/{{ $agent->id }}" class="text-dark">
                                                                    <div
                                                                        class="card border border-gray shadow h-100 my-auto">

                                                                        <div class="card-body">
                                                                            <div class="d-flex justify-content-between ">
                                                                                <div class="d-flex">
                                                                                    <div
                                                                                        class="mr-4 my-auto align-items-center">
                                                                                        <img src="{{ $agent->image ? asset('/storage/' . $agent->image) : asset('images/default.png') }}"
                                                                                            class="roundedExtraSmallImage mx-auto"
                                                                                            alt="">
                                                                                    </div>
                                                                                    <div class="d-flex-column">
                                                                                        <div class="h4 mb-0 text-bold">
                                                                                            {{ $agent->name }}
                                                                                        </div>
                                                                                        <div class="h6 mb-0">
                                                                                            {{ $agent->contact }}
                                                                                        </div>
                                                                                        <div class="h6">
                                                                                            {{ $agent->email_address }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <a href="#" data-toggle="modal"
                                                                                        data-target="#editAgent{{ $agent->id }}"
                                                                                        class="btn btn-primary mb-1 ml-3">
                                                                                        <i class="fa-solid fa-pencil"></i>
                                                                                    </a>
                                                                                    <a href="#" data-toggle="modal"
                                                                                        data-target="#confirmDeleteAgent{{ $agent->id }}"
                                                                                        class="btn btn-danger mt-1 ml-3">
                                                                                        <i class="fa-solid fa-trash"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="display-4 my-3 text-center">
                                                        No Agents Yet.
                                                    </div>
                                                @endif
                                            </section>

                                            <section id="clients">
                                                <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                                    <span class="text-secondary text-xs">CLIENTS</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                @if ($broker->clients->count() > 0)
                                                    <div class="row">
                                                        @foreach ($broker->clients as $client)
                                                            <div class="col-12 mb-3">
                                                                <a href="/clients/{{ $client->id }}" class="text-dark">
                                                                    <div
                                                                        class="card border border-gray shadow h-100 my-auto">
                                                                        <div class="card-body">
                                                                            <div class="d-flex justify-content-between ">
                                                                                <div class="d-flex">
                                                                                    <div
                                                                                        class="mr-4 my-auto align-items-center">
                                                                                        <img src="{{ $client->image ? asset('/storage/' . $client->image) : asset('images/default.png') }}"
                                                                                            class="roundedExtraSmallImage mx-auto"
                                                                                            alt="">
                                                                                    </div>
                                                                                    <div class="d-flex-column">
                                                                                        <div class="h4 mb-0 text-bold">
                                                                                            {{ $client->first_name }}
                                                                                            {{ $client->middle_name }}
                                                                                            {{ $client->last_name }}
                                                                                            {{ $client->suffix }}
                                                                                        </div>
                                                                                        <div class="h6 mb-0">
                                                                                            {{ $client->email }}
                                                                                        </div>
                                                                                        <div class="h6">
                                                                                            {{ $client->contact_no }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div
                                                                        class="d-flex flex-column justify-content-end">
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#confirmRemoveClient{{$client->id}}"
                                                                            class="btn btn-danger mt-1 ml-3">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                        </a>
                                                                    </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="display-4 my-3 text-center">
                                                        No Clients Yet.
                                                    </div>
                                                @endif
                                            </section>

                                            <section id="properties">
                                                <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                                    <span class="text-secondary text-xs">PROPERTIES</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                @if ($broker->hdmf_properties->count() > 0 || $broker->inhouse_properties->count() > 0)
                                                    <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                                        <span class="text-secondary text-xs">IN-HOUSE PAYMENTS</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @foreach ($hdmf_properties as $property)
                                                        <h1>{{$property->id}}</h1>
                                                            <div class="col-12 mb-3">
                                                                <div class="text-dark">
                                                                    <div class="card rounded shadow">
                                                                        <div class="card-body">
                                                                            <div class="d-md-flex justify-content-between">
                                                                                <div class="d-flex">
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-center">
                                                                                        <img src="{{ $property->model ==
                                                                                        " Maria
                                                                                                                                                                        Delfina"
                                                                                            ? asset('/images/housemodels/maria_delfina.png')
                                                                                            : ($property->model == 'Maria Lorenza'
                                                                                                ? asset('/images/housemodels/maria_lorenza.png')
                                                                                                : asset('/images/housemodels/maria_marcela.png')) }}"
                                                                                            class="roundedSmallImage mr-4 border
                                                                            border-dark" />
                                                                                    </div>

                                                                                    <div
                                                                                        class="d-flex flex-column justify-content-between">
                                                                                        <div>
                                                                                            <h3 class="text-bold mb-0">
                                                                                                {{ $property->model ?? '' }}
                                                                                            </h3>

                                                                                            <div>
                                                                                                @if ($property->status == 4)
                                                                                                    <span
                                                                                                        class="px-2 py-0 h5 rounded bg-primary">
                                                                                                        Downpayment Scheme
                                                                                                    </span>
                                                                                                @elseif($property->status == 3)
                                                                                                    <span
                                                                                                        class="px-2 py-0 h5 rounded bg-info">
                                                                                                        Balance Scheme
                                                                                                    </span>
                                                                                                @elseif($property->status == 2)
                                                                                                    <span
                                                                                                        class="px-2 py-0 h5 rounded bg-success">
                                                                                                        Fully Paid
                                                                                                    </span>
                                                                                                @elseif($property->status == 1)
                                                                                                    <span
                                                                                                        class="px-2 py-0 h5 rounded bg-warning">
                                                                                                        Cancelled
                                                                                                    </span>
                                                                                                @else
                                                                                                    <span
                                                                                                        class="px-2 py-0 h5 rounded bg-danger">
                                                                                                        Deleted
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>

                                                                                        <div>
                                                                                            <div>
                                                                                                <i
                                                                                                    class="fa-solid fa-location-dot"></i>
                                                                                                <span class="mb-0 h6 ml-2">
                                                                                                    Blk. No:
                                                                                                    {{ $property->blk_no ?? '' }}
                                                                                                </span>
                                                                                            </div>
                                                                                            <div>
                                                                                                <i
                                                                                                    class="fa-solid fa-house"></i>
                                                                                                <span class="my-0 h6 ml-2">
                                                                                                    Lot No:
                                                                                                    {{ $property->lot_no ?? '' }}
                                                                                                </span>
                                                                                            </div>
                                                                                            <div>
                                                                                                <i
                                                                                                    class="fa-solid fa-id-badge"></i>
                                                                                                <span class="mt-0 h6 ml-2">
                                                                                                    House Title:
                                                                                                    {{ $property->title_no ?? '' }}
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start align-items-start w-sm-100">
                                                                                    <a href="/properties/{{ $property->id }}"
                                                                                        class="btn btn-block btn-primary mt-sm-3 mt-0 mx-2 ">
                                                                                        <i class="fa-solid fa-eye"></i>
                                                                                        <span
                                                                                            class="d-none d-md-inline">&nbsp;View</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="d-flex justify-content-end">

                                                        {{ $hdmf_properties->links() }}
                                                    </div>
                                                @else
                                                    <div class="display-4 my-3 text-center">
                                                        No Properties Yet.
                                                    </div>
                                                @endif
                                            </section>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>


    <div class="modal fade" id="optionsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Options</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="col-12 d-flex flex-column justify-content-between align-items-center">

                            <a class="btn btn-primary w-100 mb-5" href="#" data-toggle="modal"
                                data-target="#editBroker">
                                <i class="fa-solid fa-pencil"></i>
                                &nbsp;Edit Broker
                            </a>
                            @if ($broker->active == 2)
                                <a class="btn btn-warning w-100 mt-5 mb-2 text-black" href="#" data-toggle="modal"
                                    data-target="#confirmArchive">
                                    <i class="fa-solid fa-archive"></i>
                                    &nbsp;Archive Broker
                                </a>
                            @elseif($broker->active == 1)
                                <a class="btn btn-warning w-100 mt-5 mb-2 text-black" href="#" data-toggle="modal"
                                    data-target="#confirmUnarchive">
                                    <i class="fa-solid fa-archive"></i>
                                    &nbsp;Unarchive Broker
                                </a>
                            @endif
                            <a class="btn btn-danger w-100 mt-2 text-white" href="#" data-toggle="modal"
                                data-target="#confirmDelete">
                                <i class="fa-solid fa-trash"></i>
                                &nbsp;Delete Broker
                            </a>
                            {{-- <form action="/broker/{{$broker->id}}/archive" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-warning w-100 mt-5 my-2" type="submit">
                                <i class="fa-solid fa-archive"></i>
                                &nbsp;Archive Broker
                            </button>
                        </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmArchive" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Archive Broker</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to archive this broker?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/brokers/{{ $broker->id }}/archive" method="POST">
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

    <div class="modal fade" id="confirmUnarchive" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Unarchive Broker</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to unarchive this broker?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/brokers/{{ $broker->id }}/unarchive" method="POST">
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

    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">Delete Broker</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h5">
                        Are you sure you want to delete this broker?
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/brokers/{{ $broker->id }}/delete" method="POST">
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

    <div class="modal fade" id="addAgent" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Add Agent</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/agents/" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- AGENT INFORMATION --}}
                        <div class="col-md-12">
                            <div class="d-flex-column justify-content-center align-items-center">
                                <div class="text-center">
                                    <img class="mb-4 text-center roundedLargeImage" id="agentImagePreview"
                                        src="{{ asset('/images/default.png') }}" alt="Agent Image">
                                </div>
                                <div class="text-center mt-3">
                                    <input type="file" class="border border-dark rounded p-2" name="agentImage"
                                        accept="image/png, image/gif, image/jpeg" id="agentImage">
                                </div>
                                <div class="text-center mb-2">
                                    <label class="col-sm-6 col-form-label">
                                        Agent Picture
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="text-secondary text-xs">AGENT PERSONAL INFORMATION</span>
                                <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                </div>
                            </div>
                            <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name:</label>
                                        <input type="text" class="form-control border" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactNo" class="form-label">Contact
                                            No:</label>
                                        <input type="text" class="form-control border" name="contactNo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email
                                            Address:</label>
                                        <input type="text" class="form-control border" name="email" required>
                                    </div>
                                </div>
                                <input type="hidden" name="brokerID" value="{{ $broker->id }}" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger px-5 my-3 mr-3" data-dismiss="modal">
                                <span>Cancel</span>
                            </button>
                            <button type="submit" class="btn btn-success px-5 my-3">
                                <span>Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($broker->agents->where('active', 1) as $agent)
        <div class="modal fade" id="editAgent{{ $agent->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">Edit Agent</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/agents/{{ $agent->id }}/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            {{-- AGENT INFORMATION --}}
                            <div class="col-md-12">
                                <div class="d-flex-column justify-content-center align-items-center">
                                    <div class="text-center">
                                        <img class="mb-4 text-center roundedLargeImage" id="editAgentImagePreview"
                                            src="{{ $agent->image ? asset('/storage/' . $agent->image) : asset('/images/default.png') }}"
                                            alt="Agent Image">
                                    </div>
                                    <div class="text-center mt-3">
                                        <input type="file" class="border border-dark rounded p-2"
                                            name="editAgentImage" accept="image/png, image/gif, image/jpeg"
                                            id="editAgentImage">
                                    </div>
                                    <div class="text-center mb-2">
                                        <label class="col-sm-6 col-form-label">
                                            Agent Picture
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <span class="text-secondary text-xs">AGENT PERSONAL INFORMATION</span>
                                    <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Full Name:</label>
                                            <input type="text" class="form-control border"
                                                value="{{ $agent->name }}" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contactNo" class="form-label">Contact
                                                No:</label>
                                            <input type="text" class="form-control border"
                                                value="{{ $agent->contact }}" name="contactNo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email
                                                Address:</label>
                                            <input type="text" class="form-control border"
                                                value="{{ $agent->email_address }}" name="email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-danger px-5 my-3 mr-3" data-dismiss="modal">
                                    <span>Cancel</span>
                                </button>
                                <button type="submit" class="btn btn-success px-5 my-3">
                                    <span>Save</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmDeleteAgent{{ $agent->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title">Delete Agent</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to delete this agent?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/agents/{{ $agent->id }}/delete" method="POST">
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
    @endforeach

    @foreach ($broker->clients as $client)
        <div class="modal fade" id="confirmRemoveClient{{ $client->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title">Remove Client</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to remove this client?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/brokers/client/{{ $client->id }}/remove" method="POST">
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
    @endforeach

    {{-- EDIT BROKER --}}
    <div class="modal fade" id="editBroker" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">
                        Edit Broker
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="/brokers/{{ $broker->id }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- BROKER INFORMATION --}}
                        <div class="col-md-12">
                            <div class="d-flex-column justify-content-center align-items-center">
                                <div class="text-center">
                                    <img class="mb-4 text-center roundedLargeImage" id="brokerImagePreview"
                                        src="{{ $broker->image ? asset('/storage/' . $broker->image) : asset('/images/default.png') }}"
                                        alt="Broker Image">
                                </div>
                                <div class="text-center mt-3">
                                    <input type="file" class="border border-dark rounded p-2" name="brokerImage"
                                        accept="image/png, image/gif, image/jpeg" id="brokerImage">
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
                                <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                </div>
                            </div>

                            <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brokerName" class="form-label">Broker Name:</label>
                                        <input type="text" class="form-control border" name="brokerName"
                                            value="{{ $broker->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brokerAddress" class="form-label">Broker Address:</label>
                                        <input type="text" class="form-control border" name="brokerAddress"
                                            value="{{ $broker->address }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerPRCLicense" class="form-label">PRC
                                            License:</label>
                                        <input type="text" class="form-control border" id="brokerPRCLicense"
                                            value="{{ $broker->prc_license }}" name="brokerPRCLicense" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerTinNo" class="form-label">TIN
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerTinNo"
                                            value="{{ $broker->tin_no }}" name="brokerTinNo" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerContactNo" class="form-label">Contact
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerContactNo"
                                            value="{{ $broker->contact_no }}" name="brokerContactNo" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerEmail" class="form-label">Email
                                            Address:</label>
                                        <input type="text" class="form-control border" id="brokerEmail"
                                            value="{{ $broker->email }}" name="brokerEmail" required>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center">
                                <span class="text-secondary text-xs">BROKERAGE INFORMATION</span>
                                <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                </div>
                            </div>

                            <div class="d-md-flex justify-content-start align-items-end mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brokerageFirm" class="form-label">Brokerage
                                            Firm:</label>
                                        <input type="text" class="form-control border" id="brokerageFirm"
                                            value="{{ $broker->brokerage_firm }}" name="brokerageFirm" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brokerageAddress" class="form-label">Brokerage
                                            Address:</label>
                                        <input type="text" class="form-control border" id="brokerageAddress"
                                            value="{{ $broker->brokerage_address }}" name="brokerageAddress" required>
                                    </div>
                                </div>
                            </div>

                            <div class="d-md-flex justify-content-between align-items-end mt-3">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brokerageTinNo" class="form-label">TIN
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerageTinNo"
                                            value="{{ $broker->brokerage_tin_no }}" name="brokerageTinNo" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brokerageContactNo" class="form-label">Contact
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerageContactNo"
                                            value="{{ $broker->brokerage_contact_no }}" name="brokerageContactNo"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brokerageEmail" class="form-label">Email
                                            Address:</label>
                                        <input type="text" class="form-control border" id="brokerageEmail"
                                            value="{{ $broker->brokerage_email }}" name="brokerageEmail" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger px-5 my-3 mr-3" data-dismiss="modal">
                                <span>Cancel</span>
                            </button>
                            <button type="submit" class="btn btn-success px-5 my-3">
                                <span>Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let brokerImage = document.getElementById('brokerImage');
        let agentImage = document.getElementById('agentImage');
        let editAgentImage = document.getElementById('editAgentImage');
        if (brokerImage) {
            brokerImage.addEventListener('change', function() {
                let reader = new FileReader();
                reader.onload = function(event) {
                    let brokerImagePreview = document.getElementById('brokerImagePreview');
                    if (brokerImagePreview) {
                        brokerImagePreview.setAttribute('src', event.target.result);
                    }
                };
                reader.readAsDataURL(this.files[0]);
            });
        };

        if (agentImage) {
            agentImage.addEventListener('change', function() {
                let reader = new FileReader();
                reader.onload = function(event) {
                    let agentImagePreview = document.getElementById('agentImagePreview');
                    if (agentImagePreview) {
                        agentImagePreview.setAttribute('src', event.target.result);
                    }
                };
                reader.readAsDataURL(this.files[0]);
            })
        };

        if (editAgentImage) {
            editAgentImage.addEventListener('change', function() {
                let reader = new FileReader();
                reader.onload = function(event) {
                    let editAgentImagePreview = document.getElementById('editAgentImagePreview');
                    if (editAgentImagePreview) {
                        editAgentImagePreview.setAttribute('src', event.target.result);
                    }
                };
                reader.readAsDataURL(this.files[0]);
            })
        };

        // $(document).ready(function (e) {
        //     $('#brokerImage').change(function(){  
        //     let reader = new FileReader();
        //     reader.onload = (e) => { 
        //         $('#brokerImagePreview').attr('src', e.target.result); 
        //         }
        //     reader.readAsDataURL(this.files[0]); 
        //     });
        // });

        // document.getElementById("paymentAmount").addEventListener("input", function(){
        // this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        // });

        //  document.getElementById("paymentAmount").addEventListener("change", function(){
        // this.value = parseInt(this.value.replace(/,/g, ''));
        // });
    </script>
@endsection
