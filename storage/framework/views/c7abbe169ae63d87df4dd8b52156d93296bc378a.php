<?php $__env->startSection('title', 'Haber Yönetimi'); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/style.css">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Haber <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?></h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>">                                       <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Haberler</li>
                            <li class="breadcrumb-item active">Haber <?php echo e($entry->id > 0 ? "Düzenle" : "Ekle"); ?></li>
                        </ol>
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
                        <div class="card-header">
                            <h5>Haber <?php echo e($entry->id > 0 ? "Düzenleme" : "Ekleme"); ?> Formu</h5>
                        </div>
                        <div class="card-body add-post">
                            <form class="row needs-validation"  action="<?php echo e(route('management.news.save', $entry->id)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="validationCustom01">Başlık:</label>
                                        <input class="form-control" id="validationCustom01" type="text" name="title" placeholder="Blog Başlığı" value="<?php echo e(old('title', $entry->title)); ?>">
                                    </div>

                                    <div class="mb-3">
                                        <div class="col-form-label">Kategori:</div>
                                        <select class="js-example-disabled-results col-sm-12 " name="category[]"  id="category" multiple="multiple">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($category->id); ?>" <?php echo e(collect(old('news', $news_category))->contains($category->id) ? 'selected' : ''); ?>>
                                                    <?php echo e($category->category_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="email-wrapper">
                                        <div class="theme-form">
                                            <div class="mb-3">
                                                <label>İçerik:</label>
                                                <textarea id="text-box"    cols="10"  name="content" rows="2"><?php echo e(old('keywords', $entry->content)); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Resim Ekle:</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>

                                <?php if($entry->image!=null): ?>
                                    <div class="mb-3">
                                    <label for="formFile" class="form-label">Güncel Resim:</label>
                                    </div>
                                    <div class="mb-3">
                                    <img src="/uploads/news/<?php echo e($entry->image); ?>" alt="..." style="height: 100px; margin-right: 20px; width: 50%;" class="img-thumbnail">
                                    </div>
                                        <?php endif; ?>

                                <div class="btn-showcase text-end">
                                    <input class="btn btn-primary" type="submit"  value="<?php echo e($entry->id > 0 ? "Güncelle" : "Kaydet"); ?>">
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
    <script src="/management/assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="/management/assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="/management/assets/js/dropzone/dropzone.js"></script>
    <script src="/management/assets/js/dropzone/dropzone-script.js"></script>
    <script src="/management/assets/js/select2/select2.full.min.js"></script>
    <script src="/management/assets/js/select2/select2-custom.js"></script>
    <script src="/management/assets/js/email-app.js"></script>
    <script src="/management/assets/js/form-validation-custom.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>

<script>
    $("textarea").on('input', function(event) {
        console.log($(this).val());
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views/management/news/form.blade.php ENDPATH**/ ?>