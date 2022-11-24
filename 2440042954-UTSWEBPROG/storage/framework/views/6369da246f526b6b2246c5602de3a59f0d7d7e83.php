<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="background-color: #AA8B56;">
    <div class="container pb-5" >
        <h2 class="text-white font-weight-bold text-center pt-1">Book List</h2>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card p-0 mx-auto my-2" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1600x1650/?<?php echo e($book->image); ?>" class="card-img-top img" style="height: 400px">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2440042954-UTSWEBPROG\resources\views/pages/home.blade.php ENDPATH**/ ?>