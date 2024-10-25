<?php $__env->startSection('content'); ?>
<h2 class="text-2xl font-bold mb-4"><?php echo e($book->title); ?></h2>

<div class="mb-4">
    <strong>Text:</strong>
    <p><?php echo e($book->text); ?></p>
</div>

<div class="mb-4">
    <strong class="flex justify-between items-center">
        Reviews
        <form action="<?php echo e(route('reviews.store', $book->id)); ?>" method="POST" class="flex">
            <?php echo csrf_field(); ?>
            <input type="text" name="review_text" placeholder="Add a review..." required class="border rounded px-2 py-1">
            <button type="submit" class="bg-blue-500 text-black rounded px-2 py-1 ml-2">Submit</button>
        </form>
    </strong>
    <ul>
        <?php $__currentLoopData = $book->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($review->review_text); ?>

            <?php if($review->user_id === Auth::id()): ?>
            <a href="<?php echo e(route('reviews.edit', $review->id)); ?>" style="color: blue">Edit</a>
            <form action="<?php echo e(route('reviews.destroy', $review->id)); ?>" method="POST" class="inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" style="color: red"class="hover:underline">Delete</button>
            </form>
            <?php endif; ?>
            <hr style="border: 1px solid black;">
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<a href="<?php echo e(route('books')); ?>" class="text-primary">Back to Books</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\programs\vs+code\codes\laravel\project\resources\views/books/show.blade.php ENDPATH**/ ?>