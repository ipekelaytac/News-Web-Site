<!DOCTYPE html>
<html lang="tr">
<head>
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <?php echo $__env->make('management.layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head'); ?>
</head>
<body>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php echo $__env->make('management.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-body-wrapper">
            <?php echo $__env->make('management.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('management.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>


<?php echo $__env->make('management.layouts.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/NewsWeb-Site/resources/views/management/layouts/master.blade.php ENDPATH**/ ?>