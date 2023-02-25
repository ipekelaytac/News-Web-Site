<?php if(session()->has('message')): ?>
    <div class="container m-2">
        <div class="alert alert-<?php echo e(session('message_type')); ?>"><?php echo e(session ('message')); ?></div>
    </div>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/layouts/partials/alert.blade.php ENDPATH**/ ?>