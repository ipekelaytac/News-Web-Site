<?php $__env->startSection('title', 'Kullanıcı Yönetimi'); ?>

<?php $__env->startSection('head'); ?>

    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/rating.css">

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Kullanıcılar</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>">                                       <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Kullanıcılar</li>
                        </ol>
                    </div>
                </div>
                    <div class="page-title">
                        <div class="pull-right">
                            <a class="btn btn-success" href="<?php echo e(route('management.user.add')); ?>">Yeni Ekle</a>
                        </div>
                    </div>
            </div>
        </div>
        <?php echo $__env->make('management.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('management.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive product-table">
                                <table class="display" id="tblTable">
                                    <thead>
                                    <tr>
                                        <th>İD</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Email</th>
                                        <th>Yetki</th>
                                        <th>Ayarlar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($list) == 0): ?>
                                        <span  class="text-center">Kayıt bulunamadı!</span>
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>#<?php echo e($entry->id); ?></td>
                                        <td>
                                            <span><?php echo e($entry->name_surname); ?></span>
                                        </td>
                                        <td><?php echo e($entry->email); ?></td>
                                        <td class="font-success"><?php echo e($entry->isit_executive == 1 ? "Admin" : "Kullanıcı"); ?>

                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#delete-<?php echo e($entry->id); ?>"
                                               class="btn btn-danger " type="button">Sil
                                            </a>

                                            <a href="<?php echo e(route('management.user.update', $entry->id)); ?>"><button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Düzenle</button></a>
                                        </td>
                                        <div class="modal  mt-5 mb-0" id="delete-<?php echo e($entry->id); ?>" tabindex="-1"
                                             role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog mt-0 mb-0" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Kullanıcı Sil</h5>
                                                        <button class="btn-close" type="button"
                                                                data-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Kullanıcıyı silmek istediğinize emin misiniz?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button"
                                                                data-dismiss="modal">Kapat
                                                        </button>
                                                        <a href="<?php echo e(route('management.user.delete', $entry->id)); ?>"
                                                           class="btn btn-secondary" type="button">Sil</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <script src="/management/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/management/assets/js/rating/jquery.barrating.js"></script>
    <script src="/management/assets/js/rating/rating-script.js"></script>
    <script src="/management/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/management/assets/js/ecommerce.js"></script>
    <script src="/management/assets/js/product-list-custom.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>
    <script src="/management/assets/js/main.js"></script>
    <script src="/management/assets/js/touchspin/vendors.min.js"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aytacipekel/haber.aytacipekel.com/resources/views//management/user/users.blade.php ENDPATH**/ ?>