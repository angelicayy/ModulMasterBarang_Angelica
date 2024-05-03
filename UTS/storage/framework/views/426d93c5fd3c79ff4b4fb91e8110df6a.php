<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Booksshop - Books Review </title>


</head>

<body>
    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->yieldContent('content'); ?> <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html
<?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/layouts/app.blade.php ENDPATH**/ ?>