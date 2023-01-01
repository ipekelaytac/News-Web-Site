<?php $__env->startSection('title', 'Haber Yönetimi'); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/range-slider.css">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Haberler</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>"><i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Haberler</li>
                        </ol>
                    </div>
                </div>
                <div class="page-title">
                    <div class="pull-right">
                        <a class="btn btn-success" href="<?php echo e(route('management.news.add')); ?>">Yeni Ekle</a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('management.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('management.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid product-wrapper">
            <div class="product-grid">
                <div class="feature-products">
                    <div class="row">
                        <div class="col-md-6 products-total">
                            <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view"
                                                                                  href="#" data-original-title=""
                                                                                  title=""><i
                                        data-feather="grid"></i></a></div>
                            <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view"
                                                                                  href="#" data-original-title=""
                                                                                  title=""><i
                                        data-feather="list"></i></a></div>
                            <span class="d-none-productlist filter-toggle">
                          Filters<span class="ms-2"><i class="toggle-data"
                                                       data-feather="chevron-down"></i></span></span>
                            <div class="grid-options d-inline-block">
                                <ul>
                                    <li><a class="product-2-layout-view" href="#" data-original-title="" title=""><span
                                                class="line-grid line-grid-1 bg-primary"></span><span
                                                class="line-grid line-grid-2 bg-primary"></span></a></li>
                                    <li><a class="product-3-layout-view" href="#" data-original-title="" title=""><span
                                                class="line-grid line-grid-3 bg-primary"></span><span
                                                class="line-grid line-grid-4 bg-primary"></span><span
                                                class="line-grid line-grid-5 bg-primary"></span></a></li>
                                    <li><a class="product-4-layout-view" href="#" data-original-title="" title=""><span
                                                class="line-grid line-grid-6 bg-primary"></span><span
                                                class="line-grid line-grid-7 bg-primary"></span><span
                                                class="line-grid line-grid-8 bg-primary"></span><span
                                                class="line-grid line-grid-9 bg-primary"></span></a></li>
                                    <li><a class="product-6-layout-view" href="#" data-original-title="" title=""><span
                                                class="line-grid line-grid-10 bg-primary"></span><span
                                                class="line-grid line-grid-11 bg-primary"></span><span
                                                class="line-grid line-grid-12 bg-primary"></span><span
                                                class="line-grid line-grid-13 bg-primary"></span><span
                                                class="line-grid line-grid-14 bg-primary"></span><span
                                                class="line-grid line-grid-15 bg-primary"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <div class="dropdown">
                                <span class="f-w-600 m-r-6 m-3">Haberleri Listele  , <?php echo e(count($list)); ?> Blog var</span>
                                <a class="btn btn-primary dropdown-toggle" style="color:white;" href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Sırala
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a href="?sırala=eski" class="dropdown-item" >Eskiden Yeniye</a>
                                    <a href="?sırala=yeni" class="dropdown-item" >Yeniden Eskiye</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2" >
                            <div class="col-md-12 col-sm-12">
                                <form class="theme-form" id="search" action="<?php echo e(route('management.news')); ?>"
                                      method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group m-0">
                                        <input class="form-control" type="search" name="search" id="search"
                                               placeholder="Haber ara" value="<?php echo e(old('search')); ?>" data-original-title=""
                                               title="">
                                        <button style="background: none;padding: 0px;border: none;" onclick="search"
                                                type="submit"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="product-wrapper-grid">
                            <div class="row">

                                <?php if(count($list) == 0): ?>
                                    <span class="text-center">Kayıt bulunamadı!</span>
                                <?php endif; ?>
                                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xl-3 col-sm-6 xl-4">
                                        <div class="card">
                                            <div class="product-box">
                                                <div class="product-img" ><img  style=" width:100%;height: 200px"class="img-fluid"
                                                                              src="<?php echo e($entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/200?text=HaberResmi'); ?>"
                                                                              alt="">

                                                    <div class="product-hover">
                                                        <ul>

                                                            <li>
                                                                <a class="btn" type="button" data-toggle="modal"
                                                                   data-target="#delete-<?php echo e($entry->id); ?>"><i
                                                                        class="icofont icofont-ui-delete"></i></a>
                                                            </li>

                                                            <li>
                                                                <a href="<?php echo e(route('management.news.update', $entry->id)); ?>"
                                                                   class="btn" type="button"><i
                                                                        class="icofont icofont-ui-edit"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="modal  mt-5 mb-0" id="delete-<?php echo e($entry->id); ?>" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog mt-0 mb-0" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Haber Sil</h5>
                                                                <button class="btn-close" type="button"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Haberi silmek istediğinize emin misiniz?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button"
                                                                        data-dismiss="modal">Kapat
                                                                </button>
                                                                <a href="<?php echo e(route('management.news.delete', $entry->id)); ?>"
                                                                   class="btn btn-secondary" type="button">Sil</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div  class="product-details">
                                                    <h4><?php echo e($entry->title); ?></h4>
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
        <?php $__env->stopSection(); ?>



        <?php $__env->startSection('js'); ?>
            <script src="/management/assets/js/range-slider/ion.rangeSlider.min.js"></script>
            <script src="/management/assets/js/range-slider/rangeslider-script.js"></script>
            <script src="/management/assets/js/touchspin/vendors.min.js"></script>
            <script src="/management/assets/js/touchspin/touchspin.js"></script>
            <script src="/management/assets/js/touchspin/input-groups.min.js"></script>
            <script src="/management/assets/js/owlcarousel/owl.carousel.js"></script>
            <script src="/management/assets/js/select2/select2.full.min.js"></script>
            <script src="/management/assets/js/select2/select2-custom.js"></script>
            <script src="/management/assets/js/tooltip-init.js"></script>
            <script src="/management/assets/js/product-tab.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aytacipekel/haber.aytacipekel.com/resources/views/management/news/news.blade.php ENDPATH**/ ?>