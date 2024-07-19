
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-wrapper">
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

                                        
                                        <div class="active tab-pane" id="propertyInfo">
                                            <div class="row">
                                                <div class="col-md-5 px-3">
                                                    <div class="d-flex-column text-md-left text-center">
                                                        <div class="text-center">
                                                            <img src="<?php echo e($property->model == 'Maria Delfina'
                                                                ? asset('/images/housemodels/delfina/maria_delfina.png')
                                                                : ($property->model == 'Maria Loreza'
                                                                    ? asset('/images/housemodels/lorenza/maria_lorenza.png')
                                                                    : asset('/images/housemodels/marcela/maria_marcela.png'))); ?>"
                                                                alt="House Model"
                                                                class="rounded shadow shadow-lg mr-3 img-fluid w-100">
                                                        </div>
                                                        <div class="d-flex justify-content-start align-items-center mt-4">
                                                            <div class="mx-1"
                                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                            </div>
                                                        </div>
                                                        <div class="text-center mt-1">
                                                            <div class="display-4"> <?php echo e($property->model); ?></div>

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
                                                                <?php echo e($property->blk_no ?? ''); ?>

                                                            </div>
                                                            <div class="h4 ">
                                                                <i class="fa-solid fa-house">&nbsp;</i>
                                                                <span class="text-bold">Lot No: </span>
                                                                <?php echo e($property->lot_no ?? ''); ?>

                                                            </div>
                                                            <div class="h4 ">
                                                                <i class="fa-solid fa-layer-group">&nbsp;</i>
                                                                <span class="text-bold">Floor Area: </span>
                                                                <?php echo e($property->floor_area ?? ''); ?>m&#178;
                                                            </div>
                                                            <div class="h4 mb-5">
                                                                <i class="fa-solid fa-id-badge px-1">&nbsp;</i>
                                                                <span class="text-bold">House Title: </span>
                                                                <?php echo e($property->title_no ?? ''); ?>

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



                                                        <?php if($property->active != 0): ?>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <a href="#" class="btn btn-success ml-3"
                                                                    data-target="#addPaymentModal" data-toggle="modal">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                    <span>Add Payment</span>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>

                                                    </div>

                                                    <div class="col-12 mb-2 d-flex flex-column">
                                                        <span class="display-4 text-bold">&#8369;
                                                            <?php echo e(number_format($property->remaining_balance, 2) ?? '0'); ?></span>
                                                        <span class="text-secondary text-s mb-0">REMAINING BALANCE</span>
                                                    </div>
                                                    <div class="mx-1 my-2"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>

                                                    <div class="col-12 d-flex flex-column">
                                                        <label class="control-label text-lg">Next Payment:&nbsp;</label>
                                                        <div>

                                                            <span class="px-2 py-1 h5 rounded bg-success">
                                                                <?php echo e(\Carbon\Carbon::parse(
                                                                    $property->inHousePaymentSchedules()->latest()->where('paid', 0)->value('payment_date'),
                                                                )->format('F
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            d, Y')); ?>

                                                            </span>
                                                        </div>
                                                        <label class="control-label text-lg mt-2">Status:&nbsp;</label>
                                                        <div>
                                                            <?php if($property->status == 4): ?>
                                                                <span class="px-3 py-1 h5 rounded bg-primary">
                                                                    DOWNPAYMENT SCHEME
                                                                </span>
                                                            <?php elseif($property->status == 3): ?>
                                                                <span class="px-3 py-1 h5 rounded bg-info">
                                                                    BALANCE SCHEME
                                                                </span>
                                                            <?php elseif($property->status == 2): ?>
                                                                <span class="px-3 py-1 h5 rounded bg-success">
                                                                    FULLY PAID
                                                                </span>
                                                            <?php elseif($property->status == 0): ?>
                                                                <span class="px-3 py-1 h5 rounded bg-warning">
                                                                    PROPERTY CANCELLED
                                                                </span>
                                                            <?php elseif($property->status == -1): ?>
                                                                <span class="px-3 py-1 h5 rounded bg-danger">
                                                                    PROPERTY DELETED
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>

                                                        
                                                    </div>

                                                    <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                        <div class="col-md-4 mt-2">
                                                            <label for="processingFee"
                                                                class="control-label text-lg">Processing
                                                                Fee:</label>
                                                            <input type="text" disabled name="processingFee"
                                                                class="form-control form-control-lg text-lg"
                                                                value="<?php echo e($property->processing_fee ?? ''); ?>">
                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <label for="cornerLotFee" class="control-label text-lg">Corner
                                                                Lot
                                                                Fee:</label>
                                                            <input type="text" disabled name="cornerLotFee"
                                                                class="form-control form-control-lg text-lg"
                                                                value="<?php echo e($property->corner_lot_fee ?? ''); ?>">
                                                        </div>
                                                        <div class="col-md-4 mt-2">
                                                            <label for="commercialLotFee"
                                                                class="control-label text-lg">Commercial
                                                                Lot
                                                                Fee:</label>
                                                            <input type="text" disabled name="commercialLotFee"
                                                                class="form-control form-control-lg text-lg"
                                                                value="<?php echo e($property->commercial_lot_fee ?? ''); ?>">
                                                        </div>
                                                    </div>

                                                    <div class="d-md-flex justify-content-between align-items-end mt-2">
                                                        <div class="col-md-6 mt-2">
                                                            <label for="discount"
                                                                class="control-label text-lg">Reservation Fee: </label>
                                                            <input type="text" disabled name="discount"
                                                                class="form-control form-control-lg text-lg"
                                                                value="<?php echo e($property->reservation_fee ?? '00.00'); ?>">
                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            <label for="discount" class="control-label text-lg">Discount:
                                                            </label>
                                                            <input type="text" disabled name="discount"
                                                                class="form-control form-control-lg text-lg"
                                                                value="<?php echo e($property->discount ?? '00.00'); ?>">
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
                                                            <a href="/clients/<?php echo e($property->client->id); ?>"
                                                                class="text-dark">
                                                                <div class="card border border-gray shadow h-100 my-auto">
                                                                    <div class="card-body">
                                                                        <div class="d-flex justify-content-start ">
                                                                            <div class="mr-4 my-auto align-items-center">
                                                                                <img src="<?php echo e($property->client->image ? asset('/storage/' . $property->client->image) : asset('images/default.png')); ?>"
                                                                                    class="roundedExtraSmallImage mx-auto"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="d-flex-column">
                                                                                <div class="h4 mb-0">

                                                                                    <?php echo e($property->client->first_name); ?>

                                                                                    <?php echo e($property->client->middle_name); ?>

                                                                                    <?php echo e($property->client->last_name); ?>

                                                                                    <?php echo e($property->client->suffix); ?>

                                                                                </div>
                                                                                <div class="h6 mb-0">
                                                                                    <?php echo e($property->client->email); ?>

                                                                                </div>
                                                                                <div class="h6">
                                                                                    <?php echo e($property->client->contact_no); ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php if($property->client->agent->broker): ?>
                                                        <div
                                                            class="d-flex justify-content-start align-items-center mt-3 mb-3">
                                                            <span class="text-secondary text-xs">BROKER</span>
                                                            <div class="mx-1"
                                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                            </div>
                                                        </div>
                                                        <div class="d-lg-flex justify-content-start">
                                                            <div class="col-lg-12">
                                                                <a href="/brokers/<?php echo e($property->client->agent->broker->id); ?>"
                                                                    class="text-dark">
                                                                    <div
                                                                        class="card border border-gray shadow h-100 my-auto">
                                                                        <div class="card-body">
                                                                            <div class="d-flex justify-content-start">
                                                                                <div
                                                                                    class="mr-4 my-auto align-items-center">
                                                                                    <img src="<?php echo e($property->client->agent->broker->image ? asset('/storage/' . $property->client->agent->broker->image) : asset('images/default.png')); ?>"
                                                                                        class="roundedExtraSmallImage mx-auto"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="d-flex-column">
                                                                                    <div class="h4 mb-0">
                                                                                        <?php echo e($property->client->agent->broker->name); ?>

                                                                                    </div>
                                                                                    <div class="h6 mb-0">
                                                                                        <?php echo e($property->client->agent->broker->email); ?>

                                                                                    </div>
                                                                                    <div class="h6">
                                                                                        <?php echo e($property->client->agent->broker->contact_no); ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mx-1 my-3"
                                                style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center mx-3">
                                                <a class="btn btn-primary ml-3 px-3"
                                                    href="/properties/<?php echo e($property->id); ?>/print">
                                                    <i class="fa-solid fa-print"></i>
                                                    <span>&nbsp;Print</span>
                                                </a>


                                            </div>
                                            

                                            
                                        </div>

                                        
                                        <div class="tab-pane" id="paymentSchedules">
                                            <div class="row px-3">
                                                <div class="col-12">
                                                    <p class="display-4">Payment Schedules</p>

                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered table-lg ">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col"
                                                                        class="py-2 h6 text-bold text-center">#
                                                                    </th>
                                                                    <th scope="col" class="py-2 h6 text-bold ">
                                                                        Payment Date</th>
                                                                    </th>
                                                                    <th scope="col" class=" py-2 h6 text-bold">Remaining Payment
                                                                    </th>
                                                                    <th scope="col" class=" py-2 h6 text-bold">Amount
                                                                        To Pay
                                                                    </th>
                                                                    <th scope="col" class=" py-2 h6 text-bold">
                                                                        Payment For
                                                                    </th>
                                                                    <th scope="col"
                                                                        class=" py-2 h6 text-bold  text-center">
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
                                                                            <?php echo e(Carbon\Carbon::parse($payment->payment_date)->format('F
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        d, Y') ??
                                                                                ''); ?>

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
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center mx-3">
                                                <a class="btn btn-primary ml-3 px-3"
                                                    href="/properties/in-house/<?php echo e($property->id); ?>/print-payment-schedule">
                                                    <i class="fa-solid fa-print"></i>
                                                    <span>&nbsp;Print</span>
                                                </a>

                                            </div>
                                        </div>

                                        
                                        <div class="tab-pane" id="paymentHistory">
                                            <div class="row px-3">

                                                <div class="col-12">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="display-4 text-center">Payment History</p>
                                                        <div class="d-flex justify-content-end align-items-center">

                                                            <?php if($property->active != 0): ?>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <a href="#" class="btn btn-success"
                                                                    data-target="#addPaymentModal" data-toggle="modal">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                    <span>Add Payment</span>
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>

                                                        </div>

                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered table-lg">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col"
                                                                        class="py-2 h6 text-bold text-center">#
                                                                    </th>
                                                                    <th scope="col" class=" py-2 h6 text-bold">Amount
                                                                        Paid
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                        Payment For
                                                                    </th>
                                                                    
                                                                    <th scope="col"
                                                                        class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                        Balance
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="d-none d-sm-table-cell py-2 h6 text-bold">
                                                                        Received By
                                                                    </th>
                                                                    <th scope="col"
                                                                        class="py-2 h6 text-bold text-right">
                                                                        Transaction
                                                                        Date</th>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $__currentLoopData = $property->inHousePayments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr class="text-bold">
                                                                        <td class="text-bold h6 text-center">
                                                                            <?php echo e($loop->iteration); ?>

                                                                        </td>
                                                                        <td class="text-bold h6">
                                                                            <?php echo e(number_format($payment->payment_amount, 2) ?? ''); ?>

                                                                        </td>

                                                                        <td class="text-bold h6">
                                                                            <?php echo e($payment->payment_for ?? ''); ?>

                                                                        </td>
                                                                        <td class="text-bold h6">
                                                                            &#8369;
                                                                            <?php echo e(number_format($payment->total_balance, 2) ?? ''); ?>

                                                                        </td>
                                                                        <td class="d-none d-sm-table-cell h6">
                                                                            <?php echo e($employee->emp_first_name); ?>

                                                                            <?php echo e($employee->emp_last_name); ?>

                                                                        </td>
                                                                        <td class="h6">
                                                                            <?php echo e(Carbon\Carbon::parse($payment->created_at)->format('F d, Y') ?? ''); ?>

                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-end align-items-center mx-3">
                                                <a class="btn btn-primary ml-3 px-3"
                                                    href="/properties/<?php echo e($property->id); ?>/print">
                                                    <i class="fa-solid fa-print"></i>
                                                    <span>&nbsp;Print</span>
                                                </a>

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
                <form action="/properties/in-house/<?php echo e($property->id); ?>/payment" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="paymentAmount" class="form-label text-lg">Amount:</label>
                                    <input type="text" id="amountTextInput"
                                        class="form-control form-control-lg border border-success text-lg text-bold"
                                        name="paymentAmount" autofocus required>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="paymentAmount" class="form-label text-lg">Notes:</label>
                                    <textarea class="form-control form-control-lg border border-success" name="paymentNotes" rows="5"></textarea>
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
        const myModal = document.getElementById('addPaymentModal')
        const myInput = document.getElementById('amountTextInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/properties/in-house/show.blade.php ENDPATH**/ ?>