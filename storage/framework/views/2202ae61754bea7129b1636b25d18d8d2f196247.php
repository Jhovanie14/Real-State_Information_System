<!DOCTYPE html>
<html>

<head>
    <title>Maria Homes | REIS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Infinit Real Estate Information System">
    <meta name="author" content="Infinit Solutions">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet"
        href="<?php echo e(asset('bootstrap/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/admin/plugins/jqvmap/jqvmap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('bootstrap/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/admin/dist/css/adminlte.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('bootstrap/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/admin/plugins/daterangepicker/daterangepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/admin/plugins/summernote/summernote-bs4.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('bootstrap/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('bootstrap/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>


<body onload="window.print();">
    
    <div class="container">
        <div class="wrapper">
            <div class="d-flex justify-content-start align-items-center">
                <img class="roundedSmallImage mr-5 border" src="<?php echo e(asset('/storage/icons/mariahomes.png')); ?>"
                    alt="">
                <div>

                    <h5 class="h1">Maria Homes Development Corporation</h5>
                    <h5 class="h5 pl-1">Client Information Sheet</h5>
                    <h5 class="pl-1"><?php echo e(Carbon\Carbon::now()->format('F d, Y')); ?></h5>
                </div>
                <div class="text-center">
                    
                </div>
            </div>

            <section class="personal_info">

                <h5 class="display-5 text-center">CLIENT INFORMATION</h5>
                <div class="d-flex justify-content-start align-items-center mb-2">
                    <span class="text-secondary text-xs">PERSONAL INFORMATION</span>
                    <div class="mx-1" style="flex-grow: 1; height: 1px; background-color:lightgray;">
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Full Name:</label>
                        <label class="my-0">
                            <?php echo e($client->first_name ?? null); ?>

                            <?php echo e($client->middle_name ?? null); ?>

                            <?php echo e($client->last_name ?? null); ?>

                            <?php echo e($client->suffix ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Facebook:</label>
                        <label class="my-0">
                            <?php echo e($client->facebook ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Gender:</label>
                        <label class="my-0">
                            <?php echo e($client->gender ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Messenger:</label>
                        <label class="my-0">
                            <?php echo e($client->messenger ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Date of Birth:</label>
                        <label class="my-0">
                            <?php echo e(Carbon\Carbon::parse($client->date_of_birth)->format('F d, Y') ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Viber:</label>
                        <label class="my-0">
                            <?php echo e($client->viber ?? 'None'); ?>

                        </label>
                    </div>
                </div>


                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Place of Birth:</label>
                        <label class="my-0">
                            <?php echo e($client->place_of_birth ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">PAGIBIG:</label>
                        <label class="my-0">
                            <?php echo e($client->pagibig_no ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Marital Status:</label>
                        <label class="my-0">
                            <?php echo e($client->marital_status ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">SSS No:</label>
                        <label class="my-0">
                            <?php echo e($client->sss_no ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Nationality:</label>
                        <label class="my-0">
                            <?php echo e($client->nationality ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">TIN No:</label>
                        <label class="my-0">
                            <?php echo e($client->tin_no ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Religion:</label>
                        <label class="my-0">
                            <?php echo e($client->religion ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Passport No:</label>
                        <label class="my-0">
                            <?php echo e($client->passport_no ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Address:</label>
                        <label class="my-0">
                            <?php echo e($client->present_address ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Passport Validity:</label>
                        <label class="my-0">
                            <?php echo e($client->passport_validity ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Contact:</label>
                        <label class="my-0">
                            <?php echo e($client->contact_no ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Passport Expiration:</label>
                        <label class="my-0">
                            <?php echo e($client->passport_expiration_date ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Email:</label>
                        <label class="my-0">
                            <?php echo e($client->email ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Years of Stay:</label>
                        <label class="my-0">
                            <?php echo e($client->years_of_stay . ' years' ?? null); ?>

                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-start align-items-start ">
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Residential Status:</label>
                        <label class="my-0">
                            <?php echo e($client->residence_status ?? null); ?>

                        </label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <label class="control-label mr-5 my-0">Monthly Rental:</label>
                        <label class="my-0">
                            <?php echo e(number_format($client->monthly_rental, 2) ?? 0.0); ?>

                        </label>
                    </div>
                </div>
            </section>

            <section class="spouse-information">
                
                <?php if($client->spouse): ?>
                    <div class="d-flex justify-content-start align-items-center mt-4 mb-2">
                        <span class="text-secondary text-xs">SPOUSE INFORMATION</span>
                        <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Full Name:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->first_name ?? null); ?>

                                <?php echo e($client->spouse->middle_name ?? null); ?>

                                <?php echo e($client->spouse->last_name ?? null); ?>

                                <?php echo e($client->spouse->suffix ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Occupation:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->occupation ?? null); ?>

                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">TIN No:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->tin_no ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Department:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->department ?? null); ?>

                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">HDMF No:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->hdmf_no ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Employment Length:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->length_of_employment ?? null); ?>

                            </label>
                        </div>
                    </div>


                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">SSS No:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->sss_no ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Gross Pay:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->gross_pay ?? null); ?>

                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">GSIS No:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->gsis_no ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Other Income:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->other_income ?? 'None'); ?>

                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Passport No:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->passport_no ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Employer Name:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->employer_name ?? null); ?>

                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Facebook Account:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->facebook ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Business Address:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->employer_business_address ?? null); ?>

                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start align-items-start ">
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Contact:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->contact_no ?? null); ?>

                            </label>
                        </div>
                        <div class="col d-flex justify-content-between">
                            <label class="control-label mr-5 my-0">Email:</label>
                            <label class="my-0">
                                <?php echo e($client->spouse->employer_email ?? null); ?>

                            </label>
                        </div>
                    </div>
                <?php endif; ?>
            </section>

            <section class="employments-information">
                <?php if(!$client->employments->isEmpty()): ?>
                    <div class="d-flex justify-content-start align-items-center mt-4">
                        <span class="text-secondary text-xs">EMPLOYMENT(s)</span>
                        <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                        </div>
                    </div>

                    <?php $__currentLoopData = $client->employments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center mt-2">
                            <p class="display-5 text-bold">
                                <?php echo e($employment->occupation ?? null); ?>

                            </p>
                        </div>
                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Position:</label>
                                <label class="my-0">
                                    <?php echo e($employment->position ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Employer Name:</label>
                                <label class="my-0">
                                    <?php echo e($employment->employer_name ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Length of Employment:</label>
                                <label class="my-0">
                                    <?php echo e($employment->length_of_employment ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Employer Business Address:</label>
                                <label class="my-0">
                                    <?php echo e($employment->employer_business_address ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Monthly Gross Pay:</label>
                                <label class="my-0">
                                    <?php echo e($employment->monthly_gross_pay ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Employer Contact No:</label>
                                <label class="my-0">
                                    <?php echo e($employment->contact_no ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start mb-4">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Other Income:</label>
                                <label class="my-0">
                                    <?php echo e($employment->other_income ?? 'None'); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Employer Email:</label>
                                <label class="my-0">
                                    <?php echo e($employment->employer_email ?? null); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </section>

            <section class="self-employments-information">
                <?php if(!$client->selfEmployments->isEmpty()): ?>
                    <div class="d-flex justify-content-start align-items-center mt-4">
                        <span class="text-secondary text-xs">SELF EMPLOYMENT(s)</span>
                        <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                        </div>
                    </div>

                    <?php $__currentLoopData = $client->selfEmployments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selfEmployment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center mt-2">
                            <p class="display-5 text-bold">
                                <?php echo e($employment->business_name ?? null); ?>

                            </p>
                        </div>
                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Nature of Business:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->nature_of_business ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Contact No:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->contact_no ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Position:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->position ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Email:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->business_email ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Years of Operation:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->years_of_operation ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">TIN No:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->tin_no ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Business Address:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->business_address ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">SSS No:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->sss_no ?? null); ?>

                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Monthly Gross Pay:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->monthly_gross_pay ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">PAGIBIG No:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->pagibig_no ?? null); ?>

                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Other Income:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->other_income ?? 'None'); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Employer Email:</label>
                                <label class="my-0">
                                    <?php echo e($selfEmployment->employer_email ?? null); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </section>

            <section class="dependents-information">
                <?php if(!$client->dependents->isEmpty()): ?>
                    <div class="d-flex justify-content-start align-items-center mt-4">
                        <span class="text-secondary text-xs">DEPENDENT(s)</span>
                        <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                        </div>
                    </div>

                    <?php $__currentLoopData = $client->dependents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Full Name:</label>
                                <label class="my-0">
                                    <?php echo e($dependent->name ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Age:</label>
                                <label class="my-0">
                                    <?php echo e($dependent->age ?? null); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </section>

            <section class="nrcr-information">
                <?php if(!$client->nonRelativeCharacterReferences->isEmpty()): ?>
                    <div class="d-flex justify-content-start align-items-center mt-4">
                        <span class="text-secondary text-xs">Non-Relative Character Reference(s)</span>
                        <div class="mx-1" style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                        </div>
                    </div>

                    <?php $__currentLoopData = $client->nonRelativeCharacterReferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nrcr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex justify-content-start align-items-start ">
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Full Name:</label>
                                <label class="my-0">
                                    <?php echo e($nrcr->name ?? null); ?>

                                </label>
                            </div>
                            <div class="col d-flex justify-content-between">
                                <label class="control-label mr-5 my-0">Contact:</label>
                                <label class="my-0">
                                    <?php echo e($nrcr->contact_no ?? null); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </section>


        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/clients/print.blade.php ENDPATH**/ ?>