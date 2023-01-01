<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('management.layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/management/assets/css/main.css">
</head>
<body>
<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="/management/assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo text-start" href="<?php echo e(route('management.index')); ?>">
                            <h1>News Web Site</h1></a></div>
                    <div class="login-main">
                        <?php echo $__env->make('management.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form class="theme-form" method="post" action="<?php echo e(route('management.login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <h4>Oturum Aç</h4>
                            <p>Giriş yapmak için e-postanızı ve şifrenizi girin</p>
                            <div class="form-group">
                                <label class="col-form-label">Mail Adresi</label>
                                <input class="form-control" type="email" name="email" value="misafir@aytacipekel.com" placeholder="Test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Şifre</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="*********" value="1">
                                        <i class="fa-solid fa-eye" id="eye"></i>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit" >Giriş Yap</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('management.layouts.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="/management/assets/js/password_hide.js"></script>
</body>
</html>
<?php /**PATH /home/aytacipekel/haber.aytacipekel.com/resources/views/management/login.blade.php ENDPATH**/ ?>