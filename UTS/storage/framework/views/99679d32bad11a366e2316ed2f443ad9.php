<a href="<?php echo e(route('items.show', $item->id)); ?>" class="btn2"><i class="bi-person-lines-fill"></i></a>
<a href="<?php echo e(route('items.edit', $item->id)); ?>" class="btn2"><i class="bi-pencil-square"></i></a>
<form action="<?php echo e(route('items.destroy', $item->id)); ?>" method="POST" style="display: inline;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn2" onclick="return confirm('Anda yakin ingin menghapus barang ini?')"><i class="bi bi-trash"></i></button>
</form>
<?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/items/actions.blade.php ENDPATH**/ ?>