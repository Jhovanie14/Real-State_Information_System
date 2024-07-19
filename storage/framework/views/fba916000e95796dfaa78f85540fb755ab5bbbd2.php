
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 text-dark">Reservations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                            <li class="breadcrumb-item">Reservations</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="col-xl-4 col-lg-6 col-md-6 mr-2">
                                        <form action="/reservations/in-house" method="GET">
                                            <div class="input-group">
                                                <input type="text" name="search" class="form-control border border-gray"
                                                    placeholder="Search by client..." type="search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary border-secondary" type="submit"
                                                        id="searchUser">
                                                        <span class="fa-solid fa-search"></span>
                                                        <i class="d-none d-sm-inline">&nbsp;Search</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle "
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort By: <?php echo e($sort ? $sort : 'All'); ?>

                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/reservations">All</a>
                                                <a class="dropdown-item" href="/reservations/active">Active</a>
                                                <a class="dropdown-item" href="/reservations/finished">Finished</a>
                                                <a class="dropdown-item" href="/reservations/cancelled">Cancelled</a>
                                                <a class="dropdown-item" href="/reservations/deleted">Deleted</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 mb-2">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <img src="<?php echo e($reservation->model == 'Maria Delfina'
                                                    ? asset('/images/housemodels/delfina/maria_delfina.png')
                                                    : ($reservation->model == 'Maria Lorenza'
                                                        ? asset('/images/housemodels/lorenza/maria_lorenza.png')
                                                        : asset('/images/housemodels/marcela/maria_marcela.png'))); ?>"
                                                    class="roundedSmallImage mr-4 border border-dark" />
                                            </div>

                                            <div class="d-flex flex-column justify-content-between">
                                                <div>
                                                    <h3 class="text-bold mb-0">
                                                        <?php echo e($reservations ? $reservation->model : ''); ?>

                                                    </h3>

                                                    <div>
                                                        <?php if($reservation->status == 3): ?>
                                                            <span class="px-2 py-0 h5 rounded bg-success">
                                                                Active
                                                            </span>
                                                        <?php elseif($reservation->status == 2): ?>
                                                            <span class="px-2 py-0 h5 rounded bg-purple">
                                                                Finished
                                                            </span>
                                                        <?php elseif($reservation->status == 1): ?>
                                                            <span class="px-2 py-0 h5 rounded bg-warning">
                                                                Cancelled
                                                            </span>
                                                        <?php else: ?>
                                                            <span class="px-2 py-0 h5 rounded bg-danger">
                                                                Deleted
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div>
                                                        <i class="fa-solid fa-location-dot"></i>
                                                        <span class="mb-0 h6 ml-2">
                                                            Blk. No: <?php echo e($reservations ? $reservation->blk_no : ''); ?>

                                                        </span>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-location-dot"></i>
                                                        <span class="my-0 h6 ml-2">
                                                            Lot No: <?php echo e($reservations ? $reservation->lot_no : ''); ?>

                                                        </span>
                                                    </div>
                                                    <div>
                                                        <i class="fa-solid fa-id-badge"></i>
                                                        <span class="mt-0 h6 ml-2">
                                                            House Title:
                                                            <?php echo e($reservations ? $reservation->title_no : ''); ?>

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex flex-md-column justify-content-center align-items-center py-3"
                                            style="width: 20%;">
                                            <a href="/reservations/in-house/<?php echo e($reservation->id); ?>"
                                                class="btn btn-block btn-primary">
                                                <i class="fa-solid fa-eye"></i>
                                                <span class="d-none d-md-inline">&nbsp;View</span>
                                            </a>

                                            <?php if($reservation->status == 3): ?>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#confirmCancel<?php echo e($reservation->id); ?>"
                                                    class="btn btn-block btn-warning ">
                                                    <i class="fa-solid fa-x"></i>
                                                    <span class="d-none d-md-inline">&nbsp;Cancel</span>
                                                </a>
                                            <?php elseif($reservation->status == 1): ?>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#confirmRestore<?php echo e($reservation->id); ?>"
                                                    class="btn btn-block btn-success ">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                    <span class="d-none d-md-inline">&nbsp;Restore</span>
                                                </a>
                                            <?php else: ?>
                                                <a href="#" class="btn btn-block btn-dark disabled ">
                                                    <i class="fa-solid fa-archive"></i>
                                                    <span class="d-none d-md-inline">&nbsp;Cancel</span>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($reservation->status == 3 || $reservation->status == 1): ?>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#confirmDelete<?php echo e($reservation->id); ?>"
                                                    class="btn btn-block btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span class="d-none d-md-inline">&nbsp;Delete</span>
                                                </a>
                                            <?php else: ?>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#confirmDelete<?php echo e($reservation->id); ?>"
                                                    class="btn btn-block btn-dark disabled">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span class="d-none d-md-inline">&nbsp;Delete</span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="d-md-flex">

                                        <div class="col-md-6">

                                            <div class="d-flex justify-content-start align-items-center my-3">
                                                <span class="text-secondary text-xs">OWNER</span>
                                                <div class="mx-1"
                                                    style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                </div>
                                            </div>
                                            <div class="d-lg-flex justify-content-start">
                                                <div class="col-lg-12">
                                                    <a href="/clients/<?php echo e($reservation->client->id); ?>" class="text-dark">
                                                        <div class="card border border-gray shadow h-100 my-auto"
                                                            style="height: 100%;">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-start ">
                                                                    <div class="mr-4 my-auto align-items-center">
                                                                        <img src="<?php echo e($reservation->client->image ? asset('/storage/' . $reservation->client->image) : asset('/images/default.png')); ?>"
                                                                            class="roundedExtraSmallImage mx-auto"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="d-flex-column">
                                                                        <div class="h4 mb-0 text-bold">
                                                                            <?php echo e($reservation->client->first_name); ?>

                                                                            <?php echo e($reservation->client->middle_name); ?>

                                                                            <?php echo e($reservation->client->last_name); ?>

                                                                            <?php echo e($reservation->client->suffix); ?>

                                                                        </div>
                                                                        <div class="h6 mb-0">
                                                                            <?php echo e($reservation->client->email); ?>

                                                                        </div>
                                                                        <div class="h6">
                                                                            <?php echo e($reservation->client->contact_no); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <?php if($reservation->client->agent): ?>
                                                <div class="d-flex justify-content-start align-items-center my-3">
                                                    <span class="text-secondary text-xs">BROKER</span>
                                                    <div class="mx-1"
                                                        style="flex-grow: 1; height: 0.1px; background-color:lightgray;">
                                                    </div>
                                                </div>
                                                <div class="d-lg-flex justify-content-start">
                                                    <div class="col-lg-12">
                                                        <a href="/agents/<?php echo e($reservation->client->agent->id); ?>"
                                                            class="text-dark">
                                                            <div class="card border border-gray shadow h-100 my-auto">
                                                                <div class="card-body">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div class="mr-4 my-auto align-items-center">
                                                                            <img src="<?php echo e($reservation->client->agent->image ? asset('/storage/' . $reservation->client->agent->image) : asset('images/default.png')); ?>"
                                                                                class="roundedExtraSmallImage mx-auto"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="d-flex-column">
                                                                            <div class="h4 mb-0 text-bold">
                                                                                <?php echo e($reservation->client->agent->name); ?>

                                                                            </div>
                                                                            <div class="h6 mb-0">
                                                                                <?php echo e($reservation->client->agent->email_address); ?>

                                                                            </div>
                                                                            <div class="h6">
                                                                                <?php echo e($reservation->client->agent->contact); ?>

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
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    </div>


    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="confirmCancel<?php echo e($reservation->id); ?>" tabindex="-1" role="dialog">
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
                        <form action="/reservations/in-house/<?php echo e($reservation->id); ?>/cancel" method="POST">
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
        <div class="modal fade" id="confirmDelete<?php echo e($reservation->id); ?>" tabindex="-1" role="dialog">
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
                        <form action="/reservations/in-house/<?php echo e($reservation->id); ?>/delete" method="POST">
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

        <div class="modal fade" id="confirmRestore<?php echo e($reservation->id); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title">Resume Reservation</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to resume this reservation?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/reservations/in-house/<?php echo e($reservation->id); ?>/restore" method="POST">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/in-house/index.blade.php ENDPATH**/ ?>