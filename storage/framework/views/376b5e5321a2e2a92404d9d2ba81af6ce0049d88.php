<html>
<head><title>Kullanıcı işlemleri
    </title>
    <link href="/uif/css/login.css" rel="stylesheet">
    <link href="/uif/css/bootstrap.css" rel="stylesheet">
</head>
<body style="background-color:#4070f4">
<?php echo $__env->make('uif.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('uif.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="container forms">

    <div class="form login" style="margin-right: 500px">

        <div class="form-content">
            <header>Giriş Yap</header>
            <form action="<?php echo e(route('uif.login')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" class="input">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Şifre" name="password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
    <div class="form login" style="margin-left: 500px">
        <div class="form-content">
            <header>Kayıt Ol</header>
            <form action="<?php echo e(route('uif.register')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" class="input">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Şifre" name="password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field input-field">
                    <input type="password" placeholder="Şifre Onay" name="password_confirmation" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Kayıt Ol</button>
                </div>
            </form>


        </div>


    </div>

    <!-- Signup Form -->

</section>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views//uif/login.blade.php ENDPATH**/ ?>