<?php $__env->startSection('title', 'Favorilerim'); ?>
<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-wrapper">
                        <div class=" row">
                            <div class="col-6">
                            </div>
                            <div class="col-6 offset-6">
                                <form action="<?php echo e(route('uif.collection_add')); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                                <div class="pull-right"> Koleksiyon Ekle
                                    <input type="text" name="collection_name"
                                           placeholder="koleksiyon adı">
                                    <input type="submit" class="btn-success" value="Ekle">
                                </div>
                            </form>
                            </div>
                        </div>
                        <?php echo $__env->make('uif.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('uif.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <h6 class="pull-right mt-3"><a href="<?php echo e(route('uif.collection')); ?>">Koleksiyonlarım</a></h6>

                        <h2 class='mb-3'>Favori Ürünler</h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            <?php if(count($favorite_news)>0): ?>

                            <thead>
                            <tr>
                                <th class="th-sm">Haber Resim
                                </th>
                                <th class="th-sm">Haber Başlık
                                </th>
                                <th class="th-sm">Haber Tarihi
                                </th>
                                <th class="th-sm">İşlem
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $favorite_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fav_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><a href="<?php echo e(route('uif.news.detail', $fav_news->news->slug)); ?>"><img width="100" src="<?php echo e($fav_news->news->image!=null ? asset('uploads/news/' . $fav_news->news->image) : 'https://via.placeholder.com/100?text=HaberResmi'); ?>"></a></td>
                                <td><a href="<?php echo e(route('uif.news.detail', $fav_news->news->slug)); ?>"><?php echo e($fav_news->news->title); ?></a></td>
                                <td><?php echo e(date('d/m/Y',strtotime($fav_news->news->created_at))); ?></td>
                                    <td><a href="<?php echo e(route('uif.favorite_delete',$fav_news->news->id )); ?>" class="btn btn-danger">kaldır</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Haber Resim
                                </th>
                                <th>Haber Başlık
                                </th>
                                <th>Haber Tarihi
                                </th>
                                <th>İşlem
                                </th>
                            </tr>
                            </tfoot>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Henüz favorilerde haber yok</td>
                                </tr>

                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('uif.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/favorite.blade.php ENDPATH**/ ?>