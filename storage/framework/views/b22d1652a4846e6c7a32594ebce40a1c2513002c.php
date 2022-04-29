<?php
$logo_add = App\Models\LogoManager::where('title','favicon')->first();

// dd($logo_add);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amea Today</title>


    <link rel="icon" href="<?php echo e((!empty($logo_add->image))?
        asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:10px; height:10px;" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/tabs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/cdn/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/cdn/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/cdn/animated.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <style>
        .carousel-3d-slide {
            height: unset !important;
        }

        .carousel-3d-slide {
            box-shadow: 0 6px 6px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .carousel-3d-slide.right-1 {
            opacity: 0.6 !important;
        }

        .carousel-3d-slide.right-2 {
            opacity: 0.2 !important;
        }

        .carousel-3d-slide.left-1 {
            opacity: 0.6 !important;
        }

        .carousel-3d-slide.left-2 {
            opacity: 0.2 !important;
        }

        .prev[data-v-05517ad0] {
            left: 244px !important;
            top: 0px !important;
        }

        .next[data-v-05517ad0] {
            right: 225px !important;
            top: 0px !important;
        }

        .Next slide span {
            font-size: 20px;
        }

        .carousel-3d-container .next span {
            font-size: 40px;
        }

        .carousel-3d-container .prev span {
            font-size: 40px;
        }

        .carousel-3d-slide {
            width: 400px !important;
        }
    </style>

</head>

<body>

    <?php echo $__env->make('Frontend.Layout.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Boday content  -->

    <?php echo $__env->yieldContent('content'); ?>




    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>





    <script src="<?php echo e(asset('frontend/assets/cdn/jquery2.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/cdn/jquery3.js')); ?>"></script>
    <script src="https://wlada.github.io/vue-carousel-3d/js/carousel-3d.umd.js"></script>
    <script src="https://wlada.github.io/vue-carousel-3d/js/vue.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo e(asset('frontend/assets/cdn/animated.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/cdn/bootstrap.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>


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
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Layout/master.blade.php ENDPATH**/ ?>