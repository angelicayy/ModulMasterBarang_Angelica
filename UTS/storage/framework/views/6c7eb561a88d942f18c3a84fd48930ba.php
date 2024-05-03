<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2 class="text-center mb-4">Booksshop - Book Reviews</h2>
                <div class="row">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo e($item['image_url']); ?>" class="card-img-top mx-auto d-block" alt="<?php echo e($item['name']); ?>" style="width: 50%; height: 300px; object-fit: cover;">
                                <div class="card-body">
                                    <a href="<?php echo e(route('items.show', $item->id)); ?>" class="btn1 btn-primary btn-sm">Buy</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/home.blade.php ENDPATH**/ ?>