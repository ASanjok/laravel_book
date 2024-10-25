

<?php $__env->startSection('content'); ?>

    <!-- Кнопка для добавления новой книги -->
    <div class="mb-4">
        <a href="<?php echo e(route('books.create')); ?>" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
            <?php echo e(__('add book')); ?>

        </a>
    </div>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Text</th>
                <th class="py-2 px-4 border-b">Reviews</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="py-2 px-4 border-b">
                        <a href="<?php echo e(route('books.show', $book->id)); ?>" class="text-blue-500 hover:underline">
                            <?php echo e($book->title); ?>

                        </a>
                    </td>
                    <td class="py-2 px-4 border-b"><?php echo e(Str::limit($book->text, 100)); ?></td>
                    <td class="py-2 px-4 border-b"><?php echo e($book->reviews_count); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\programs\vs+code\codes\laravel\project\resources\views/books/index.blade.php ENDPATH**/ ?>