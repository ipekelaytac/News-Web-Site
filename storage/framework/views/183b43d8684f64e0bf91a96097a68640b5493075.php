<?php $__env->startSection('title', 'Kullanıcı Yönetimi'); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Kullanıcı <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?></h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>"> <i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Kullanıcılar</li>
                            <li class="breadcrumb-item active">Kullanıcı <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?></li>
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
                            <h5>Kullanıcı <?php echo e($entry->id > 0 ? "Düzenleme" : "Ekleme"); ?> Formu</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-wizard" id="regForm"
                                  action="<?php echo e(route('management.user.save', $entry->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <div class="mb-3">
                                    <label for="name">Kullanıcı Adı</label>
                                    <input class="form-control" name="name_surname" type="text"
                                           placeholder="İsim soyisim Giriniz" autocomplete="off"
                                           value="<?php echo e($entry->name_surname); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="lname">Email</label>
                                    <input class="form-control" name="email" type="email" placeholder="Email Giriniz."
                                           value="<?php echo e($entry->email); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="password" type="password"
                                           placeholder="Şifre Giriniz." value="">
                                </div>
                                <div class="media mb-3">
                                    <label class="col-form-label m-r-10">Yöneticimi Durumu:</label>
                                    <div class="media-body text-end">
                                        <label class="switch">
                                            <input type="checkbox" name="isit_executive" <?php echo e($entry->isit_executive == 1 ? 'checked' : ''); ?>><span class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <label class="col-form-label m-r-10">Kullanıcı Durumu:</label>
                                    <div class="media-body text-end">
                                        <label class="switch">
                                            <input type="checkbox" name="isit_active" <?php echo e($entry->isit_active == 1 ? 'checked' : ''); ?>><span class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-showcase text-end">
                                    <input class="btn btn-primary" type="submit"
                                           value="<?php echo e($entry->id > 0 ? "Güncelle" : "Kaydet"); ?>">
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
    <script src="/management/assets/js/select2/select2.full.min.js"></script>
    <script src="/management/assets/js/select2/select2-custom.js"></script>
    <script src="/management/assets/js/form-validation-custom.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views//management/user/form.blade.php ENDPATH**/ ?>