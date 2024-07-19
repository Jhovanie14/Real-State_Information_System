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




<body>
    
    <div class="container">
        <div class="d-flex justify-content-start align-items-center">
            <img class="roundedSmallImage mr-5 border" src="<?php echo e(asset('/storage/icons/mariahomes.png')); ?>"
                alt="">
            <div class="">

                <h5 class="h1">Maria Homes Development Corporation</h5>
                <h5 class="h4 pl-1 pb-0 mb-0">Property Payment Schedule</h5>
                <h5 class="h6 pl-1">HDMF Loan</h5>
                <h5 class="pl-1"><?php echo e(Carbon\Carbon::now()->format('F d, Y')); ?></h5>
            </div>
        </div>

        <div class="mb-2">
            <h5 class="display-5 text-center">PROPERTY INFORMATION</h5>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Model:</label>
                    <label class="my-0">
                        <?php echo e($property->model ?? null); ?>

                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Owner:</label>
                    <label class="my-0">
                        <?php echo e($property->client->first_name ?? null); ?>

                        <?php echo e($property->client->last_name ?? null); ?>

                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Blk. No:</label>
                    <label class="my-0">
                        Blk <?php echo e($property->blk_no ?? null); ?>

                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Address:</label>
                    <label class="my-0">
                        <?php echo e($property->client->present_address ?? null); ?>

                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Lot No:</label>
                    <label class="my-0">
                        Lot <?php echo e($property->lot_no ?? null); ?>

                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Contact No:</label>
                    <label class="my-0">
                        <?php echo e($property->contact_no ?? 'None'); ?>

                    </label>
                </div>
            </div>


            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Floor Area:</label>
                    <label class="my-0">
                        <?php echo e($property->floor_area ?? null); ?>m&#178;
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Email:</label>
                    <label class="my-0">
                        <?php echo e($property->client->email ?? null); ?>

                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">House Title:</label>
                    <label class="my-0">
                        <?php echo e($property->title_no ?? null); ?>

                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Date of Birth:</label>
                    <label class="my-0">
                        <?php echo e(Carbon\Carbon::parse($property->client->date_of_birth)->format('F d, Y') ?? ''); ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="mx-1 mb-3" style="flex-grow: 1; height: 1px; background-color:lightgray;">
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-lg ">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="py-2 h6 text-bold text-center">#
                        </th>
                        <th scope="col" class="py-2 h6 text-bold ">
                            Payment Date</th>
                        </th>
                        <th scope="col" class=" py-2 h6 text-bold">
                            Remaining Payment
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
                    <?php $__currentLoopData = $property->inHousePaymentSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-bold">
                            <td class="text-bold h6 text-center">
                                <?php echo e($loop->iteration); ?>

                            </td>
                            <td class="h6">
                                <?php echo e(Carbon\Carbon::parse($payment->payment_date)->format('F d, Y') ?? ''); ?>

                            </td>
                            <td class="text-bold h6">
                                &#8369;
                                <?php echo e(number_format($payment->payment_remaining, 2) ?? ''); ?>

                            </td>
                            <td class="text-bold h6">
                                &#8369;
                                <?php echo e(number_format($payment->payment_amount, 2) ?? ''); ?>

                            </td>
                            <td class="text-bold h6">
                                <?php echo e($payment->payment_for ?? ''); ?>

                            </td>
                            <td class=" h6 text-bold text-center">
                                <?php echo e($payment->paid === 0 ? 'Not Paid' : 'Paid'); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <tr class="my-5 py-5">
                        <td colspan="6" class="text-bold h6 text-center my-5">
                            &nbsp;
                        </td>
                    </tr>
                    <tr class="text-bold mt-4">
                        <td class="text-bold h6 text-center" colspan="3">

                        </td>
                        <td class="text-bold h6" colspan="2">
                            Total Paid Amount
                        </td>
                        <td class="text-bold h6">
                            &#8369;
                            <?php echo e(number_format($total - $remaining, 2) ?? ''); ?>

                        </td>
                    </tr>
                    <tr class="text-bold mt-4">
                        <td class="text-bold h6 text-center" colspan="3">

                        </td>
                        <td class="text-bold h6" colspan="2">
                            Remaining Balance
                        </td>
                        <td class="text-bold h6">
                            &#8369;
                            <?php echo e(number_format($remaining, 2) ?? ''); ?>

                        </td>
                    </tr>
                    <tr class="text-bold mt-4">
                        <td class="text-bold h6 text-center" colspan="3">

                        </td>
                        <td class="text-bold h6" colspan="2">
                            Total
                        </td>
                        <td class="text-bold h6">
                            &#8369;
                            <?php echo e(number_format($total, 2) ?? ''); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/properties/in-house/print.blade.php ENDPATH**/ ?>