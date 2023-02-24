<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse d-flex flex-row">
                <a href="<?php echo e(route('uif.index')); ?>"> <h1 class="m-1" style="color: white">News</h1></a>
            <div class="collapse navbar-collapse row" id="navbarCollapse">
                <ul class="navbar-nav mr-auto m-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('uif.index')); ?>">AnaSayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('uif.news')); ?>">Haberler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('uif.contact')); ?>">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('uif.aboutus')); ?>">Hakkımızda</a>
                    </li>
                </ul>

            </div>
            <?php if(auth()->guard()->guest()): ?>
                <div class="flex-row  nav"><a style="color:white;" class="nav-link" href="<?php echo e(route('uif.user')); ?>">Giriş</a></div>

            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                    <div class="flex-row  nav"><a style="color:white;" class="nav-link" href="<?php echo e(route('uif.favorite')); ?>">Favoriler</a></div>

                    <div class="flex-row  nav"><a style="color:white;" class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış</a></div>
                        <form id="logout-form" action="<?php echo e(route('uif.logout')); ?>" method="post"  style="display: none;" >
                            <?php echo e(csrf_field()); ?>

                        </form>
            <?php endif; ?>
            <div class="flex-row  nav"><a class="nav-link" href="<?php echo e(route('management.index')); ?>">Admin_Paneli</a></div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/layouts/partials/header.blade.php ENDPATH**/ ?>