
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 text-dark">View Broker</h1>
                        <a class="btn btn-primary ml-3" target="_blank" href="/brokers/<?php echo e($broker->id); ?>/print">
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
                        <div class="card bg-transparent shadow-none h-100">
                            <div class="card-header show-card bg-transparent pt-0 px-2" style="margin-left: 0.1rem;">
                                <ul class="nav nav-tabs card-header-tabs d-flex justify-content">
                                    <li class="nav-item"><a class="nav-link active" href="#broker"
                                            data-toggle="tab">Personal Information</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#clients" data-toggle="tab">Clients</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#agents" data-toggle="tab">Agents</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#inhouse_properties"
                                            data-toggle="tab">In-House Reservations & Properties</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#hdmf_properties" data-toggle="tab">HDMF
                                            Loan Reservations & Properties</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body bg-white px-0 shadow-lg border border-transparent">
                                <div class="container-fluid">
                                    <div class="tab-content">

                                        
                                        <div class="active tab-pane" id="broker">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-4 px-3">

                                                        <div class="d-flex-column justify-content-center text-center">

                                                            <div class="imgContainer d-flex justify-content-center mb-4">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="col-12 d-flex justify-content-center">
                                                                        <img class="roundedLargeImage img-fluid"
                                                                            src="<?php echo e($broker->image ? asset('storage/' . $broker->image) : asset('/images/default.png')); ?>"
                                                                            alt="User Image">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div
                                                                class="d-flex justify-content-start align-items-center mt-4">
                                                                <div class="mx-1"
                                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                                </div>
                                                            </div>
                                                            <div class="mt-3 mb-0">
                                                                <div class="h1 mb-0">
                                                                    <?php echo e($broker->name); ?>

                                                                </div>
                                                            </div>
                                                            
                                                            <div class="mt-0">
                                                                <div class="h4 m-0">
                                                                    <?php if($broker->active == 2): ?>
                                                                        <span class="px-2 py-0 h5 rounded bg-success">
                                                                            Active
                                                                        </span>
                                                                    <?php elseif($broker->active == 1): ?>
                                                                        <span class="px-2 py-0 h5 rounded bg-warning">
                                                                            Archived
                                                                        </span>
                                                                    <?php else: ?>
                                                                        <span class="px-2 py-0 h5 rounded bg-danger">
                                                                            Deleted
                                                                        </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <div class="mt-0 mb-4">
                                                                <div class="h4 m-0"></div>
                                                            </div>

                                                            
                                                            <div
                                                                class="d-flex justify-content-start align-items-center mt-4">

                                                                <span class="text-secondary text-xs">BASIC
                                                                    INFORMATION</span>
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
                                                                                <?php echo e($broker->prc_license); ?>

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
                                                                                <?php echo e($broker->tin_no); ?>

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
                                                                            <div class="text-bold h6">
                                                                                <?php echo e($broker->contact_no); ?>

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
                                                                            <div class="text-bold h6"> <?php echo e($broker->email); ?>

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
                                                                <a class="btn btn-primary ml-3" href="#"
                                                                    data-toggle="modal" data-target="#editBroker">
                                                                    <i class="fa-solid fa-pencil"></i>
                                                                    &nbsp;Edit Broker
                                                                </a>
                                                            </div>
                                                            <span
                                                                class="display-3 display-4 text-bold"><?php echo e($broker ? $broker->brokerage_firm : null); ?></span>
                                                            <span class="text-secondary text-s mb-2 ml-2">BROKERAGE
                                                                FIRM</span>
                                                        </div>
                                                        <div class="mx-1 mt-2 mb-2"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex justify-content-between align-items-start mt-1 mb-3">

                                                                <div class=" d-flex flex-column">
                                                                    <div
                                                                        class="d-flex justify-content-start align-items-center text-left">
                                                                        <div class="h4 m-auto text-muted">
                                                                            <i class="fa-solid fa-id-card"></i>
                                                                        </div>
                                                                        <div class="col-11 pl-3">
                                                                            <span>TIN No</span>
                                                                            <div class="text-bold h6 ">
                                                                                <?php echo e($broker->brokerage_tin_no ?? ''); ?>

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
                                                                                <?php echo e($broker->brokerage_address ?? ''); ?>

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
                                                                            <div class="text-bold h6">
                                                                                <?php echo e($broker->contact_no ?? ''); ?>

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
                                                                            <div class="text-bold h6">
                                                                                <?php echo e($broker->email ?? ''); ?>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mx-1 mt-2 mb-2"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>

                                                        <div
                                                            class="row d-flex justify-content-around align-items-center mt-5">

                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="card bg-primary text-white text-center ">

                                                                    <div class="card-body text-center">
                                                                        <p class="text-bold display-4">
                                                                            <?php echo e($broker->agents->where('active', 1)->count()); ?>

                                                                        </p>
                                                                        <p class="h5 text-center">
                                                                            Agents
                                                                        </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="card bg-success text-white text-center ">

                                                                    <div class="card-body text-center">
                                                                        <p class="text-bold display-4">
                                                                            <?php echo e($broker->clients->count()); ?>

                                                                        </p>
                                                                        <p class="h5 text-center">
                                                                            Clients
                                                                        </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="card bg-info text-white text-center ">

                                                                    <div class="card-body text-center">
                                                                        <p class="text-bold display-4">
                                                                            <?php echo e($broker->hdmf_properties->count() + $broker->inhouse_properties->count()); ?>

                                                                        </p>
                                                                        <p class="h5 text-center">
                                                                            Properties
                                                                        </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        
                                        <div class="tab-pane" id="clients">
                                            <div class="container-fluid">
                                                <section id="clients">
                                                    <div class="d-flex justify-content-start align-items-center mb-3">
                                                        <span class="text-secondary text-xs">CLIENTS</span>
                                                        <div class="mx-1"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                    </div>
                                                    <?php if($broker->clients->count() > 0): ?>
                                                        <div class="row">
                                                            <?php $__currentLoopData = $broker->clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="col-12 mb-3">
                                                                    <a href="/clients/<?php echo e($client->id); ?>"
                                                                        class="text-dark">
                                                                        <div
                                                                            class="card border border-gray shadow h-100 my-auto">
                                                                            <div class="card-body">
                                                                                <div
                                                                                    class="d-flex justify-content-between ">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mr-4 my-auto align-items-center">
                                                                                            <img src="<?php echo e($client->image ? asset('/storage/' . $client->image) : asset('images/default.png')); ?>"
                                                                                                class="roundedExtraSmallImage mx-auto"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <div class="d-flex-column">
                                                                                            <div class="h4 mb-0 text-bold">
                                                                                                <?php echo e($client->first_name); ?>

                                                                                                <?php echo e($client->middle_name); ?>

                                                                                                <?php echo e($client->last_name); ?>

                                                                                                <?php echo e($client->suffix); ?>

                                                                                            </div>
                                                                                            <div class="h6 mb-0">
                                                                                                <?php echo e($client->email); ?>

                                                                                            </div>
                                                                                            <div class="h6">
                                                                                                <?php echo e($client->contact_no); ?>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="display-4 my-3 text-center">
                                                            No Clients Yet.
                                                        </div>
                                                    <?php endif; ?>
                                                </section>

                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="agents">
                                            <div class="container-fluid">
                                                <section id="agents">
                                                    <div class="d-flex justify-content-start align-items-center mb-3">
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
                                                    <?php if($broker->agents->where('active', 1)->count() > 0): ?>
                                                        <div class="row">
                                                            <?php $__currentLoopData = $broker->agents->where('active', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="col-12 mb-3">
                                                                    <a href="/agents/<?php echo e($agent->id); ?>"
                                                                        class="text-dark">
                                                                        <div
                                                                            class="card border border-gray shadow h-100 my-auto">

                                                                            <div class="card-body">
                                                                                <div
                                                                                    class="d-flex justify-content-between ">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mr-4 my-auto align-items-center">
                                                                                            <img src="<?php echo e($agent->image ? asset('/storage/' . $agent->image) : asset('images/default.png')); ?>"
                                                                                                class="roundedExtraSmallImage mx-auto"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <div class="d-flex-column">
                                                                                            <div class="h4 mb-0 text-bold">
                                                                                                <?php echo e($agent->name); ?>

                                                                                            </div>
                                                                                            <div class="h6 mb-0">
                                                                                                <?php echo e($agent->contact); ?>

                                                                                            </div>
                                                                                            <div class="h6">
                                                                                                <?php echo e($agent->email_address); ?>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="d-flex flex-column">
                                                                                        <a href="#"
                                                                                            data-toggle="modal"
                                                                                            data-target="#editAgent<?php echo e($agent->id); ?>"
                                                                                            class="btn btn-primary mb-1 ml-3">
                                                                                            <i
                                                                                                class="fa-solid fa-pencil"></i>
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            data-toggle="modal"
                                                                                            data-target="#confirmDeleteAgent<?php echo e($agent->id); ?>"
                                                                                            class="btn btn-danger mt-1 ml-3">
                                                                                            <i
                                                                                                class="fa-solid fa-trash"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="display-4 my-3 text-center">
                                                            No Agents Yet.
                                                        </div>
                                                    <?php endif; ?>
                                                </section>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="inhouse_properties">
                                            <div class="container-fluid">
                                                <section id="properties">
                                                    <div class="d-flex mb-3 align-items-center">

                                                        <span class="text-secondary text-xs">PROPERTIES</span>
                                                        <div class="mx-1 my-3"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <?php if($broker->inhouse_properties->count() > 0): ?>
                                                            <a class="btn btn-success ml-3" href="#"
                                                                data-toggle="modal" data-target="#inHouseCommissions">
                                                                <i class="fa-solid fa-money-bill pr-1"></i>
                                                                &nbsp;Commissions
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if($broker->inhouse_properties->count() > 0): ?>
                                                        <div class="row">
                                                            <?php $__currentLoopData = $inhouse_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="col-12 mb-3">
                                                                    <div class="text-dark">
                                                                        <div class="card rounded shadow">
                                                                            <div class="card-body">
                                                                                <div
                                                                                    class="d-md-flex justify-content-between">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="d-flex align-items-center justify-content-center">
                                                                                            <img src="<?php echo e($property->model ==
                                                                                            " Maria
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Delfina"
                                                                                                ? asset('/images/housemodels/maria_delfina.png')
                                                                                                : ($property->model == 'Maria Lorenza'
                                                                                                    ? asset('/images/housemodels/maria_lorenza.png')
                                                                                                    : asset('/images/housemodels/maria_marcela.png'))); ?>"
                                                                                                class="roundedSmallImage mr-4 border
                                                                                border-dark" />
                                                                                        </div>

                                                                                        <div
                                                                                            class="d-flex flex-column justify-content-between">
                                                                                            <div>
                                                                                                <h3 class="text-bold mb-0">
                                                                                                    <?php echo e($property->model ?? ''); ?>

                                                                                                </h3>

                                                                                                <div>
                                                                                                    <?php if($property->status == 4): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-primary">
                                                                                                            Downpayment
                                                                                                            Scheme
                                                                                                        </span>
                                                                                                    <?php elseif($property->status == 3): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-info">
                                                                                                            Balance
                                                                                                            Scheme
                                                                                                        </span>
                                                                                                    <?php elseif($property->status == 2): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-success">
                                                                                                            Fully
                                                                                                            Paid
                                                                                                        </span>
                                                                                                    <?php elseif($property->status == 1): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-warning">
                                                                                                            Cancelled
                                                                                                        </span>
                                                                                                    <?php else: ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-danger">
                                                                                                            Deleted
                                                                                                        </span>
                                                                                                    <?php endif; ?>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div>
                                                                                                <div>
                                                                                                    <i
                                                                                                        class="fa-solid fa-location-dot"></i>
                                                                                                    <span
                                                                                                        class="mb-0 h6 ml-2">
                                                                                                        Blk. No:
                                                                                                        <?php echo e($property->blk_no ?? ''); ?>

                                                                                                    </span>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <i
                                                                                                        class="fa-solid fa-house"></i>
                                                                                                    <span
                                                                                                        class="my-0 h6 ml-2">
                                                                                                        Lot No:
                                                                                                        <?php echo e($property->lot_no ?? ''); ?>

                                                                                                    </span>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <i
                                                                                                        class="fa-solid fa-id-badge"></i>
                                                                                                    <span
                                                                                                        class="mt-0 h6 ml-2">
                                                                                                        House Title:
                                                                                                        <?php echo e($property->title_no ?? ''); ?>

                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex justify-content-start align-items-start w-sm-100">
                                                                                        <a href="/properties/in-house/<?php echo e($property->id); ?>"
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
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        
                                                    <?php else: ?>
                                                        <div class="display-4 my-3 text-center">
                                                            No Properties Yet.
                                                        </div>
                                                    <?php endif; ?>
                                                </section>
                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="hdmf_properties">
                                            <div class="container-fluid">
                                                <section id="properties">
                                                    <div class="d-flex mb-3 align-items-center">

                                                        <span class="text-secondary text-xs">PROPERTIES</span>
                                                        <div class="mx-1 my-3"
                                                            style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                        </div>
                                                        <?php if($broker->hdmf_properties->count() > 0): ?>
                                                            <a class="btn btn-success ml-3" href="#"
                                                                data-toggle="modal" data-target="#hdmfCommissions">
                                                                <i class="fa-solid fa-money-bill pr-1"></i>
                                                                &nbsp;Commissions
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if($broker->hdmf_properties->count() > 0): ?>
                                                        <div class="row">
                                                            <?php $__currentLoopData = $hdmf_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="col-12 mb-3">
                                                                    <div class="text-dark">
                                                                        <div class="card rounded shadow">
                                                                            <div class="card-body">
                                                                                <div
                                                                                    class="d-md-flex justify-content-between">
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="d-flex align-items-center justify-content-center">
                                                                                            <img src="<?php echo e($property->model ==
                                                                                            " Maria
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Delfina"
                                                                                                ? asset('/images/housemodels/maria_delfina.png')
                                                                                                : ($property->model == 'Maria Lorenza'
                                                                                                    ? asset('/images/housemodels/maria_lorenza.png')
                                                                                                    : asset('/images/housemodels/maria_marcela.png'))); ?>"
                                                                                                class="roundedSmallImage mr-4 border
                                                                                border-dark" />
                                                                                        </div>

                                                                                        <div
                                                                                            class="d-flex flex-column justify-content-between">
                                                                                            <div>
                                                                                                <h3 class="text-bold mb-0">
                                                                                                    <?php echo e($property->model ?? ''); ?>

                                                                                                </h3>

                                                                                                <div>
                                                                                                    <?php if($property->status == 4): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-primary">
                                                                                                            Downpayment
                                                                                                            Scheme
                                                                                                        </span>
                                                                                                    <?php elseif($property->status == 3): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-info">
                                                                                                            Balance
                                                                                                            Scheme
                                                                                                        </span>
                                                                                                    <?php elseif($property->status == 2): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-success">
                                                                                                            Fully
                                                                                                            Paid
                                                                                                        </span>
                                                                                                    <?php elseif($property->status == 1): ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-warning">
                                                                                                            Cancelled
                                                                                                        </span>
                                                                                                    <?php else: ?>
                                                                                                        <span
                                                                                                            class="px-2 py-0 h5 rounded bg-danger">
                                                                                                            Deleted
                                                                                                        </span>
                                                                                                    <?php endif; ?>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div>
                                                                                                <div>
                                                                                                    <i
                                                                                                        class="fa-solid fa-location-dot"></i>
                                                                                                    <span
                                                                                                        class="mb-0 h6 ml-2">
                                                                                                        Blk. No:
                                                                                                        <?php echo e($property->blk_no ?? ''); ?>

                                                                                                    </span>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <i
                                                                                                        class="fa-solid fa-house"></i>
                                                                                                    <span
                                                                                                        class="my-0 h6 ml-2">
                                                                                                        Lot No:
                                                                                                        <?php echo e($property->lot_no ?? ''); ?>

                                                                                                    </span>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <i
                                                                                                        class="fa-solid fa-id-badge"></i>
                                                                                                    <span
                                                                                                        class="mt-0 h6 ml-2">
                                                                                                        House Title:
                                                                                                        <?php echo e($property->title_no ?? ''); ?>

                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div
                                                                                        class="d-flex justify-content-start align-items-start w-sm-100">
                                                                                        <a href="/properties/hmdf-loan/<?php echo e($property->id); ?>"
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
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        
                                                    <?php else: ?>
                                                        <div class="display-4 my-3 text-center">
                                                            No Properties Yet.
                                                        </div>
                                                    <?php endif; ?>
                                                </section>
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
                            <?php if($broker->active == 2): ?>
                                <a class="btn btn-warning w-100 mt-5 mb-2 text-black" href="#" data-toggle="modal"
                                    data-target="#confirmArchive">
                                    <i class="fa-solid fa-archive"></i>
                                    &nbsp;Archive Broker
                                </a>
                            <?php elseif($broker->active == 1): ?>
                                <a class="btn btn-warning w-100 mt-5 mb-2 text-black" href="#" data-toggle="modal"
                                    data-target="#confirmUnarchive">
                                    <i class="fa-solid fa-archive"></i>
                                    &nbsp;Unarchive Broker
                                </a>
                            <?php endif; ?>
                            <a class="btn btn-danger w-100 mt-2 text-white" href="#" data-toggle="modal"
                                data-target="#confirmDelete">
                                <i class="fa-solid fa-trash"></i>
                                &nbsp;Delete Broker
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="inHouseCommissions" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">In-House Property Commissions</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-lg ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="py-2 h6 text-bold text-center">#
                                        </th>
                                        <th scope="col" class="py-2 h6 text-bold ">
                                            Property</th>
                                        </th>
                                        <th scope="col" class="py-2 h6 text-bold ">
                                            Client</th>
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            Date Released
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            Status
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            (%)
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            Commission
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $inhouse_commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-bold">
                                            <td class="text-bold h6 text-center">
                                                <?php echo e($loop->iteration); ?>

                                            </td>
                                            <td class="text-bold h6">
                                                <?php echo e($commission->model ?? ''); ?>

                                            </td>
                                            <td class="text-bold h6">
                                                <?php echo e($commission->first_name ?? ''); ?>

                                                <?php echo e($commission->last_name ?? ''); ?>

                                            </td>
                                            <td class="h6">
                                                <?php if($commission->released == 0): ?>
                                                    <h6>---</h6>
                                                <?php else: ?>
                                                    <?php echo e(Carbon\Carbon::parse($commission->updated_at)->format('F d, Y')); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td class="h6">
                                                <?php if($commission->released == 0): ?>
                                                    <h6>--</h6>
                                                <?php else: ?>
                                                    <span class="badge badge-success">Released</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-bold h6">
                                                <?php echo e($commission->percent); ?>%
                                            </td>
                                            <td class="text-bold h6">
                                                &#8369;
                                                <?php echo e(number_format($commission->commission, 2) ?? ''); ?>

                                            </td>
                                            <td class="text-bold h6 text-center">
                                                <?php if($commission->released == 0): ?>
                                                    <form action="commission/<?php echo e($commission->id); ?>/release"
                                                        method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PATCH'); ?>
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            Release Payment
                                                        </button>
                                                    </form>
                                                    
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-bold bg-white">
                                        <td class="text-bold h6" colspan="6">
                                            Remaining
                                        </td>

                                        <td class="h6 text-bold">
                                            &#8369;
                                            <?php echo e(number_format($inhouse_remaining, 2) ?? ''); ?>

                                        </td>
                                    </tr>
                                    <tr class="text-bold bg-white">
                                        <td class="text-bold h6" colspan="6">
                                            Total
                                        </td>

                                        <td class="h6 text-bold">
                                            &#8369;
                                            <?php echo e(number_format($inhouse_total, 2) ?? ''); ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary ml-3" target="_blank"
                            href="commission/<?php echo e($broker->id); ?>/print-inhouse">
                            <i class="fa-solid fa-print"></i>
                            <span>&nbsp;Print</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hdmfCommissions" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">HDMF Loan Property Commissions</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-lg ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="py-2 h6 text-bold text-center">#
                                        </th>
                                        <th scope="col" class="py-2 h6 text-bold ">
                                            Property</th>
                                        </th>
                                        <th scope="col" class="py-2 h6 text-bold ">
                                            Client</th>
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            Date Released
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            Status
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            (%)
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">
                                            Commission
                                        </th>
                                        <th scope="col" class=" py-2 h6 text-bold">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $hdmf_commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-bold">
                                            <td class="text-bold h6 text-center">
                                                <?php echo e($loop->iteration); ?>

                                            </td>
                                            <td class="text-bold h6">
                                                <?php echo e($commission->model ?? ''); ?>

                                            </td>
                                            <td class="text-bold h6">
                                                <?php echo e($commission->first_name ?? ''); ?>

                                                <?php echo e($commission->last_name ?? ''); ?>

                                            </td>
                                            <td class="h6">
                                                <?php if($commission->released == 0): ?>
                                                    <h6>---</h6>
                                                <?php else: ?>
                                                    <?php echo e(Carbon\Carbon::parse($commission->updated_at)->format('F d, Y')); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td class="h6">
                                                <?php if($commission->released == 0): ?>
                                                    <h6>--</h6>
                                                <?php else: ?>
                                                    <span class="badge badge-success">Released</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-bold h6">
                                                <?php echo e($commission->percent); ?>%
                                            </td>
                                            <td class="text-bold h6">
                                                &#8369;
                                                <?php echo e(number_format($commission->commission, 2) ?? ''); ?>

                                            </td>
                                            <td class="text-bold h6 text-center">
                                                <?php if($commission->released == 0): ?>
                                                    <form action="commission/<?php echo e($commission->id); ?>/release"
                                                        method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PATCH'); ?>
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            Release Payment
                                                        </button>
                                                    </form>
                                                    
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-bold bg-white">
                                        <td class="text-bold h6" colspan="6">
                                            Remaining
                                        </td>

                                        <td class="h6 text-bold">
                                            &#8369;
                                            <?php echo e(number_format($hdmf_remaining, 2) ?? ''); ?>

                                        </td>
                                    </tr>
                                    <tr class="text-bold bg-white">
                                        <td class="text-bold h6" colspan="6">
                                            Total
                                        </td>

                                        <td class="h6 text-bold">
                                            &#8369;
                                            <?php echo e(number_format($hdmf_total, 2) ?? ''); ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary ml-3" target="_blank"
                            href="commission/<?php echo e($broker->id); ?>/print-hdmf">
                            <i class="fa-solid fa-print"></i>
                            <span>&nbsp;Print</span>
                        </a>
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
                    <form action="/brokers/<?php echo e($broker->id); ?>/archive" method="POST">
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
                    <form action="/brokers/<?php echo e($broker->id); ?>/unarchive" method="POST">
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
                    <form action="/brokers/<?php echo e($broker->id); ?>/delete" method="POST">
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
                        <?php echo csrf_field(); ?>

                        
                        <div class="col-md-12">
                            <div class="d-flex-column justify-content-center align-items-center">
                                <div class="text-center">
                                    <img class="mb-4 text-center roundedLargeImage" id="agentImagePreview"
                                        src="<?php echo e(asset('/images/default.png')); ?>" alt="Agent Image">
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
                                <input type="hidden" name="brokerID" value="<?php echo e($broker->id); ?>" />
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

    <?php $__currentLoopData = $broker->agents->where('active', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editAgent<?php echo e($agent->id); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">Edit Agent</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/agents/<?php echo e($agent->id); ?>/update" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>

                            
                            <div class="col-md-12">
                                <div class="d-flex-column justify-content-center align-items-center">
                                    <div class="text-center">
                                        <img class="mb-4 text-center roundedLargeImage" id="editAgentImagePreview"
                                            src="<?php echo e($agent->image ? asset('/storage/' . $agent->image) : asset('/images/default.png')); ?>"
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
                                                value="<?php echo e($agent->name); ?>" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contactNo" class="form-label">Contact
                                                No:</label>
                                            <input type="text" class="form-control border"
                                                value="<?php echo e($agent->contact); ?>" name="contactNo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email
                                                Address:</label>
                                            <input type="text" class="form-control border"
                                                value="<?php echo e($agent->email_address); ?>" name="email" required>
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

        <div class="modal fade" id="confirmDeleteAgent<?php echo e($agent->id); ?>" tabindex="-1" role="dialog">
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
                        <form action="/agents/<?php echo e($agent->id); ?>/delete" method="POST">
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

    <?php $__currentLoopData = $broker->clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="confirmRemoveClient<?php echo e($client->id); ?>" tabindex="-1" role="dialog">
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
                        <form action="/brokers/client/<?php echo e($client->id); ?>/remove" method="POST">
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

                    <form action="/brokers/<?php echo e($broker->id); ?>/update" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>

                        
                        <div class="col-md-12">
                            <div class="d-flex-column justify-content-center align-items-center">
                                <div class="text-center">
                                    <img class="mb-4 text-center roundedLargeImage" id="brokerImagePreview"
                                        src="<?php echo e($broker->image ? asset('/storage/' . $broker->image) : asset('/images/default.png')); ?>"
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
                                            value="<?php echo e($broker->name); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brokerAddress" class="form-label">Broker Address:</label>
                                        <input type="text" class="form-control border" name="brokerAddress"
                                            value="<?php echo e($broker->address); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex justify-content-start align-items-end mb-3 mt-3">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerPRCLicense" class="form-label">PRC
                                            License:</label>
                                        <input type="text" class="form-control border" id="brokerPRCLicense"
                                            value="<?php echo e($broker->prc_license); ?>" name="brokerPRCLicense" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerTinNo" class="form-label">TIN
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerTinNo"
                                            value="<?php echo e($broker->tin_no); ?>" name="brokerTinNo" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerContactNo" class="form-label">Contact
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerContactNo"
                                            value="<?php echo e($broker->contact_no); ?>" name="brokerContactNo" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="brokerEmail" class="form-label">Email
                                            Address:</label>
                                        <input type="text" class="form-control border" id="brokerEmail"
                                            value="<?php echo e($broker->email); ?>" name="brokerEmail" required>
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
                                            value="<?php echo e($broker->brokerage_firm); ?>" name="brokerageFirm" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brokerageAddress" class="form-label">Brokerage
                                            Address:</label>
                                        <input type="text" class="form-control border" id="brokerageAddress"
                                            value="<?php echo e($broker->brokerage_address); ?>" name="brokerageAddress" required>
                                    </div>
                                </div>
                            </div>

                            <div class="d-md-flex justify-content-between align-items-end mt-3">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brokerageTinNo" class="form-label">TIN
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerageTinNo"
                                            value="<?php echo e($broker->brokerage_tin_no); ?>" name="brokerageTinNo" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brokerageContactNo" class="form-label">Contact
                                            No:</label>
                                        <input type="text" class="form-control border" id="brokerageContactNo"
                                            value="<?php echo e($broker->brokerage_contact_no); ?>" name="brokerageContactNo"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brokerageEmail" class="form-label">Email
                                            Address:</label>
                                        <input type="text" class="form-control border" id="brokerageEmail"
                                            value="<?php echo e($broker->brokerage_email); ?>" name="brokerageEmail" required>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/brokers/show.blade.php ENDPATH**/ ?>