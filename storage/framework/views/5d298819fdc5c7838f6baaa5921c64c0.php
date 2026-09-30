<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title', 'Books'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
    <div class="container mt-4">
        <h1 class="mb-3">Robin's Fiction</h1>

        <?php echo $__env->make('partials._nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <hr>

        <?php echo $__env->yieldContent('content'); ?>

        <hr>
        <p class="text-muted">Robin Quijano</p>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\libsys-portal\resources\views/layouts/app.blade.php ENDPATH**/ ?>