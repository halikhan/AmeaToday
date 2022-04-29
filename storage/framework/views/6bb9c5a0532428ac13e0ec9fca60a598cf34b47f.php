<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('Frontend.user.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <div>
        <?php echo $__env->make('Frontend.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="mt7 d-flex">
            <?php echo $__env->make('Frontend.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </div>

    <?php echo $__env->make('Frontend.user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/user/user-master.blade.php ENDPATH**/ ?>