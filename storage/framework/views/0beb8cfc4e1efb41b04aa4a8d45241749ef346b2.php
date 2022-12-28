<?php if(session()->has('message')): ?>

    <div class="row" style="padding:25px ">
        <div class="alert  alert-<?php echo e(session('message_type')); ?> alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('message_type')  === "success" ? "Başarılı" : ( session('message_type') === "warning" ? "Uyarı" : ( session('message_type') === "danger" ? "Hata" : session('message_type')  ) )); ?>!</strong> <?php echo e(session ('message')); ?>

        </div>
    </div>
<?php endif; ?>


<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views/management/layouts/partials/alert.blade.php ENDPATH**/ ?>