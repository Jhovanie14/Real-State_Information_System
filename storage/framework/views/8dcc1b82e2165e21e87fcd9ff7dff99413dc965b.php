
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 text-dark">View Client</h1>
                        <a class="btn btn-primary ml-3" target="_blank" href="/clients/<?php echo e($client->id); ?>/print">
                            <i class="fa-solid fa-print"></i>
                            <span>&nbsp;Print</span>
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                            <li class="breadcrumb-item"><a href="/clients">Clients</a>
                            </li>
                            <li class="breadcrumb-item">View Client</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">


                    
                    <div class="col-xl-3 col-lg-4">
                        <div class="card shadow-lg h-100">
                            <div class="card-body p-4 mb-0">
                                <div class="d-flex-column justify-content-center text-center">

                                    <div class="imgContainer d-flex justify-content-center mb-4">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-12 d-flex justify-content-center">
                                                <img class="roundedLargeImage"
                                                    src="<?php echo e($client->image ? asset('storage/' . $client->image) : asset('/images/default.png')); ?>"
                                                    alt="">
                                                <a href="#" class="btn m-0 p-0" data-toggle="modal"
                                                    data-target="#editImage"><i class="fas fa-solid fa-camera"></i></a>
                                                
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
                                            <?php echo e($client->first_name); ?>

                                            <?php echo e($client->middle_name); ?>

                                            <?php echo e($client->last_name); ?>

                                            <?php echo e($client->suffix); ?>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around">

                                        <a class="btn btn-primary mt-3" target="_blank" href="/brokers/<?php echo e($client->agent->broker->id); ?>">
                                            <i class="fa-solid fa-eye"></i>
                                            <span>&nbsp;View Broker</span>
                                        </a>
                                        <a class="btn btn-success mt-3" target="_blank" href="/brokers/<?php echo e($client->agent->broker->id); ?>">
                                            <i class="fa-solid fa-eye"></i>
                                            <span>&nbsp;View Properties</span>
                                        </a>
                                    </div>
                                        
                                    
                                    <div class="mt-0 mb-4">
                                        <div class="h4 m-0"></div>
                                    </div>

                                    
                                    <div class="d-flex justify-content-start align-items-center mt-4">
                                        <div class="mr-1 d-sm-none d-block"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>
                                        <span class="text-secondary text-xs">BASIC INFORMATION</span>
                                        <div class="ml-1"
                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                        </div>
                                    </div>

                                    <ul class="list-group list-group-flush mt-3">

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Address</span>
                                                    <div class="text-bold h6">
                                                        <?php echo e($client->present_address); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-mars-and-venus"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Gender</span>
                                                    <div class="text-bold h6">
                                                        <?php echo e($client->gender); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-heart"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Marital Status</span>
                                                    <div class="text-bold h6"> <?php echo e($client->marital_status); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-cake-candles"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Date of Birth</span>
                                                    <div class="text-bold h6"> <?php echo e($client->date_of_birth); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-house"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Place of Birth</span>
                                                    <div class="text-bold h6"> <?php echo e($client->place_of_birth); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-flag"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Nationality</span>
                                                    <div class="text-bold h6"> <?php echo e($client->nationality); ?>

                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">
                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-solid fa-church"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Religion</span>
                                                    <div class="text-bold h6"> <?php echo e($client->religion); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-3">
                                                    <i class="fa-solid fa-mobile-retro"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Contact</span>
                                                    <div class="text-bold h6"> <?php echo e($client->contact_no); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item py-0 px-0">
                                            <div class="d-flex justify-content-between align-items-center text-left">

                                                <div class="h4 m-auto text-muted px-2">
                                                    <i class="fa-brands fa-facebook"></i>
                                                </div>
                                                <div class="col-11 pl-3">
                                                    <span>Facebook</span>
                                                    <div class="text-bold h6">
                                                        <a target="_blank" href="https://<?php echo e($client->facebook); ?>">
                                                            <?php echo e($client->facebook); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xl-9 col-lg-8 ">
                        <div class="card bg-transparent shadow-none h-100">
                            <div class="card-header show-card bg-transparent pt-0 px-2" style="margin-left: 0.1rem;">
                                <ul class="nav nav-tabs card-header-tabs d-flex justify-content">
                                    <li class="nav-item"><a class="nav-link active" href="#propertyInfo"
                                            data-toggle="tab">Personal Information</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link " href="#spouse"
                                            data-toggle="tab">Spouse</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#employments"
                                            data-toggle="tab">Employments</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link " href="#selfEmployments"
                                            data-toggle="tab">Self
                                            Employments</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#dependents"
                                            data-toggle="tab">Dependents</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link " href="#nrcr" data-toggle="tab">Non
                                            Relative
                                            Character References</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body bg-white px-0 shadow-lg border border-transparent">
                                <div class="container-fluid">
                                    <div class="tab-content">

                                        
                                        <div class="active tab-pane" id="propertyInfo">
                                            <div class="container-fluid">
                                                <div class="d-flex justify-content-start align-items-center mb-4">
                                                    <span class="text-secondary text-xs">PERSONAL INFORMATION</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                    <div class="d-flex justify-content-end align-items-start ml-3">
                                                        <button class="btn btn-primary btn-sm" id="editPersonalInfo">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <form action="/clients/<?php echo e($client->id); ?>" method="POST"
                                                    id="personalInfoForm">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PATCH'); ?>
                                                    <div class="d-md-flex justify-content-start align-items-end">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_lastName" class="control-label">Last
                                                                    Name:</label>
                                                                <input type="text" name="client_lastName"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->last_name : ''); ?>"
                                                                    disabled></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_firstName" class="control-label">First
                                                                    Name:</label>
                                                                <input type="text" name="client_firstName"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->first_name : ''); ?>"
                                                                    disabled></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_middleName"
                                                                    class="control-label">Middle
                                                                    Name:</label>
                                                                <input type="text" name="client_middleName"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->middle_name : ''); ?>"
                                                                    disabled></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_suffix"
                                                                    class="control-label">Suffix:</label>
                                                                <input type="text" name="client_suffix"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->suffix : ''); ?>"
                                                                    disabled></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-between align-items-end">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_gender"
                                                                    class="form-label">Gender:</label>

                                                                <select class="custom-select text-lg" name="client_gender"
                                                                    disabled>

                                                                    <?php if($client->gender == 'Male'): ?>
                                                                        <option value="Male" selected hidden>Male
                                                                        </option>
                                                                    <?php elseif($client->gender == 'Female'): ?>
                                                                        <option value="Female" selected hidden>Female
                                                                        </option>
                                                                    <?php elseif($client->gender == 'Secret'): ?>
                                                                        <option value="Secret" selected hidden>Prefer not
                                                                            to say
                                                                        </option>
                                                                    <?php else: ?>
                                                                        <option disabled hidden selected>Choose...
                                                                        </option>
                                                                    <?php endif; ?>

                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                    <option value="Secret">Prefer not to say
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_maritalStatus"
                                                                    class="form-label">Marital
                                                                    Status:</label>

                                                                <select class="custom-select text-lg"
                                                                    name="client_maritalStatus" disabled>

                                                                    <?php if($client->marital_status == 'Single'): ?>
                                                                        <option value="Single" selected hidden>Single
                                                                        </option>
                                                                    <?php elseif($client->marital_status == 'Married'): ?>
                                                                        <option value="Married" selected hidde>Married
                                                                        </option>
                                                                    <?php elseif($client->marital_status == 'Widowed'): ?>
                                                                        <option value="Widowed" selected hidden>Widowed
                                                                        </option>
                                                                    <?php else: ?>
                                                                        <option disabled hidden selected>Choose...</option>
                                                                    <?php endif; ?>

                                                                    <option value="Single">Single</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Widowed">Widowed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_dateOfBirth" class="control-label">Date
                                                                    of
                                                                    Birth:</label>
                                                                <input type="date" name="client_dateOfBirth"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->date_of_birth : ''); ?>"
                                                                    disabled></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_placeOfBirth"
                                                                    class="control-label">Place
                                                                    of
                                                                    Birth:</label>
                                                                <input type="text" name="client_placeOfBirth"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->place_of_birth : ''); ?>"
                                                                    disabled></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-between align-items-end">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="client_presentAddress"
                                                                    class="control-label">Present
                                                                    Address:
                                                                </label>
                                                                <input type="text" name="client_presentAddress"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->present_address : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_nationality"
                                                                    class="control-label">Nationality:
                                                                </label>
                                                                <input type="text" name="client_nationality"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->nationality : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_religion"
                                                                    class="control-label">Religion:
                                                                </label>
                                                                <input type="text" name="client_religion"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->religion : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-start align-items-center my-4">
                                                        <span class="text-secondary text-xs">CONTACT INFORMATION</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-start align-items-end mt-3">

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_email" class="control-label">Email:
                                                                </label>
                                                                <input type="text" name="client_email"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->email : ''); ?>" disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_contactNo"
                                                                    class="control-label">Contact
                                                                    No:
                                                                </label>
                                                                <input type="text" name="client_contactNo"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->contact_no : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_viber" class="control-label">Viber:
                                                                </label>
                                                                <input type="text" name="client_viber"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->viber : ''); ?>" disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-start align-items-end">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_facebook"
                                                                    class="control-label">Facebook:
                                                                </label>
                                                                <input type="text" name="client_facebook"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->facebook : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_messenger"
                                                                    class="control-label">Messenger:
                                                                </label>
                                                                <input type="text" name="client_messenger"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->messenger : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_otherSocial"
                                                                    class="control-label">Other
                                                                    Social Media:
                                                                </label>
                                                                <input type="text" name="client_otherSocial"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->other_social : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-start align-items-center my-4">
                                                        <span class="text-secondary text-xs">OTHER IMPORTANT
                                                            INFORMATION</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-start align-items-end mt-3">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_pagibigNo"
                                                                    class="control-label">PAGIBIG
                                                                    No:
                                                                </label>
                                                                <input type="text" name="client_pagibigNo"
                                                                    class="form-control text-lg" 
                                                                    value="<?php echo e($client ? $client->pagibig_no : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_sssNo" class="control-label">SSS No:
                                                                </label>
                                                                <input type="text" name="client_sssNo"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->sss_no : ''); ?>" disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_gsisNo" class="control-label">GSIS No:
                                                                </label>
                                                                <input type="text" name="client_gsisNo"
                                                                    class="form-control text-lg" 
                                                                    value="<?php echo e($client ? $client->gsis_no : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="client_tinNo" class="control-label">TIN No:
                                                                </label>
                                                                <input type="text" name="client_tinNo"
                                                                    class="form-control text-lg" 
                                                                    value="<?php echo e($client ? $client->tin_no : ''); ?>" disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-start align-items-end">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_passportNo"
                                                                    class="control-label">Passport
                                                                    No:
                                                                </label>
                                                                <input type="text" name="client_passportNo"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->passport_no : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_passportExpiration"
                                                                    class="control-label">Passport Expiration:
                                                                </label>
                                                                <input type="DATE" name="client_passportExpiration"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->passport_expiration_date : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_passportValidity"
                                                                    class="control-label">Passport Validity:
                                                                </label>
                                                                <input type="date" name="client_passportValidity"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->passport_validity : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-start align-items-end">
                                                        <div class="col-md-4">
                                                            <div class=" form-group">
                                                                <label for="client_residenceStatus"
                                                                    class="form-label">Residential Status:</label>
                                                                <select class="custom-select text-lg"
                                                                    name="client_residenceStatus" disabled>

                                                                    <?php if($client->residence_status == 'Owned'): ?>
                                                                        <option value="Owned" selected hidden>Owned
                                                                        </option>
                                                                    <?php elseif($client->residence_status == 'Rent'): ?>
                                                                        <option value="Rent" selected hidden>Rent
                                                                        </option>
                                                                    <?php elseif(
                                                                        $client->residence_status ==
                                                                            'Lived
                                                                                                                                    with relatives'): ?>
                                                                        <option value="Lived with relatives" selected
                                                                            hidden>
                                                                            Lived
                                                                            with relatives
                                                                        </option>
                                                                    <?php else: ?>
                                                                        <option disabled hidden selected>Choose...</option>
                                                                    <?php endif; ?>

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
                                                                <label for="client_yearsOfStay"
                                                                    class="control-label">Years
                                                                    of
                                                                    stay:
                                                                </label>
                                                                <input type="text" name="client_yearsOfStay"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->years_of_stay : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="client_monthlyRental"
                                                                    class="control-label">Monthly
                                                                    Rental:
                                                                </label>
                                                                <input type="text" name="client_monthlyRental"
                                                                    class="form-control text-lg"
                                                                    value="<?php echo e($client ? $client->monthly_rental : ''); ?>"
                                                                    disabled>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-sm-end justify-content-around">
                                                        <button class="btn btn-danger px-3 my-3 mx-2" type="button"
                                                            id="personalInfoCancelButton" disabled hidden>
                                                            Cancel
                                                        </button>
                                                        <button class="btn btn-success px-3 my-3 mx-2" type="submit"
                                                            id="personalInfoSaveButton" disabled hidden>Save
                                                            Changes</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="spouse">
                                            <div class="container-fluid">

                                                <?php if(!is_null($client->spouse)): ?>
                                                    <div class="imgContainer d-flex justify-content-center mb-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="col-12 d-flex justify-content-center">
                                                                <a href="#" data></a>
                                                                <img class="roundedLargeImage"
                                                                    src="<?php echo e($client->spouse->image ? asset('/storage/' . $client->spouse->image) : asset('/images/default.png')); ?>"
                                                                    alt="Spouse Image">
                                                                <a href="#" class="btn m-0 p-0" data-toggle="modal"
                                                                    data-target="#editSpouseImage"><i
                                                                        class="fas fa-solid fa-camera"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1 text-center">
                                                        <span class="display-4">
                                                            <?php echo e($client->spouse->first_name ?? ''); ?>

                                                            <?php echo e($client->spouse->middle_name ?? ''); ?>

                                                            <?php echo e($client->spouse->last_name ?? ''); ?>

                                                            <?php echo e($client->spouse->suffix ?? ''); ?>

                                                        </span>
                                                    </div>
                                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                                        <span class="text-secondary text-xs">PERSONAL INFORMATION</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <div class="d-flex justify-content-end align-items-start ml-3">
                                                            <button class="btn btn-primary btn-sm" id="editSpouseInfo">
                                                                <i class="fa-solid fa-pencil"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <form action="/clients/spouse/<?php echo e($client->spouse->id); ?>/edit"
                                                        method="POST" id="editSpouseForm">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PATCH'); ?>
                                                        <div class="d-md-flex justify-content-start align-items-end">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="spouse_lastName"
                                                                        class="control-label">Last
                                                                        Name:</label>
                                                                    <input type="text" name="spouse_lastName"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->last_name ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="spouse_firstName"
                                                                        class="control-label">First
                                                                        Name:</label>
                                                                    <input type="text" name="spouse_firstName"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->first_name ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="spouse_middleName"
                                                                        class="control-label">Middle
                                                                        Initial:</label>
                                                                    <input type="text" name="spouse_middleName"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->middle_name ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="spouse_suffix"
                                                                        class="control-label">Suffix:</label>
                                                                    <input type="text" name="spouse_suffix"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->suffix ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-md-flex justify-content-between align-items-end">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_occupation"
                                                                        class="control-label">Occupation:</label>
                                                                    <input type="text" name="spouse_occupation"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->occupation ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_department"
                                                                        class="control-label">Department:</label>
                                                                    <input type="text" name="spouse_department"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->department ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_lengthOfEmployment"
                                                                        class="control-label">Employment Length:</label>
                                                                    <input type="text" name="spouse_lengthOfEmployment"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->length_of_employment ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_grossPay"
                                                                        class="control-label">Gross
                                                                        Pay:</label>
                                                                    <input type="text" name="spouse_grossPay"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->gross_pay ?? ''); ?>"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-md-flex justify-content-between align-items-end">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_tinNo" class="control-label">TIN
                                                                        No:</label>
                                                                    <input type="text" name="spouse_tinNo"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->tin_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_hdmfNo" class="control-label">HDMF
                                                                        No:</label>
                                                                    <input type="text" name="spouse_hdmfNo"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->hdmf_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_sssNo" class="control-label">SSS
                                                                        No:</label>
                                                                    <input type="text" name="spouse_sssNo"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->sss_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_gsisNo" class="control-label">GSIS
                                                                        No:</label>
                                                                    <input type="text" name="spouse_gsisNo"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->gsis_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-md-flex justify-content-between align-items-end">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_passportNo"
                                                                        class="control-label">Passport No:</label>
                                                                    <input type="text" name="spouse_passportNo"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->passport_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_facebook"
                                                                        class="control-label">Facebook
                                                                        Account:</label>
                                                                    <input type="text" name="spouse_facebook"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->facebook ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_contactNo"
                                                                        class="control-label">Contact
                                                                        No:</label>
                                                                    <input type="text" name="spouse_contactNo"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->contact_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="spouse_otherIncome"
                                                                        class="control-label">Other
                                                                        Income:</label>
                                                                    <input type="text" name="spouse_otherIncome"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->other_income ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex justify-content-start align-items-center my-4">
                                                            <span class="text-secondary text-xs">EMPLOYER
                                                                INFORMATION</span>
                                                            <div class="mx-1"
                                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                            </div>
                                                        </div>

                                                        <div class="d-md-flex justify-content-between align-items-end">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="spouse_employerName"
                                                                        class="control-label">Employer Name:</label>
                                                                    <input type="text" name="spouse_employerName"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->employer_name ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-md-flex justify-content-between align-items-end">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="spouse_employerBusinessAddress"
                                                                        class="control-label">Business Address:</label>
                                                                    <input type="text"
                                                                        name="spouse_employerBusinessAddress"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->employer_business_address ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="spouse_employerEmail"
                                                                        class="control-label">Email:</label>
                                                                    <input type="text" name="spouse_employerEmail"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->employer_email ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="spouse_employerContact"
                                                                        class="control-label">Contact No:</label>
                                                                    <input type="text" name="spouse_employerContact"
                                                                        class="form-control text-lg"
                                                                        value="<?php echo e($client->spouse->contact_no ?? ''); ?>"
                                                                        disabled></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-sm-between justify-content-between">
                                                            <div class="">
                                                                <a href="#" class="btn btn-danger px-3 my-3 mx-2"
                                                                    id="spouseDeleteButton" data-toggle="modal"
                                                                    data-target="#deleteSpouseModal" disabled hidden>
                                                                    Delete
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-danger px-3 my-3 mx-2"
                                                                    type="button" id="spouseCancelButton" disabled
                                                                    hidden>
                                                                    Cancel
                                                                </button>
                                                                <button class="btn btn-success px-3 my-3 mx-2"
                                                                    type="submit" id="spouseSaveButton" disabled
                                                                    hidden>Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                <?php else: ?>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-danger rounded-circle mb-4"
                                                            data-toggle="modal" data-target="#addSpouseModal">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="display-3 text-center">
                                                        NO RECORDS FOUND
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="employments">
                                            <div class="container-fluid">
                                                <?php if(!$client->employments->isEmpty()): ?>
                                                    
                                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                                        <span class="text-secondary text-xs">EMPLOYMENTS</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <div class="d-flex justify-content-end align-items-start ml-3">
                                                            <button class="btn btn-warning btn-sm" data-toggle="modal"
                                                                data-target="#addEmploymentModal">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <?php $__currentLoopData = $client->employments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="card rounded-0">
                                                            <div class="card-header bg-warning">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="h5 m-0">
                                                                        <i class="fa-solid fa-briefcase"></i>
                                                                        <span
                                                                            class="text-bold">&nbsp;<?php echo e($employment->employer_name); ?></span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-end">
                                                                        <button class="btn btn-primary mr-1"
                                                                            data-toggle="modal"
                                                                            data-target="#editEmploymentModal<?php echo e($employment->id); ?>">
                                                                            <i class="fa-solid fa-pencil"></i>
                                                                            <span
                                                                                class="d-none d-sm-inline">&nbsp;Edit</span>
                                                                        </button>
                                                                        <button class="btn btn-danger"
                                                                            data-target="#confirmDelete<?php echo e($employment->id); ?>"
                                                                            data-toggle="modal">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                            <span
                                                                                class="d-none d-sm-inline">&nbsp;Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-map-location"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Business
                                                                                                            Address</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->employer_business_address); ?>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-phone"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Contact
                                                                                                            No</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->contact_no); ?>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-envelope"></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Email</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->employer_email); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-briefcase"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Occupation</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->occupation); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-address-card"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Position</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->position); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-clock"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Employment
                                                                                                            Length</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->length_of_employment); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-peso-sign"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Gross
                                                                                                            Pay</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->monthly_gross_pay); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-briefcase"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Other
                                                                                                            Income</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($employment->other_income ? $employment->other_income : 'None'); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-warning rounded-circle mb-4"
                                                            data-toggle="modal" data-target="#addEmploymentModal">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="display-3 text-center">
                                                        NO RECORDS FOUND
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="selfEmployments">
                                            <div class="container-fluid">
                                                <?php if(!$client->selfEmployments->isEmpty()): ?>
                                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                                        <span class="text-secondary text-xs">SELF EMPLOYMENTS</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <div class="d-flex justify-content-end align-items-start ml-3">
                                                            <button class="btn btn-info btn-sm" data-toggle="modal"
                                                                data-target="#addSelfEmploymentModal">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <?php $__currentLoopData = $client->selfEmployments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selfEmployment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="card rounded-0">
                                                            <div class="card-header bg-info">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="h5 m-0">
                                                                        <i class="fa-solid fa-briefcase"></i>
                                                                        <span
                                                                            class="text-bold">&nbsp;<?php echo e($selfEmployment->business_name); ?></span>
                                                                    </div>
                                                                    <div class="d-flex justify-content-end">
                                                                        <button class="btn btn-warning mr-1"
                                                                            data-toggle="modal"
                                                                            data-target="#editSelfEmploymentModal<?php echo e($selfEmployment->id); ?>">
                                                                            <i class="fa-solid fa-pencil"></i>&nbsp;
                                                                            <span class="d-none d-sm-inline">Edit</span>
                                                                        </button>

                                                                        <button class="btn btn-danger" data-toggle="modal"
                                                                            data-target="#confirmDelete<?php echo e($selfEmployment->id); ?>">
                                                                            <i class="fa-solid fa-trash"></i>&nbsp;
                                                                            <span class="d-none d-sm-inline">Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-briefcase"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Nature of
                                                                                                            Business</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->nature_of_business); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-address-card"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Position</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->position); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-clock"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Years of
                                                                                                            Operation</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->years_of_operation); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-map-location"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Business
                                                                                                            Address</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->business_address); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-phone"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Contact
                                                                                                            No</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->contact_no); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-envelope"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Email</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->business_email); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-passport"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>TIN No</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->tin_no); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-passport"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>SSS No</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->sss_no); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-passport"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>PAG-IBIG
                                                                                                            No</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->pagibig_no); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="list-group-item">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-peso-sign"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Monthly Gross
                                                                                                            Pay</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->monthly_gross_pay); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <div class="row">

                                                                                                    <div
                                                                                                        class="col-2 col-sm-1 m-auto text-center">
                                                                                                        <div
                                                                                                            class="h4 m-auto text-muted">
                                                                                                            <i
                                                                                                                class="fa-solid fa-briefcase"></i>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-10 col-sm-11 pl-sm-4">
                                                                                                        <span>Other
                                                                                                            Income</span>
                                                                                                        <div
                                                                                                            class="text-bold h6">
                                                                                                            <?php echo e($selfEmployment->other_income ? $selfEmployment->other_income : 'None'); ?>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-info rounded-circle mb-4"
                                                            data-toggle="modal" data-target="#addSelfEmploymentModal">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="display-3 text-center">
                                                        NO RECORDS FOUND
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="dependents">
                                            <div class="container-fluid">
                                                <?php if(!$client->dependents->isEmpty()): ?>
                                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                                        <span class="text-secondary text-xs">DEPENDENTS</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <div class="d-flex justify-content-end align-items-start ml-3">
                                                            <button class="btn btn-success btn-sm" data-toggle="modal"
                                                                data-target="#addDependentsModal">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <table class="table table-hover border-top-0">
                                                        <thead class="bg-success">
                                                            <tr>
                                                                <th scope="col">Full Name</th>
                                                                <th scope="col">Age</th>
                                                                <th scope="col" class="text-right">Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $__currentLoopData = $client->dependents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td class="text-bold">
                                                                        <?php echo e($dependent->name ?? ''); ?>

                                                                    </td>
                                                                    <td class="text-bold">

                                                                        <?php echo e($dependent->age ?? ''); ?>

                                                                    </td>
                                                                    <td class="text-end">
                                                                        <div
                                                                            class="d-flex flex-sm-row flex-column justify-content-end">
                                                                            <a href="#" class="btn btn-warning m-1"
                                                                                data-toggle="modal"
                                                                                data-target="#editDependentsModal<?php echo e($dependent->id); ?>">
                                                                                <i class="fa-solid fa-pencil"></i>
                                                                                <span
                                                                                    class="d-none d-md-inline">&nbsp;Edit</span>
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-danger px-3 m-1"
                                                                                data-toggle="modal"
                                                                                data-target="#confirmDelete<?php echo e($dependent->id); ?>">
                                                                                <i class="fa-solid fa-trash"></i>
                                                                                <span
                                                                                    class="d-none d-md-inline">&nbsp;Delete</span>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                <?php else: ?>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success rounded-circle mb-4"
                                                            data-toggle="modal" data-target="#addDependentsModal">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="display-3 text-center">
                                                        NO RECORDS FOUND
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="nrcr">
                                            <div class="container-fluid">
                                                <?php if(!$client->nonRelativeCharacterReferences->isEmpty()): ?>
                                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                                        <span class="text-secondary text-xs">NON RELATIVE CHARACTER
                                                            REFERENCES</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <div class="d-flex justify-content-end align-items-start ml-3">
                                                            <button class="btn btn-secondary btn-sm" data-toggle="modal"
                                                                data-target="#addNRCRModal">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>


                                                    <table class="table table-hover">
                                                        <thead class="bg-secondary">
                                                            <tr>
                                                                <th scope="col">Full Name</th>
                                                                <th scope="col">Address</th>
                                                                <th scope="col">Contact No</th>
                                                                <th scope="col" class="text-right">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $__currentLoopData = $client->nonRelativeCharacterReferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nrcr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td class="text-bold">
                                                                        <?php echo e($nrcr->name ?? ''); ?>

                                                                    </td>
                                                                    <td class="text-bold w-25">
                                                                        <?php echo e($nrcr->address ?? ''); ?>

                                                                    </td>
                                                                    <td class="text-bold w-25">
                                                                        <?php echo e($nrcr->contact_no ?? ''); ?>

                                                                    </td>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="d-flex flex-sm-row flex-column justify-content-end">
                                                                            <a href="#" class="btn btn-warning m-1"
                                                                                data-toggle="modal"
                                                                                data-target="#editNRCRModal<?php echo e($nrcr->id); ?>">
                                                                                <i class="fa-solid fa-pencil"></i>
                                                                                <span
                                                                                    class="d-none d-md-inline">&nbsp;Edit</span>
                                                                            </a>
                                                                            <a href="#"
                                                                                class="btn btn-danger px-3 m-1"
                                                                                data-toggle="modal"
                                                                                data-target="#confirmDelete<?php echo e($nrcr->id); ?>">
                                                                                <i class="fa-solid fa-trash"></i>
                                                                                <span
                                                                                    class="d-none d-md-inline">&nbsp;Delete</span>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                <?php else: ?>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-dark rounded-circle mb-4"
                                                            data-toggle="modal" data-target="#addNRCRModal">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="display-3 text-center">
                                                        NO RECORDS FOUND
                                                    </div>
                                                <?php endif; ?>
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

    
    
    <div class="modal fade" id="editImage" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">
                        <?php echo e($client->image ? 'Edit Image' : 'Upload Image'); ?>

                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/clients/<?php echo e($client->id); ?>/image/upload" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="d-flex flex-column">
                                <div id="personalInfo">
                                    <div class="d-flex-column justify-content-center">
                                        <div class="text-center">
                                            <img class="mt-4 mb-2 text-center roundedLargeImage" id="clientImagePreview"
                                                src="<?php echo e($client->image ? asset('storage/' . $client->image) : asset('images/default.png')); ?>"
                                                alt="Client Image">
                                        </div>
                                        <div class="text-center mb-2">
                                            <input type="file" class="border border-dark rounded p-2"
                                                name="client_image" accept="image/png, image/gif, image/jpeg"
                                                id="clientImage" value="<?php echo e($client ? $client->image : ''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="editClient">
                                <span>Save Changes </span>&nbsp;
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="viewClientImage" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">
                        View Image
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <img class="mt-4 mb-2 text-center" id="imagePreview"
                    src="<?php echo e($client->image ? asset('storage/' . $client->image) : asset('images/clientimages/profile.png')); ?>"
                    alt="Client Image">
            </div>
        </div>
    </div>

    
    
    <div class="modal fade" id="addSpouseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">Add Spouse Details</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/clients/spouse/<?php echo e($client->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="d-flex flex-column">
                                <div class="text-center">
                                    <img class="my-4 text-center roundedClientImage" id="newSpouseImagePreview"
                                        src="<?php echo e(asset('images/default.png')); ?>" alt="Spouse Image">
                                </div>
                                <div class="text-center my-3">
                                    <input type="file" class="border border-dark rounded p-2" name="spouse_image"
                                        accept="image/png, image/gif, image/jpeg" id="newSpouseImage"
                                        value="<?php echo e($client->spouse->image ?? ''); ?>">
                                </div>
                                <div class="text-center mb-5">
                                    <label class="col-sm-6 col-form-label">
                                        Spouse Image
                                    </label>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_lastName" class="form-label">Last
                                                Name:</label>

                                            <input type="text" class="form-control" id="spouse_lastName"
                                                name="spouse_lastName" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_firstName" class="form-label">First
                                                Name:</label>

                                            <input type="text" class="form-control" id="spouse_firstName"
                                                name="spouse_firstName" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="spouse_middleName" class="form-label">M.I.:</label>

                                            <input type="text" class="form-control" id="spouse_middleName"
                                                name="spouse_middleName">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class=" form-group">
                                            <label for="spouse_suffix" class="form-label">Suffix:</label>

                                            <input type="text" class="form-control" id="spouse_suffix"
                                                name="spouse_suffix">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_occupation" class="form-label">Occupation:</label>

                                            <input type="text" class="form-control" id="spouse_occupation"
                                                name="spouse_occupation">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_department" class="form-label">Department:</label>

                                            <input type="text" class="form-control" id="spouse_department"
                                                name="spouse_department">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_lengthOfEmployment" class="form-label">Length
                                                of Employment:</label>

                                            <input type="text" class="form-control" id="spouse_lengthOfEmployment"
                                                name="spouse_lengthOfEmployment">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="spouse_employerName" class="form-label">Employer
                                                Name:</label>

                                            <input type="text" class="form-control" id="spouse_employerName"
                                                name="spouse_employerName">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_contactNo" class="form-label">Employer
                                                Contact
                                                No..:</label>

                                            <input type="text" class="form-control" id="spouse_employerContactNo"
                                                name="spouse_employerContactNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="spouse_employerBusinessAddress" class="form-label">Employer
                                                Business Address:</label>

                                            <input type="text" class="form-control"
                                                id="spouse_employerBusinessAddress"
                                                name="spouse_employerBusinessAddress">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_employerEmail" class="form-label">Employer
                                                Email:</label>

                                            <input type="text" class="form-control" id="spouse_employerEmail"
                                                name="spouse_employerEmail">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="spouse_grossPay" class="form-label">Gross
                                                Pay:</label>

                                            <input type="text" class="form-control" id="spouse_grossPay"
                                                name="spouse_grossPay">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_tinNo" class="form-label">TIN
                                                No..:</label>

                                            <input type="text" class="form-control" id="spouse_tinNo"
                                                name="spouse_tinNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="spouse_otherIncome" class="form-label">Other
                                                Income:</label>

                                            <input type="text" class="form-control" id="spouse_otherIncome"
                                                name="spouse_otherIncome">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_hdmfNo" class="form-label">HDMF
                                                No..:</label>

                                            <input type="text" class="form-control" id="spouse_hdmfNo"
                                                name="spouse_hdmfNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-end align-items-center">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_sssNo" class="form-label">SSS
                                                No..:</label>

                                            <input type="text" class="form-control" id="spouse_sssNo"
                                                name="spouse_sssNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="spouse_facebook" class="form-label">Facebook
                                                Account:</label>

                                            <input type="text" class="form-control" id="spouse_facebook"
                                                name="spouse_facebook">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_gsisNo" class="form-label">GSIS:</label>

                                            <input type="text" class="form-control" id="spouse_gsisNo"
                                                name="spouse_gsisNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="spouse_contactNo" class="form-label">Contact
                                                No.:</label>

                                            <input type="text" class="form-control" id="spouse_contactNo"
                                                name="spouse_contactNo">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="spouse_passportNo" class="form-label">Passport
                                                No.:</label>

                                            <input type="text" class="form-control" id="spouse_passportNo"
                                                name="spouse_passportNo">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span>Submit </span>&nbsp;
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if(!is_null($client->spouse)): ?>
        
        <div class="modal fade" id="editSpouseImage" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">
                            <?php echo e($client->spouse->image ? 'Edit Image' : 'Upload Image'); ?>

                        </h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/clients/spouse/<?php echo e($client->spouse->id); ?>/image/upload" method="POST"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="d-flex flex-column">
                                    <div id="personalInfo">
                                        <div class="d-flex-column justify-content-center">
                                            <div class="text-center">
                                                <img class="mt-4 mb-2 text-center roundedLargeImage"
                                                    id="spouseImagePreview"
                                                    src="<?php echo e($client->spouse->image ? asset('storage/' . $client->spouse->image) : asset('/images/default.png')); ?>"
                                                    alt="Client Image">
                                            </div>
                                            <div class="text-center mb-2">
                                                <input type="file" class="border border-dark rounded p-2"
                                                    name="spouse_image" accept="image/png, image/gif, image/jpeg"
                                                    id="spouseImage" value="<?php echo e($client->spouse->image ?? ''); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="editClient">
                                    <span>Save Changes </span>&nbsp;
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="deleteSpouseModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to delete this spouse record?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/clients/spouse/<?php echo e($client->spouse->id); ?>/delete" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
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
    <?php endif; ?>

    
    
    <div class="modal fade" id="addEmploymentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="employmentOccupation">Add Employment</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/clients/employment/<?php echo e($client->id); ?>" method="POST" id="employmentForm">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="d-flex flex-column">
                                <div class="d-md-flex justify-content-between align-items-center">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="occupation" class="form-label">Occupation:</label>

                                            <input type="text" class="form-control" id="occupation"
                                                name="occupation">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="position" class="form-label">Position:</label>

                                            <input type="text" class="form-control" id="position"
                                                name="position">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lengthOfEmployment" class="form-label">Length
                                                of Employment:</label>

                                            <input type="text" class="form-control" id="lengthOfEmployment"
                                                name="lengthOfEmployment">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="employerName" class="form-label">Employer
                                                Name:</label>

                                            <input type="text" class="form-control" id="employerName"
                                                name="employerName">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contactNo" class="form-label">Contact
                                                No.:</label>

                                            <input type="text" class="form-control" id="contactNo"
                                                name="contactNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="employerBusinessAddress" class="form-label">Employer
                                                Business Address:</label>

                                            <input type="text" class="form-control" id="employerBusinessAddress"
                                                name="employerBusinessAddress">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="employerEmail" class="form-label">Employer
                                                Email:</label>

                                            <input type="text" class="form-control" id="employerEmail"
                                                name="employerEmail">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="monthlyGrossPay" class="form-label">Monthly
                                                Gross Pay:</label>

                                            <input type="text" class="form-control" id="monthlyGrossPay"
                                                name="monthlyGrossPay">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="otherIncome" class="form-label">Other
                                                Income:</label>

                                            <input type="text" class="form-control" id="otherIncome"
                                                name="otherIncome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="addEmployement">
                            <span>Submit </span>&nbsp;
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if(!$client->employments->isEmpty()): ?>
        
        <?php $__currentLoopData = $client->employments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="editEmploymentModal<?php echo e($employment->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <h5 class="modal-title" id="employmentOccupation">Employment Details</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/clients/employment/<?php echo e($employment->id); ?>/edit" method="POST"
                            id="employmentForm">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="d-flex flex-column">
                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="occupation" class="form-label">Occupation:</label>

                                                    <input type="text" class="form-control" id="occupation"
                                                        name="occupation"
                                                        value="<?php echo e($client->employments ? $employment->occupation : ''); ?>">
                                                    <?php $__errorArgs = ['occupation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="position" class="form-label">Position:</label>

                                                    <input type="text" class="form-control" id="position"
                                                        name="position"
                                                        value="<?php echo e($client->employments ? $employment->position : ''); ?>">
                                                    <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="lengthOfEmployment" class="form-label">Length
                                                        of Employment:</label>

                                                    <input type="text" class="form-control" id="lengthOfEmployment"
                                                        name="lengthOfEmployment"
                                                        value="<?php echo e($client->employments ? $employment->length_of_employment : ''); ?>">
                                                    <?php $__errorArgs = ['lengthOfEmployment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="employerName" class="form-label">Employer
                                                        Name:</label>

                                                    <input type="text" class="form-control" id="employerName"
                                                        name="employerName"
                                                        value="<?php echo e($employment ? $employment->employer_name : ''); ?>">
                                                    <?php $__errorArgs = ['employerName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="contactNo" class="form-label">Contact
                                                        No.:</label>

                                                    <input type="text" class="form-control" id="contactNo"
                                                        name="contactNo"
                                                        value="<?php echo e($employment ? $employment->contact_no : ''); ?>">
                                                    <?php $__errorArgs = ['contactNo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="employerBusinessAddress" class="form-label">Employer
                                                        Business Address:</label>

                                                    <input type="text" class="form-control"
                                                        id="employerBusinessAddress" name="employerBusinessAddress"
                                                        value="<?php echo e($employment ? $employment->employer_business_address : ''); ?>">
                                                    <?php $__errorArgs = ['employerBusinessAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="employerEmail" class="form-label">Employer
                                                        Email:</label>

                                                    <input type="text" class="form-control" id="employerEmail"
                                                        name="employerEmail"
                                                        value="<?php echo e($employment ? $employment->employer_email : ''); ?>">
                                                    <?php $__errorArgs = ['employerEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="monthlyGrossPay" class="form-label">Monthly
                                                        Gross Pay:</label>

                                                    <input type="text" class="form-control" id="monthlyGrossPay"
                                                        name="monthlyGrossPay"
                                                        value="<?php echo e($employment ? $employment->monthly_gross_pay : ''); ?>">
                                                    <?php $__errorArgs = ['monthlyGrossPay'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="otherIncome" class="form-label">Other
                                                        Income:</label>

                                                    <input type="text" class="form-control" id="otherIncome"
                                                        name="otherIncome"
                                                        value="<?php echo e($employment ? $employment->other_income : ''); ?>">
                                                    <?php $__errorArgs = ['otherIncome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="text-danger"><?php echo e($message); ?></p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="addEmployement">
                                    <span>Save Changes </span>&nbsp;
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $client->employments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="confirmDelete<?php echo e($employment->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="h5">
                                Are you sure you want to delete this employment record?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="/clients/employment/<?php echo e($employment->id); ?>/delete" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
    
    <div class="modal fade" id="addSelfEmploymentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="employmentOccupation">Add Self Employment</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/clients/selfEmployment/<?php echo e($client->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="d-flex flex-column">
                                <div class="d-md-flex justify-content-between align-items-center">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="natureOfBusiness" class="form-label">Nature of
                                                Business:</label>

                                            <input type="text" class="form-control" id="natureOfBusiness"
                                                name="natureOfBusiness">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="position" class="form-label">Position:</label>

                                            <input type="text" class="form-control" id="position"
                                                name="position">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="yearsOfOperation" class="form-label">Years of
                                                Operation:</label>

                                            <input type="text" class="form-control" id="yearsOfOperation"
                                                name="yearsOfOperation">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="businessName" class="form-label">Business
                                                Name:</label>

                                            <input type="text" class="form-control" id="businessName"
                                                name="businessName">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contactNo" class="form-label">Contact
                                                No.:</label>

                                            <input type="text" class="form-control" id="contactNo"
                                                name="contactNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="businessAddress" class="form-label">Business Address:</label>

                                            <input type="text" class="form-control" id="businessAddress"
                                                name="businessAddress">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="businessEmail" class="form-label">Business
                                                Email:</label>

                                            <input type="text" class="form-control" id="businessEmail"
                                                name="businessEmail">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-between align-items-center">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="monthlyGrossPay" class="form-label">Monthly
                                                Gross Pay:</label>

                                            <input type="text" class="form-control" id="monthlyGrossPay"
                                                name="monthlyGrossPay">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tinNo" class="form-label">TIN No.:</label>

                                            <input type="text" class="form-control" id="tinNo"
                                                name="tinNo">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="sssNo" class="form-label">SSS No.:</label>

                                            <input type="text" class="form-control" id="sssNo"
                                                name="sssNo">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="otherIncome" class="form-label">Other
                                                Income:</label>

                                            <input type="text" class="form-control" id="otherIncome"
                                                name="otherIncome">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pagibigNo" class="form-label">PAG-IBIG No.:</label>

                                            <input type="text" class="form-control" id="pagibigNo"
                                                name="pagibigNo">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="addEmployement">
                            <span>Submit </span>&nbsp;
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if(!$client->selfEmployments->isEmpty()): ?>
        
        <?php $__currentLoopData = $client->selfEmployments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selfEmployment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="editSelfEmploymentModal<?php echo e($selfEmployment->id); ?>" tabindex="-1"
                role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title" id="employmentOccupation">Self Employment Details</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/clients/selfEmployment/<?php echo e($selfEmployment->id); ?>/edit" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="d-flex flex-column">

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="natureOfBusiness" class="form-label">Nature of
                                                        Business:</label>

                                                    <input type="text" class="form-control" id="natureOfBusiness"
                                                        name="natureOfBusiness"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->nature_of_business : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="position" class="form-label">Position:</label>

                                                    <input type="text" class="form-control" id="position"
                                                        name="position"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->position : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="yearsOfOperation" class="form-label">Years of
                                                        Operation:</label>

                                                    <input type="text" class="form-control" id="yearsOfOperation"
                                                        name="yearsOfOperation"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->years_of_operation : ''); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="businessName" class="form-label">Business
                                                        Name:</label>

                                                    <input type="text" class="form-control" id="businessName"
                                                        name="businessName"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->business_name : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="contactNo" class="form-label">Contact
                                                        No.:</label>

                                                    <input type="text" class="form-control" id="contactNo"
                                                        name="contactNo"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->contact_no : ''); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="businessAddress" class="form-label">Business
                                                        Address:</label>

                                                    <input type="text" class="form-control" id="businessAddress"
                                                        name="businessAddress"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->business_address : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="businessEmail" class="form-label">Business
                                                        Email:</label>

                                                    <input type="text" class="form-control" id="businessEmail"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->business_email : ''); ?>"
                                                        name="businessEmail">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-between align-items-center">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="monthlyGrossPay" class="form-label">Monthly
                                                        Gross Pay:</label>

                                                    <input type="text" class="form-control" id="monthlyGrossPay"
                                                        name="monthlyGrossPay"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->monthly_gross_pay : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="tinNo" class="form-label">TIN No.:</label>

                                                    <input type="text" class="form-control" id="tinNo"
                                                        name="tinNo"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->tin_no : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="sssNo" class="form-label">SSS No.:</label>

                                                    <input type="text" class="form-control" id="sssNo"
                                                        name="sssNo"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->sss_no : ''); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="otherIncome" class="form-label">Other
                                                        Income:</label>

                                                    <input type="text" class="form-control" id="otherIncome"
                                                        name="otherIncome"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->other_income : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="pagibigNo" class="form-label">PAG-IBIG No..:</label>

                                                    <input type="text" class="form-control" id="pagibigNo"
                                                        name="pagibigNo"
                                                        value="<?php echo e($selfEmployment ? $selfEmployment->pagibig_no : ''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="addEmployement">
                                    <span>Save Changes </span>&nbsp;
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php $__currentLoopData = $client->selfEmployments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selfEmployment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="confirmDelete<?php echo e($selfEmployment->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="h5">
                                Are you sure you want to delete this self-employment record?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="/clients/selfEmployment/<?php echo e($selfEmployment->id); ?>/delete" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


    
    
    <?php $__currentLoopData = $client->dependents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editDependentsModal<?php echo e($dependent->id); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title">Edit Dependent</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/clients/dependent/<?php echo e($dependent->id); ?>/edit" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="d-flex flex-column">

                                    
                                    <div class="d-md-flex justify-content-between align-items-center">

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Full Name:</label>

                                                <input type="text" class="form-control" id="name"
                                                    name="name"
                                                    value="<?php echo e($client->dependents ? $dependent->name : ''); ?>">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-danger"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="age" class="form-label">Age:</label>

                                                <input type="text" class="form-control" id="age"
                                                    name="age"
                                                    value="<?php echo e($client->dependents ? $dependent->age : ''); ?>">
                                                <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p class="text-danger"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">
                                <span>Save Changes </span>&nbsp;
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <div class="modal fade" id="addDependentsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Add Dependent</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/clients/dependent/<?php echo e($client->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="d-flex flex-column">

                                
                                <div class="d-md-flex justify-content-between align-items-center">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Full Name:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="age" class="form-label">Age:</label>
                                            <input type="text" class="form-control" id="age" name="age"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span>Submit </span>&nbsp;
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php if(!$client->dependents->isEmpty()): ?>
        <?php $__currentLoopData = $client->dependents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="confirmDelete<?php echo e($dependent->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="h5">
                                Are you sure you want to delete this dependent?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="/clients/dependent/<?php echo e($dependent->id); ?>/delete" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
    
    <div class="modal fade" id="addNRCRModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title">Add Reference</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/clients/nrcr/<?php echo e($client->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="d-flex flex-column">
                                <div class="d-md-flex justify-content-center align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Full Name:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contactNo" class="form-label">Contact No:</label>
                                            <input type="text" class="form-control" id="contactNo"
                                                name="contactNo" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-start align-items-center">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address" class="form-label">Address:</label>
                                            <textarea type="text" class="form-control" id="address" name="address" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <span>Submit </span>&nbsp;
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php $__currentLoopData = $client->nonRelativeCharacterReferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nrcr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editNRCRModal<?php echo e($nrcr->id); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title">Edit Reference</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/clients/nrcr/<?php echo e($nrcr->id); ?>/edit" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="d-flex flex-column">
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Full Name:</label>

                                                <input type="text" class="form-control" id="name"
                                                    name="name" value="<?php echo e($nrcr ? $nrcr->name : ''); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="contactNo" class="form-label">Contact No:</label>

                                                <input type="text" class="form-control" id="contactNo"
                                                    name="contactNo" value="<?php echo e($nrcr ? $nrcr->contact_no : ''); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex justify-content-between align-items-center">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address" class="form-label">Address:</label>
                                                <textarea type="text" class="form-control" id="address" name="address"><?php echo e($nrcr ? $nrcr->address : ''); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="addEmployement">
                                <span>Save Changes </span>&nbsp;
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(!$client->nonRelativeCharacterReferences->isEmpty()): ?>
        <?php $__currentLoopData = $client->nonRelativeCharacterReferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nrcr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="confirmDelete<?php echo e($nrcr->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="h5">
                                Are you sure you want to delete this reference record?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="/clients/nrcr/<?php echo e($nrcr->id); ?>/delete" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <script>
        $(document).ready(function(e) {
            $('#clientImage').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#clientImagePreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        $(document).ready(function(e) {
            $('#spouseImage').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#spouseImagePreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        $(document).ready(function(e) {
            $('#newSpouseImage').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#newSpouseImagePreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        $('#editPersonalInfo').click(function() {
            $("#personalInfoForm :input").prop("disabled", false);
            $("#personalInfoSaveButton").prop("hidden", false).prop("disabled", false);
            $("#personalInfoCancelButton").prop("hidden", false).prop("disabled", false);
            $("#editPersonalInfo").prop("disabled", true).text("EDIT MODE");
        });

        $('#personalInfoCancelButton').click(function() {
            $("#personalInfoForm :input").prop("disabled", true);
            $("#personalInfoSaveButton").prop("hidden", true).prop("disabled", true);
            $("#personalInfoCancelButton").prop("hidden", true).prop("disabled", true);
            $("#editPersonalInfo").prop("disabled", false).html("<span class='fa-solid fa-pencil'> </span>");
        });

        $('#editSpouseInfo').click(function() {
            $("#editSpouseForm :input").prop("disabled", false);
            $("#spouseDeleteButton").prop("hidden", false).prop("disabled", false);
            $("#spouseSaveButton").prop("hidden", false).prop("disabled", false);
            $("#spouseCancelButton").prop("hidden", false).prop("disabled", false);
            $("#editSpouseInfo").prop("disabled", true).text("EDIT MODE");
        });

        $('#spouseCancelButton').click(function() {
            $("#editSpouseForm :input").prop("disabled", true);
            $("#spouseDeleteButton").prop("hidden", true).prop("disabled", true);
            $("#spouseSaveButton").prop("hidden", true).prop("disabled", true);
            $("#spouseCancelButton").prop("hidden", true).prop("disabled", true);
            $("#editSpouseInfo").prop("disabled", false).html("<span class='fa-solid fa-pencil'> </span>");
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/clients/show.blade.php ENDPATH**/ ?>