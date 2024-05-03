<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white"" style="background: linear-gradient(to right, #FFA07A, #87CEEB);">
                    <h4 class="card-title">My Profile</h4>
                </div>
                <div class="card-body" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="text-center">
                                <img src="<?php echo e(Vite::asset('resources/images/angel.jpg')); ?>" class="rounded img-fluid" alt="Profile Picture"  style="width: 200px; height: 250px; object-fit: cover; border: 5px solid #FFF; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                                <h5 class="mt-3">Angel</h5>
                                <p class="text-muted">Mahasiswa Sistem Informasi 22'</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card" style="background-color: #f9f9f9;">
                                <div class="card-body">
                                    <h5 class="card-title">About Me</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" style="border: none;"><i class="bi bi-person"></i> Name: Angelica Vanniza Arinda</li>
                                        <li class="list-group-item" style="border: none;"><i class="bi bi-card-text"></i> NIM: 1204220063</li>
                                        <li class="list-group-item" style="border: none;"><i class="bi bi-envelope"></i> Email: angelicaay@student.telkomuniversity.ac.id</li>
                                        <li class="list-group-item" style="border: none;"><i class="bi bi-geo-alt"></i> Domisili: Surabaya</li>
                                        <li class="list-group-item" style="border: none;"><i class="bi bi-building"></i> Institut: University Telkom Surabaya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SYAFARUL PRIWANTORO\Downloads\JokiUTSpf\utsshafira\resources\views/profile.blade.php ENDPATH**/ ?>