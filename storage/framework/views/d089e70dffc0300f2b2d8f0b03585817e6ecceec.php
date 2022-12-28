<?php if(session()->has('message')): ?>
    <div class="container">
        <div class="alert alert-<?php echo e(session('message_type')); ?>"><?php echo e(session ('message')); ?></div>
    </div>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views/uif/layouts/partials/alert.blade.php ENDPATH**/ ?>