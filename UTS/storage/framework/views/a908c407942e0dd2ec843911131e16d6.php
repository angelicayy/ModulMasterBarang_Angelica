<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2C3E50;">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-book me-2"></i>Booksshop</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-4 col-md-auto"><a href="<?php echo e(route('home')); ?>"
                        class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-4 col-md-auto"><a href="<?php echo e(route('items.index')); ?>"
                        class="nav-link <?php if($currentRouteName == 'items.index'): ?> active <?php endif; ?>">Books</a></li>
                <li class="nav-item col-4 col-md-auto">
                    <a href="<?php echo e(url('/')); ?>" class="nav-link <?php if($currentRouteName == 'reviews'): ?> active <?php endif; ?>">Reviews</a>
                </li>
            </ul>

            <hr class="d-md-none text-white-50">

            <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i
                    class="bi-person-circle me-1"></i> My Profile</a>
        </div>
    </div>
</nav>

<?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/layouts/nav.blade.php ENDPATH**/ ?>