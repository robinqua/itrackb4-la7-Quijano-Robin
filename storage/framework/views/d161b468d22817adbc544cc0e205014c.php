<?php $__env->startSection('title', 'All Books'); ?>

<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('books.create')); ?>" class="btn btn-success btn-sm">+ Add a Book</a>
    <br><br>

    <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary btn-sm">Clear filters</a>
    <br><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Publisher</th>
                <th>Rating</th>
                <th>Pages</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <a href="<?php echo e(route('books.show', $book['id'])); ?>"><?php echo e($book['title']); ?></a>
                    </td>
                    <td><?php echo e($book['genre']); ?></td>
                    <td><?php echo e($book['publisher']); ?></td>
                    <td><?php echo e($book['rating']); ?>/5</td>
                    <td><?php echo e($book['pages']); ?></td>
                    <td><?php echo e($book['year']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7">There are no books to show right now</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\libsys-portal\resources\views/books/index.blade.php ENDPATH**/ ?>