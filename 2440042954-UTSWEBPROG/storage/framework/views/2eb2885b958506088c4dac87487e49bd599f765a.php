<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="background-color: #AA8B56; height: 100vh;">
    <div class="pt-3">
        <div class="container text-white p-3" style="background-color: #395144;">
            <h3><?php echo e($user->name); ?></h3>
            <h3>Address - <?php echo e($user->address); ?></h3>
            <h3>Phone - <?php echo e($user->phone); ?></h3>
            <h3>Email - <?php echo e($user->email); ?></h3>
        </div>
        <div class="container d-flex justify-content-center">
            <?php $__currentLoopData = $user->book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card p-0 my-2 mx-2" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x1650/?<?php echo e($book->image); ?>" class="card-img-top img" style="height: 400px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($book->title); ?></h5>
                        <h6>By</h6>
                        <h5><?php echo e($book->author); ?></h5>
                        <a href="/bookdetail/<?php echo e($book->id); ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2440042954-UTSWEBPROG\resources\views/publisherdetail.blade.php ENDPATH**/ ?>