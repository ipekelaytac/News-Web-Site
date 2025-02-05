<?php $__env->startSection('title', 'Haber Detay'); ?>
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/uif/css/star.css" rel="stylesheet">

        <link href="/uif/css/favorite.css" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area text-center">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('uif.index')); ?>">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('uif.news')); ?>">Haberler</a></li>
                                <li class="breadcrumb-item active"><?php echo e($news->title); ?></li>
                            </ol>
                            <?php if(!empty($category)): ?>
                                <span class="color-orange"><a
                                            href="<?php echo e(route('uif.news.category_news', $category->slug)); ?>"
                                            title=""><?php echo e($category->category_name); ?></a></span>
                            <?php endif; ?>
                            <h3><?php echo e($news->title); ?></h3>

                            <div class="blog-meta big-meta">
                                <small><a href="#" title=""><?php echo e($news->created_at); ?></a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                            <span class="down-mobile">Facebookta Paylaş</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                            <span class="down-mobile">Twitterda paylaş</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="dflex mb-5" >
                            <div class="">
                                <b class="">Haber Değerlendirme:</b>
                                <?php for($i = 0 ; $i < $point; $i++): ?>
                                    <span class="fa fa-star  m-1"></span>
                                <?php endfor; ?>
                                <?php for($i = $point ; $i < 5; $i++): ?>
                                    <span class="fa fa-star  notchecked m-1"></span>
                                <?php endfor; ?>
                            </div>
                            <?php if(auth()->guard()->check()): ?>
                                <div class="favorite">
                                    <a href="<?php echo e(route('uif.favorite_news_add',$news->id )); ?>"><img width="30" src="/uif/images/favorite.png"></a>
                                    <a id="collectionopen" class="btn-modal"><img width="30" src="/uif/images/collection.png"></a>
                                </div>

                                <div class="box" style="z-index: 3!important; position: relative">
                                    <div class="overlay"></div>
                                    <div class="modal__box">
                                        <div class="dflex">
                                        <h3 class="modal__title">Koleksiyona Ekle</h3>
                                            <b class=" modal__button modal__button--no">X</b></div>
                                        <?php if(count($collections) == 0): ?>
                                            <p>Henüz koleksiyonunuz bulunmamaktadır.<br><a href="<?php echo e(route('uif.collection')); ?>"><b>koleksiyon oluşturmak için tıklayın.</b></a></p>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <form action="<?php echo e(route('uif.collection_news_add')); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="news_id" value="<?php echo e($news->id); ?>">
                                                <input type="hidden" name="collection_id" value="<?php echo e($collection->id); ?>">
                                                <input type="submit" class="btn btn-theme m-1"
                                                       value="<?php echo e($collection->collection_name); ?>">
                                            </form>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>


                            <?php endif; ?>
                        </div>

                        <?php echo $__env->make('uif.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('uif.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="single-post-media">
                            <img  style="z-index: 0!important; position: relative" src="<?php echo e($news->image!=null ? asset('uploads/news/' . $news->image) : 'https://via.placeholder.com/500?text=HaberResmi'); ?>"
                                 alt="" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            <div class="pp">
                                <?php echo $news->content; ?>

                            </div><!-- end pp -->


                        </div><!-- end content -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="/uif/upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="invis1">

                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">Puan Ver</h4>
                            <div class="row">
                                <div class="col-lg-12">

                                    <form class="form-wrapper rating" id="point-form"
                                          action="<?php echo e(route('uif.news_point')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="news_id" value="<?php echo e($news->id); ?>">

                                        <label>
                                            <input type="radio" name="point"
                                                   value="1" <?php echo e($user_point == 1 ? 'checked' : ''); ?> />
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point"
                                                   value="2" <?php echo e($user_point == 2 ? 'checked' : ''); ?> />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point"
                                                   value="3" <?php echo e($user_point == 3 ? 'checked' : ''); ?> />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point"
                                                   value="4" <?php echo e($user_point == 4 ? 'checked' : ''); ?> />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point"
                                                   value="5" <?php echo e($user_point == 5 ? 'checked' : ''); ?> />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                    </form>
                                    <br>
                                    <a class="btn btn-primary" href="#"
                                       onclick="event.preventDefault(); document.getElementById('point-form').submit()">Gönder</a>

                                </div>
                            </div>
                        </div>
                        <div class="custombox clearfix mt-5">
                            <h4 class="small-title"><?php echo e(count($news_comments)); ?> Yorum</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        <?php $__currentLoopData = $news_comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name"><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($user->id == $news_comment->user_id): ?>
                                                                <?php echo e($user->email); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <small>Tarih: <?php echo e($news_comment->created_at); ?></small>
                                                    </h4>
                                                    <p><?php echo e($news_comment->comment); ?></p>
                                                </div>
                                                <?php if( auth()->id() == $news_comment->user_id): ?>
                                                    <a href="<?php echo e(route('uif.comment_delete',$news_comment->id )); ?>"
                                                       class="btn btn-primary">Sil</a>
                                                <?php endif; ?>
                                            </div>
                                            <hr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">Değerlendir</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper" action="<?php echo e(route('uif.news_comment')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <textarea class="form-control" name="comment"
                                                  placeholder="Yorum yap"></textarea>
                                        <input type="hidden" name="news_id" value="<?php echo e($news->id); ?>">
                                        <button type="submit" class="btn btn-primary">Gönder</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

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
                                                <img src="<?php echo e($entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/400?text=HaberResmi'); ?>"
                                                     alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo Str::limit($entry->content,20,'...'); ?></h5>
                                                <small><?php echo e(date('d/m/Y',strtotime($entry->created_at))); ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div><!-- end blog-list -->
                        </div>
                        <hr>
                        <div class="widget">
                            <h2 class="widget-title">Kategoriler</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(route('uif.news.category_news', $category->slug)); ?>"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <h5 class="mb-1"><?php echo e($category->category_name); ?></h5>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div><!-- end blog-list -->
                        </div>
                        <hr>
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
                        <hr>
                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="/uif/upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->


        </div><!-- end container -->
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        // ---- ---- ---- ---- ---- //
        const modal = document.querySelector('.box'),
            overlay = document.querySelector('.overlay'),
            modalBtn = document.querySelector('.btn-modal'),
            yesBtn = document.querySelector('.modal__button--yes');
        closeBtn = document.querySelector('.modal__button--no');

        // ---- ---- Open Modal ---- ---- //
        modalBtn.addEventListener('click', () => {
            modal.classList.add('active');
        });
        // ---- ---- Close Modal ---- ---- //
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
        });
        yesBtn.addEventListener('click', () => {
            modal.classList.remove('active');
        });
        // ---- ---- Close Modal Overlay---- ---- //
        overlay.addEventListener('click', () => {
            modal.classList.remove('active');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('uif.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/news_detail.blade.php ENDPATH**/ ?>