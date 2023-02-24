<?php $__env->startSection('title', 'Koleksiyonlarım'); ?>
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
                        <h2 class='mb-3'>Koleksiyonlar</h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            <thead>
                            <tr>
                                <th class="th-sm">Koleksiyon adı
                                </th>
                                <th class="th-sm">İşlem
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($favorite_collection)>0): ?>

                                <?php $__currentLoopData = $favorite_collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                <td><a href="<?php echo e(route('uif.collection_detail',$collection->slug)); ?>"><?php echo e($collection->collection_name); ?></a></td>
                                    <td><a href="<?php echo e(route('uif.collection_delete' , $collection->id)); ?>" class="btn btn-primary">Kaldır</a></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Koleksiyon adı
                                </th>
                                <th>İşlem
                                </th>
                            </tr>
                            </tfoot>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Henüz koleksiyon yok</td>
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
<?php echo $__env->make('uif.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/collection.blade.php ENDPATH**/ ?>