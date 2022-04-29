<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        <?php if(Session::has('message')): ?>
        var type = "<?php echo e(Session::get('alert-type','info')); ?>"
        switch(type){
        case 'info':
        toastr.info(" <?php echo e(Session::get('message')); ?> ");
        break;
        case 'success':
        toastr.success(" <?php echo e(Session::get('message')); ?> ");
        break;
        case 'warning':
        toastr.warning(" <?php echo e(Session::get('message')); ?> ");
        break;
        case 'error':
        toastr.error(" <?php echo e(Session::get('message')); ?> ");
        break;
        }
        <?php endif; ?>
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


<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/user/footer-scripts.blade.php ENDPATH**/ ?>