
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="/home/main">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-bullhorn"></i> News and Announcements</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="time-label">
                                    <span class="bg-danger"><i class="fa fa-bullhorn"></i> News and Announcements</span>
                                    <?php if(session('mod_news') == '1'): ?>
                                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                        data-target="#createNews"><i class="fa fa-comment"></i> Compose</button>
                                    <?php endif; ?>
                                </div>
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <i class="fas fa-newspaper bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fas fa-clock"></i> <?php echo e(\Carbon\Carbon::parse($news_item->nws_date_created)->diffForHumans()); ?></span>
                                        <h3 class="timeline-header"><?php echo e($news_item->nws_title); ?></h3>
                                        <div class="timeline-body">
                                            <?php if($news_item->nws_image != ''): ?>
                                            <div class="thumbnail">
                                                <a href="<?php echo e(asset('images/news/' . $news_item->nws_image)); ?>">
                                                    <img src="<?php echo e(asset('images/news/' . $news_item->nws_image)); ?>"
                                                        alt="" style="width:100%">
                                                </a>
                                                <div class="caption">
                                                    <p><?php echo e($news_item->nws_content); ?></p>
                                                </div>
                                            </div>
                                            <?php else: ?>
                                            <p><?php echo e($news_item->nws_content); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="timeline-footer">
                                            <?php if(session('mod_news') == '1'): ?>
                                            
                                            <a style="color:#dc3545;" href="javascript:void(0)" data-toggle="modal"
                                                data-target="#removeNews-<?php echo e($news_item->nws_id); ?>"><i
                                                    class="fa fa-trash"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="removeNews-<?php echo e($news_item->nws_id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Confirm Deletion</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this news/announcement?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="<?php echo e(action('NewsController@delete',[$news_item->nws_id])); ?>"><i
                                                            class="fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header bg-navy">
                            <h3 class="card-title"><span class="fa fa-comments"></span> Chat</h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo $__env->make('admin.chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="card-footer">
                            <form method="POST" action="<?php echo e(action('ChatController@send')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="input-group">
                                    <input type="text" name="cht_message" placeholder="Type Message ..."
                                        class="form-control">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card card-info">
                        <div class="card-header border-bottom-0 bg-navy">
                            <h3 class="card-title"><i class="fas fa-users"></i> Recent Users</h3>
                        </div>
                        <div class="card-body pt-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <?php $__empty_1 = true; $__currentLoopData = $login_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="item">
                                    <div class="product-img">
                                        <img class="img-size-50 img-circle" src="<?php echo e(asset(get_avatar($log->emp_id))); ?>"
                                            alt="logs user image">
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-title">
                                            <?php echo e($log->emp_last_name); ?>, <?php echo e($log->emp_first_name); ?>

                                            <span class="badge badge-info float-right"></span>
                                        </a>
                                        <span class="product-description">
                                            <?php echo e(\Carbon\Carbon::parse($log->log_date)->diffForHumans()); ?>

                                        </span>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="item">
                                    <div class="product-img">

                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-title">
                                            <span class="badge badge-info float-right"></span>
                                        </a>
                                        <span class="product-description">
                                            No logs for today...
                                        </span>
                                    </div>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="card-footer text-center">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<div class="modal fade" id="createNews">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Compose Announcement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="<?php echo e(action('NewsController@save')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="nws_title">Title <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="nws_title" name="nws_title"
                                    placeholder="Title" value="<?php echo e(old('nws_title')); ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="nws_content">Message Content <span style="color:red;">*</span></label>
                                <textarea class="form-control" id="nws_content" name="nws_content"
                                    rows="4"><?php echo e(old('nws_content')); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="nws_image">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="nws_image" name="nws_image"
                                        value="<?php echo e(old('nws_image')); ?>" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="nws_image">Choose file</label>
                                </div>
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file in
                                    jpg or png format. Size of image should not be more than 1MB.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/main.blade.php ENDPATH**/ ?>