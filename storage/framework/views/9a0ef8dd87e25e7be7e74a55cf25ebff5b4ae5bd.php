<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="widget">
                    <div class="footer-text text-left">
                        <a href="<?php echo e(route('uif.index')); ?>"> <h1 class="m-1" style="color: white">News</h1></a>

                        <p>Gündemde olan haberler için bizi takip edin.</p>
                        <div class="social">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>

                        <hr class="invis">
                        <?php echo $__env->make('uif.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('uif.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="newsletter-widget text-left">
                            <form class="form-inline" method="post" action="<?php echo e(route('uif.subscriber')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="text" class="form-control" name="email" placeholder="Email adresinizi giriniz.">
                                <button type="submit" class="btn btn-primary">Gönder</button>
                            </form>
                        </div><!-- end newsletter -->
                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popüler Kategoriler</h2>
                    <div class="link-widget">
                        <ul>
                            <li><a href="/Haberler/kategori/consequatur-eveniet-voluptatum-ut">Nia Jacobi II</a></li>
                            <li><a href="/Haberler/kategori/dolorem-facilis-blanditiis-rem-odit-praesentium">Ansley Cassin</a></li>
                            <li><a href="/Haberler/kategori/ut-ratione-aliquam-et-fugit">Carey Lindgren</a></li>
                            <li><a href="/Haberler/kategori/ut-ratione-aliquam-et-fugit">Lura Ziemann DDS</a></li>
                            <li><a href="/Haberler/kategori/eos-tenetur-dolores-nam-ut-exercitationem">Masha Kovacek</a></li>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Menü</h2>
                    <div class="link-widget">
                        <ul>
                            <li>
                                <a  href="<?php echo e(route('uif.index')); ?>">AnaSayfa</a>
                            </li>
                            <li >
                                <a  href="<?php echo e(route('uif.news')); ?>">Haberler</a>
                            </li>
                            <li >
                                <a  href="<?php echo e(route('uif.contact')); ?>">İletişim</a>
                            </li>
                            <li>
                                <a  href="<?php echo e(route('uif.aboutus')); ?>">Hakkımızda</a>
                            </li>

                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; News Web Site. Created by: <a target="_blank" href="https://aytacipekel.com">Aytaç İpekel</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/News-Web-Site/resources/views/uif/layouts/partials/footer.blade.php ENDPATH**/ ?>