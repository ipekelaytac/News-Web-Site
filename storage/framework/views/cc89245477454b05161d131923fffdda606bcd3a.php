<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <a href="<?php echo e(route('uif.index')); ?>"> <h1 class="m-1" style="color: white">News</h1></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
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
                <div class="nav-item float-end"><a class="nav-link" href="<?php echo e(route('management.index')); ?>">Admin Paneli</a></div>

            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views/uif/layouts/partials/header.blade.php ENDPATH**/ ?>