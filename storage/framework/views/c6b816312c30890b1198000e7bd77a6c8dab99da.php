
<?php $__env->startSection('content'); ?>
<?php echo e(siteHit()); ?>

<section class="ftco-section">
    <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 d-flex flex-column">
                <div class="card">
                    <div class="card-body shadow-lg text-center">

                        <img src="<?php echo e(asset('storage/icons/mariahomes_orange.jpg')); ?>" class="w-100"
                             />
                        <div class="text-center">
                            <form method="POST" action="/validate">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-12 mt-5 mb-3">
                                        <input class="form-control text-lg" placeholder="Email or Username" type="email"
                                            name="email" autofocus />
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <input class="form-control text-lg" placeholder="Password" type="password"
                                            name="password" />
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-2">
                                        <button class="btn btn-maria btn-block text-white" type="submit"><span
                                                class="fa fa-sign-in"></span> Login</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 mb-2">
                                        <p class="text-center"><a href="/register" data-toggle="modal"
                                                data-target="#forgotModal">Forgot Password</a></p>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="forgotModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST" action="#">
                @csrrf
                <div class="modal-body">
                    <p>Enter your tracking code:</p>
                    <input class="form-control" type="text" name="tracking_code"
                        placeholder="Enter Tracking Code Here" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" style="color:white;background:maroon;"><span
                            class="fa fa-search"></span> Track</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="fa fa-times-circle"></span> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.themes.landing.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/login/main.blade.php ENDPATH**/ ?>