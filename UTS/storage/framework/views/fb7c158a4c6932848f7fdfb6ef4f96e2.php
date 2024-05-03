<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="d-flex justify-content-end">
        <a href="<?php echo e(route('items.create')); ?>" class="btn btn-outline-dark mb-3">Tambah Barang</a>
    </div>
    <br>
    <h2 class="text-center text-br"><strong>Daftar Barang</strong></h2>

    <br>
    <br>
    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Satuan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->kode); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td>Rp <?php echo e(number_format($item->harga, 0, ',', '.')); ?></td>
                        <td><?php echo e($item->deskripsi); ?></td>
                        <td>
                            <?php if($item->satuan): ?>
                                <?php echo e($item->satuan->nama_satuan); ?>

                            <?php else: ?>
                                Satuan tidak tersedia
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($item->image_url): ?>
                                <img src="<?php echo e($item->image_url); ?>" alt="Gambar Barang" style="max-width: 100px; max-height: 100px;">
                            <?php else: ?>
                                Gambar tidak tersedia
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php echo $__env->make('items.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/items/index.blade.php ENDPATH**/ ?>