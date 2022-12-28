<?php $__env->startSection('title', 'Hakkımızda'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-envelope-open-o bg-orange"></i> İletişim <small
                            class="hidden-xs-down hidden-sm-down">Bizimle iletişime geçin. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('uif.index')); ?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">İletişim</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->
    <section class="section wb">
        <?php echo $__env->make('uif.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('uif.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-wrapper">
                        <div class="row">
                            <h1>İletişim Formu</h1>
                            <div class="col-lg-12">
                                <form action="<?php echo e(route('uif.contact')); ?>" method="post" class="form-wrapper">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="text" class="form-control" name="name_surname" placeholder="Ad Soyad">
                                    <input type="text" class="form-control" name="email" placeholder="Email adres">
                                    <input type="text" class="form-control" name="subject" placeholder="Konu">
                                    <textarea class="form-control" name="content" placeholder="Mesajınız"></textarea>
                                    <button type="submit" class="btn btn-primary">Gönder <i
                                            class="fa fa-envelope-open-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('uif.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/NewsWeb-Site/resources/views/uif/contact.blade.php ENDPATH**/ ?>