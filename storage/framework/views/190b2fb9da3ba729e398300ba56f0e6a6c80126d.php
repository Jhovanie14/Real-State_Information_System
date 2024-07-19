<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <?php echo $__env->make('layouts.partials.landing.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
</head>

<body class="bg-maria-gradient">
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.partials.landing.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>F<?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/layouts/themes/landing/main.blade.php ENDPATH**/ ?>