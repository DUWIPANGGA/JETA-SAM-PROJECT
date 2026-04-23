<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>JETA Konveksi</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('images/logo.svg')); ?>">
</head>

<body>
    <div class="font-sans bg-[url('/images/bg.png')] w-full min-h-screen bg-repeat bg-[length:50px_50px]">
        <?php echo $__env->make('layout.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('main'); ?>
        <?php echo $__env->make('layout.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <script>
    const rawData = localStorage.getItem('user_data');

    if (rawData) {
        const userData = JSON.parse(rawData);
        console.log(userData.name);
        
    }
</script>
        <?php echo $__env->yieldContent('script'); ?>
    
</body>

</html>
<?php /**PATH D:\Herd\JETA-SAM-PROJECT\resources\views/Layout/app.blade.php ENDPATH**/ ?>