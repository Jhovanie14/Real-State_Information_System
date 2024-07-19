@extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
    @include('layouts.partials.alert')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 text-dark">View Agent</h1>
                    <a class="btn btn-primary ml-3" href="/brokers/{{$agent->id}}/print">
                        <i class="fa-solid fa-print"></i>
                        <span>&nbsp;Print</span>
                    </a>
                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                        <li class="breadcrumb-item"><a href="/agents">Agents</a>
                        </li>
                        <li class="breadcrumb-item">View Agent</li>
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
                                                        <img class="roundedLargeImage"
                                                            src="{{ $agent->image ? asset('/storage/' . $agent->image) : asset('/images/default.png') }}"
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
                                                    {{ $agent->name}}
                                                </div>
                                            </div>
                                            <div class="mt-0">
                                                <div class="h5 m-0">
                                                    Agent ID<span class="text-bold">#</span>: {{ $agent->id ?? ''}}
                                                </div>
                                            </div>
                                            <div class="mt-0">
                                                <div class="h4 m-0">
                                                    @if($agent->active == 1)
                                                    <span class="px-2 py-0 h5 rounded bg-success">
                                                        Active
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
                                                <a class="btn btn-primary ml-3" href="#" data-toggle="modal"
                                                    data-target="#editAgent">
                                                    <i class="fa-solid fa-pencil"></i>
                                                    &nbsp;Edit
                                                </a>
                                            </div>

                                            <ul class="list-group list-group-flush mt-3">
                                                <li class="list-group-item py-0">
                                                    <div
                                                        class="d-flex justify-content-start align-items-center text-left">
                                                        <div class="h4 m-auto text-muted">
                                                            <i class="fa-solid fa-phone"></i>
                                                        </div>
                                                        <div class="col-11 pl-3">
                                                            <span>Contact</span>
                                                            <div class="text-bold h6"> {{ $agent->contact }}
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
                                                            <div class="text-bold h6"> {{ $agent->email_address }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 px-3">


                                        <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                            <span class="text-secondary text-xs">BROKER</span>
                                            <div class="mx-1"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>
                                        </div>

                                        <div class="d-flex-column justify-content-start">
                                            <div class="col-lg-12 mb-3">
                                                <a href="/brokers/{{ $agent->broker->id}}" class="text-dark">
                                                    <div class="card border border-gray shadow h-100 my-auto">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between ">
                                                                <div class="d-flex">
                                                                    <div class="mr-4 my-auto align-items-center">
                                                                        <img src="{{ $agent->broker->image ? asset('/storage/'. $agent->broker->image) : asset('images/default.png')}}"
                                                                            class="roundedExtraSmallImage mx-auto"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="d-flex-column">
                                                                        <div class="h4 mb-0 text-bold">
                                                                            {{ $agent->broker->name}}
                                                                        </div>
                                                                        <div class="h6 mb-0">
                                                                            {{ $agent->broker->contact_no}}
                                                                        </div>
                                                                        <div class="h6">
                                                                            {{ $agent->broker->email}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mt-2 mb-3">
                                            <span class="text-secondary text-xs">CLIENT(s)</span>
                                            <div class="mx-1"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>
                                        </div>

                                        <div class="d-flex-column justify-content-start">
                                            @foreach ($agent->clients as $client)
                                            <div class="col-lg-12 mb-3">
                                                <a href="/clients/{{ $client->id}}" class="text-dark">
                                                    <div class="card border border-gray shadow h-100 my-auto">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-start ">
                                                                <div class="mr-4 my-auto align-items-center">
                                                                    <img src="{{ $client->image ? asset('/storage/'. $client->image) : asset('images/default.png')}}"
                                                                        class="roundedExtraSmallImage mx-auto" alt="">
                                                                </div>
                                                                <div class="d-flex-column">
                                                                    <div class="h4 mb-0 text-bold">
                                                                        {{ $client->first_name}}
                                                                        {{ $client->middle_name}}
                                                                        {{ $client->last_name}}
                                                                        {{ $client->suffix}}
                                                                    </div>
                                                                    <div class="h6 mb-0">
                                                                        {{ $client->email}}
                                                                    </div>
                                                                    <div class="h6">
                                                                        {{ $client->contact_no}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
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

{{-- EDIT AGENT --}}

<div class="modal fade" id="editAgent" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Edit Agent</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/agents/{{$agent->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    {{-- AGENT INFORMATION --}}
                    <div class="col-md-12">
                        <div class="d-flex-column justify-content-center align-items-center">
                            <div class="text-center">
                                <img class="mb-4 text-center roundedLargeImage" id="editAgentImagePreview" src="{{ $agent->image ? asset('/storage/'. $agent->image) :
                                asset('/images/default.png') }}" alt="Agent Image">
                            </div>
                            <div class="text-center mt-3">
                                <input type="file" class="border border-dark rounded p-2" name="editAgentImage"
                                    accept="image/png, image/gif, image/jpeg" id="editAgentImage">
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
                                    <input type="text" class="form-control border" value="{{$agent->name}}" name="name"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contactNo" class="form-label">Contact
                                        No:</label>
                                    <input type="text" class="form-control border" value="{{$agent->contact}}"
                                        name="contactNo" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email
                                        Address:</label>
                                    <input type="text" class="form-control border" value="{{$agent->email_address}}"
                                        name="email" required>
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
    
    let agentImage = document.getElementById('agentImage');
    let editAgentImage = document.getElementById('editAgentImage');


    if(editAgentImage){
        editAgentImage.addEventListener('change', function() {
            let reader = new FileReader();
            reader.onload = function(event) {
                let editAgentImagePreview = document.getElementById('editAgentImagePreview');
                if (editAgentImagePreview){
                    editAgentImagePreview.setAttribute('src', event.target.result);
                }
            };
            reader.readAsDataURL(this.files[0]);
        })
    };
</script>
@endsection