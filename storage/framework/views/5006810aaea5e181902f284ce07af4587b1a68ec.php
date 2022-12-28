<?php $__env->startSection('title', 'Kategori Yönetimi'); ?>

<?php $__env->startSection('head'); ?>
        <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">
        <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/dropzone.css">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Kategori <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?></h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Kategori</li>
                            <li class="breadcrumb-item active">Kategori <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('management.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('management.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Kategori <?php echo e($entry->id > 0 ? "Düzenleme" : "Ekleme"); ?> Formu</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-wizard" id="regForm" action="<?php echo e(route('management.category.save', $entry->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <div class="tab">
                                    <div class="mb-3">
                                        <label for="name">Kategori Adı</label>
                                        <input class="form-control" name="category_name" type="text" placeholder="Kategori Adı Giriniz.." value="<?php echo e(old('category_name',$entry->category_name)); ?>">
                                    </div>
                                </div>
                                <div class="btn-showcase text-end">
                                    <button class="btn btn-primary" type="submit">Kaydet</button>
                                    <input class="btn btn-light" type="reset" value="Sıfırla">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <script src="/management/assets/js/form-wizard/form-wizard.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views/management/category/form.blade.php ENDPATH**/ ?>