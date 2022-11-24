<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="background-color: #AA8B56;">
    <div class="container pb-5">
        <h1 class="list text-white font-weight-bold text-center pt-1">Book Detail</h1>
        <div class="card my-4">
            <img src="https://source.unsplash.com/1600x1650/?<?php echo e($book->image); ?>" class="card-img-top img" alt="">
            <div class="card-body">
                <p class="card-title">Title : <?php echo e($book->title); ?></p>
                <p>Author : <?php echo e($book->author); ?></p>
                <p>Publisher : <?php echo e($book->publishers->name); ?> </p>
                <p>Year : <?php echo e($book->year); ?></p>
                <p>Synopsis : </p>
                <p><?php echo e($book->synopsis); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2440042954-UTSWEBPROG\resources\views/bookdetail.blade.php ENDPATH**/ ?>