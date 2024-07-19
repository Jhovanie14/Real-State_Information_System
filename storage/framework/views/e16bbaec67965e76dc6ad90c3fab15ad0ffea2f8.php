
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 text-dark">Brokers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                        <li class="breadcrumb-item">Brokers</li>
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
                                    <form action="/brokers" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" type="search"
                                                class="form-control border border-gray" placeholder="Search...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary border-secondary" type="submit"
                                                    id="searchClient">
                                                    <span class="fa-solid fa-search"></span>
                                                    <i class="searchText d-none d-sm-inline">&nbsp;Search</i>
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
                                            <a class="dropdown-item" href="/brokers">All</a>
                                            <a class="dropdown-item" href="/brokers/active">Active</a>
                                            <a class="dropdown-item" href="/brokers/archived">Archived</a>
                                            <a class="dropdown-item" href="/brokers/deleted">Deleted</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $__currentLoopData = $brokers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $broker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-12 mb-2">
                    <div class="card rounded shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">

                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="<?php echo e($broker->image ?  asset('/storage/' . $broker->image ) : asset('/images/default.png')); ?>"
                                            class="roundedSmallImage mr-4 border border-dark" />
                                    </div>

                                    <div class="d-flex flex-column justify-content-between">
                                        <div>
                                            <h3 class="text-bold mb-0">
                                                <?php echo e($broker->name ?? ''); ?>

                                            </h3>
                                            <div>
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

                                        <div>
                                            <div>
                                                <i class="fa-solid fa-briefcase"></i>
                                                <span class="mb-0 h4 ml-2">
                                                    <?php echo e($broker->brokerage_firm ?? ''); ?>

                                                </span>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-mobile-retro pl-1"></i>
                                                <span class="my-0 h6 ml-2">
                                                    <?php echo e($broker->contact_no ?? ''); ?>

                                                </span>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-envelope"></i>
                                                <span class="mt-0 h6 ml-2">
                                                    <?php echo e($broker->email ?? ''); ?>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column justify-content-center align-items-center"
                                    style="width: 15%;">
                                    <a href="/brokers/<?php echo e($broker->id); ?>" class="btn btn-block btn-primary btn-block">
                                        <i class="fa-solid fa-eye"></i>
                                        <span class="d-none d-md-inline">&nbsp;View</span>
                                    </a>

                                    <?php if($broker->active == 2): ?>
                                    <a href="#" data-toggle="modal" data-target="#confirmArchive<?php echo e($broker->id); ?>"
                                        class="btn btn-block btn-warning ">
                                        <i class="fa-solid fa-archive"></i>
                                        <span class="d-none d-md-inline">&nbsp;Archive</span>
                                    </a>
                                    <?php elseif($broker->active == 1): ?>
                                    <a href="#" data-toggle="modal" data-target="#confirmUnarchive<?php echo e($broker->id); ?>"
                                        class="btn btn-block btn-success ">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span class="d-none d-md-inline">&nbsp;Unarchive</span>
                                    </a>
                                    <?php else: ?>
                                    <a href="#" class="btn btn-block btn-dark disabled ">
                                        <i class="fa-solid fa-archive"></i>
                                        <span class="d-none d-md-inline">&nbsp;Archive</span>
                                    </a>
                                    <?php endif; ?>
                                    <?php if($broker->active == 2 || $broker->active == 1): ?>
                                    <a href="#" data-toggle="modal" data-target="#confirmDelete<?php echo e($broker->id); ?>"
                                        class="btn btn-block btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                        <span class="d-none d-md-inline">&nbsp;Delete</span>
                                    </a>
                                    <?php else: ?>
                                    <a href="#" data-toggle="modal" data-target="#confirmDelete<?php echo e($broker->id); ?>"
                                        class="btn btn-block btn-dark disabled">
                                        <i class="fa-solid fa-trash"></i>
                                        <span class="d-none d-md-inline">&nbsp;Delete</span>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
            <div clas="row my-5">
                <div class="col-12 d-flex justify-content-end">
                    <?php echo e($brokers->links()); ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?php $__currentLoopData = $brokers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $broker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



<div class="modal fade" id="confirmDelete<?php echo e($broker->id); ?>" tabindex="-1" role="dialog">
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
<div class="modal fade" id="confirmArchive<?php echo e($broker->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
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
<div class="modal fade" id="confirmUnarchive<?php echo e($broker->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
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
                <form action="/brokers/<?php echo e($broker->id); ?>/activate" method="POST">
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
<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/brokers/index.blade.php ENDPATH**/ ?>