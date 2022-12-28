<?php $__env->startSection('title', 'Takım Yönetimi'); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>
                            Takımlar</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>"> <i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Takımlar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid search-page">
            <div class="row project-cards">
                <div class="col-md-12 project-list">
                    <div class="card">
                        <div class="row">

                                <div class="col-md-12">
                                    <form class="theme-form" id="search" action="<?php echo e(route('management.mail')); ?>"
                                          method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="input-group mb-0">
                                            <input class="form-control-plaintext" type="text" name="search" id="search"
                                                   placeholder="Mail ile ilgili detay giriniz." value="<?php echo e(old('search')); ?>">
                                            <button onclick="search" class="btn btn-primary" type="submit">Ara</button>
                                        </div>
                                    </form>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('management.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('management.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid">
            <div class="row project-cards">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                     aria-labelledby="top-home-tab">
                                    <div class="row">
                                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-xxl-4 col-lg-6">
                                                <div class="project-box">
                                                    <h5>Email: <?php echo e($entry->email); ?></h5>
                                                    <p>Konu: <?php echo e($entry->subject); ?></p>
                                                    <div class="project-status p-2">
                                                        <button class="btn btn-danger btn-pill pull-left"
                                                                type="button" data-toggle="modal" data-target="#delete-<?php echo e($entry->id); ?>">
                                                            Sil
                                                        </button>
                                                        <button class="btn btn-primary btn-pill pull-right"
                                                                type="button" data-toggle="modal" data-target="#detail-<?php echo e($entry->id); ?>">
                                                            İncele
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="modal  mt-5 mb-0" id="delete-<?php echo e($entry->id); ?>" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog mt-0 mb-0" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Mail Sil</h5>
                                                                <button class="btn-close" type="button"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Maili silmek istediğinize emin misiniz?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button"
                                                                        data-dismiss="modal">Kapat
                                                                </button>
                                                                <a href="<?php echo e(route('management.mail.delete', $entry->id)); ?>"
                                                                   class="btn btn-secondary" type="button">Sil</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal  mt-5 mb-0" id="detail-<?php echo e($entry->id); ?>" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog mt-0 mb-0" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><?php echo e($entry->subject); ?></h5>
                                                                <button class="btn-close" type="button"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Ad Soyad: <span><?php echo e($entry->name_surname); ?></span></h6>
                                                                <h6>Email: <span><?php echo e($entry->email); ?></span></h6>
                                                                <h6>İçerik:</h6>
                                                                <p><?php echo e($entry->content); ?></p>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button"
                                                                        data-dismiss="modal">Kapat
                                                                </button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <script src="/management/assets/js/touchspin/vendors.min.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/NewsWeb-Site/resources/views/management/mail/mail.blade.php ENDPATH**/ ?>