<?php $__env->startSection('title', 'Anasayfa'); ?>
<?php $__env->startSection('head'); ?>
    <link href="/uif/css/favorite.css" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                <div class="first-slot">
                    <div class="masonry-box post-media">
                        <img style="height: 300px;"
                             src="<?php echo e($news_banner_1->image!=null ? asset('uploads/news/' . $news_banner_1->image) : 'https://via.placeholder.com/300?text=HaberResmi'); ?>"
                             alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->news_id == $news_banner_1->id): ?>
                                            <span class="bg-orange"><a
                                                        href="<?php echo e(route('uif.news.category_news', $category->category->slug)); ?>"
                                                        title=""><?php echo e($category->category->category_name); ?></a></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <h4><a href="<?php echo e(route('uif.news.detail', $news_banner_1->slug)); ?>"
                                           title=""><?php echo e($news_banner_1->title); ?></a></h4>
                                    <small><a href="<?php echo e(route('uif.news.detail', $news_banner_1->slug)); ?>"
                                              title=""><?php echo e(date('d/m/Y',strtotime($news_banner_1->created_at))); ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end first-side -->
                <div class="second-slot">
                    <div class="masonry-box post-media">
                        <img style="height: 300px;"
                             src="<?php echo e($news_banner_2->image!=null ? asset('uploads/news/' . $news_banner_2->image) : 'https://via.placeholder.com/400?text=HaberResmi'); ?>"
                             alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->news_id == $news_banner_2->id): ?>
                                            <span class="bg-orange"><a
                                                        href="<?php echo e(route('uif.news.category_news', $category->category->slug)); ?>"
                                                        title=""><?php echo e($category->category->category_name); ?></a></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <h4><a href="<?php echo e(route('uif.news.detail', $news_banner_2->slug)); ?>"
                                           title=""><?php echo e($news_banner_2->title); ?></a></h4>
                                    <small><a href="<?php echo e(route('uif.news.detail', $news_banner_2->slug)); ?>"
                                              title=""><?php echo e(date('d/m/Y',strtotime($news_banner_2->created_at))); ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
                <div class="last-slot">
                    <div class="masonry-box post-media">
                        <img style="height: 300px;"
                             src="<?php echo e($news_banner_3->image!=null ? asset('uploads/news/' . $news_banner_3->image) : 'https://via.placeholder.com/300?text=HaberResmi'); ?>"
                             alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->news_id == $news_banner_3->id): ?>
                                            <span class="bg-orange"><a
                                                        href="<?php echo e(route('uif.news.category_news', $category->category->slug)); ?>"
                                                        title=""><?php echo e($category->category->category_name); ?></a></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <h4><a href="<?php echo e(route('uif.news.detail', $news_banner_3->slug)); ?>"
                                           title=""><?php echo e($news_banner_3->title); ?></a></h4>
                                    <small><a href="<?php echo e(route('uif.news.detail', $news_banner_3->slug)); ?>"
                                              title=""><?php echo e(date('d/m/Y',strtotime($news_banner_3->created_at))); ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
            </div>
        </div><!-- end masonry -->
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-top clearfix">
                            <h4 class="pull-left">Son Haberler <a href="#"><i class="fa fa-rss"></i></a></h4>
                        </div><!-- end blog-top -->
                        <div class="blog-list clearfix">

                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="<?php echo e(route('uif.news.detail', $entry->slug)); ?>" title="">
                                                <img style="height: 175px"
                                                     src="<?php echo e($entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/400?text=HaberResmi'); ?>"
                                                     alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                    <div class="blog-meta big-meta col-md-8">
                                        <div class="dflex" style="">
                                            <h4><a href="<?php echo e(route('uif.news.detail', $entry->slug)); ?>"
                                                   title=""><?php echo e($entry->title); ?></a></h4>
                                            <?php if(auth()->guard()->check()): ?>
                                                <div class="favorite" style="margin-top: 35px">
                                                    <a href="<?php echo e(route('uif.favorite_news_add',$entry->id )); ?>"><img
                                                                width="30" src="/uif/images/favorite.png"></a>


                                                </div>

                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php echo e(route('uif.news.detail', $entry->slug)); ?>">
                                            <p><?php echo Str::limit($entry->content,100,'...'); ?></p>
                                        </a>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($category->news_id == $entry->id): ?>
                                                <small class="firstsmall"><a class="bg-orange"
                                                                             href="<?php echo e(route('uif.news.category_news', $category->category->slug)); ?>"
                                                                             title=""><?php echo e($category->category->category_name); ?></a></small>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <small><a href="<?php echo e(route('uif.news.detail', $entry->slug)); ?>"
                                                  title=""><?php echo e(date('d/m/Y',strtotime($entry->created_at))); ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">


                        <div class="widget">
                            <h2 class="widget-title">Popüler haberler</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <?php $__currentLoopData = $popular_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('uif.news.detail', $entry->slug)); ?>"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?php echo e($entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/100?text=HaberResmi'); ?>"
                                                     alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo Str::limit($entry->content,20,'...'); ?></h5>
                                                <small><?php echo e(date('d/m/Y',strtotime($entry->created_at))); ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->


                        <div class="widget">
                            <h2 class="widget-title">Takip Et</h2>

                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button facebook-button">
                                        <i class="fa fa-facebook"></i>
                                        <p>27k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa fa-twitter"></i>
                                        <p>98k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa fa-google-plus"></i>
                                        <p>17k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa fa-youtube"></i>
                                        <p>22k</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end widget -->

                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('uif.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/index.blade.php ENDPATH**/ ?>