

<?php $__env->startSection('content'); ?>
    <h2 class="text-2xl font-bold mb-4">My Account</h2>

    <div class="mb-4">
        <strong>Name:</strong> <?php echo e($user->name); ?>

    </div>

    <div class="mb-4">
        <strong>Email:</strong> <?php echo e($user->email); ?>

    </div>

    <div class="mb-4">
        <strong>Joined on:</strong> <?php echo e($user->created_at->format('d M Y')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\programs\vs+code\codes\laravel\project\resources\views/account/index.blade.php ENDPATH**/ ?>