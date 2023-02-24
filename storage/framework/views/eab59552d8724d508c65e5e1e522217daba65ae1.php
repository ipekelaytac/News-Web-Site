<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="<?php echo e(route('management.index')); ?>"><h4>NewsWebSite</h4></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="<?php echo e(route('management.index')); ?>"><h6>NWS</h6></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="<?php echo e(route('management.index')); ?>"><h4>NWS</h4></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Yönetim Paneli</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link" href="<?php echo e(route('management.index')); ?>"><i data-feather="home"></i><span>AnaSayfa              </span></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>İçerik Yönetimi</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link" href="<?php echo e(route('management.news')); ?>"><i data-feather="file-text"></i><span>Haber Yönetimi</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link" href="<?php echo e(route('management.category')); ?>"><i data-feather="tag"></i><span>Kategori Yönetimi</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link" href="<?php echo e(route('management.user')); ?>"><i data-feather="user"></i><span>Kullanıcı Yönetimi</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link" href="<?php echo e(route('management.mail')); ?>"><i data-feather="mail"></i><span>Mail Yönetimi</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link" href="<?php echo e(route('management.subscriber')); ?>"><i data-feather="user-check"></i><span>Abone Yönetimi</span></a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/management/layouts/partials/sidebar.blade.php ENDPATH**/ ?>