<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('user_dashboard.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <div>
        <?php echo $__env->make('user_dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="mt7 d-flex">
            <?php echo $__env->make('user_dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </div>

    <?php echo $__env->make('user_dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        <?php if(Session::has('UserMessage')): ?>
        var type = "<?php echo e(Session::get('alert-type','info')); ?>"
        switch(type){
        case 'info':
        toastr.info(" <?php echo e(Session::get('UserMessage')); ?> ");
        break;
        case 'success':
        toastr.success(" <?php echo e(Session::get('UserMessage')); ?> ");
        break;
        case 'warning':
        toastr.warning(" <?php echo e(Session::get('UserMessage')); ?> ");
        break;
        case 'error':
        toastr.error(" <?php echo e(Session::get('UserMessage')); ?> ");
        break;
        }
        <?php endif; ?>
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/user_dashboard/layouts/user-master.blade.php ENDPATH**/ ?>