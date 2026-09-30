

<?php $__env->startSection('title', $book['title']); ?>

<?php $__env->startSection('content'); ?>
    <div class="card" style="max-width: 28rem;">
        <div class="card-body">
            <h2 class="card-title"><?php echo e($book['title']); ?></h2>
            <p class="card-text"><strong>Genre:</strong> <?php echo e($book['genre']); ?></p>
            <p class="card-text"><strong>Publisher:</strong> <?php echo e($book['publisher']); ?></p>
            <p class="card-text"><strong>Description:</strong> <?php echo e($book['description']); ?></p>
            <p class="card-text"><strong>Rating:</strong> <?php echo e($book['rating']); ?>/5</p>
            <p class="card-text"><strong>Pages:</strong> <?php echo e($book['pages']); ?></p>
            <p class="card-text"><strong>Year:</strong> <?php echo e($book['year']); ?></p>

            <a href="<?php echo e(route('books.index')); ?>" class="btn btn-primary">&larr; Back to all books</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\libsys-portal\resources\views/books/show.blade.php ENDPATH**/ ?>