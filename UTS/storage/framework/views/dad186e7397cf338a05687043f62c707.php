<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title"><?php echo e($item->nama); ?></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Kode:</strong> <?php echo e($item->kode); ?></p>
                        <p><strong>Harga:</strong> <?php echo e($item->harga); ?></p>
                        <p><strong>Satuan:</strong> <?php echo e($item->satuan->nama); ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Deskripsi:</strong></p>
                        <p><?php echo e($item->deskripsi); ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="<?php echo e(route('items.index')); ?>" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/items/show.blade.php ENDPATH**/ ?>