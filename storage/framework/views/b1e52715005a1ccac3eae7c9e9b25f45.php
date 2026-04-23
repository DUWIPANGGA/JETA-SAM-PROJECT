<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>JETA Konveksi</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('images/logo.svg')); ?>">
</head>

<body>
    <div class="bg-[url('/images/bg.png')] w-full min-h-screen bg-repeat bg-[length:50px_50px]">
        <?php echo $__env->make('layout.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('main'); ?>
    </div>
</body>

</html>
<?php /**PATH E:\Julian\magang\JETA-SAM-PROJECT\resources\views/layout/app.blade.php ENDPATH**/ ?>