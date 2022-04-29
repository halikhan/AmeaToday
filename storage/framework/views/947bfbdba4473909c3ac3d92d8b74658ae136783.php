<?php $__env->startSection('content'); ?>


    <div class="main-div about-amea-img">
    <div class="private-inst">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        <div class="container">
            
            <div  data-wow-delay="0.30s" class="first-section card-type-back-color mt2 wow bounceIn">
                <div class="">
                    
                    <h1><?php echo e($getabout[0]['title']); ?></h1>
                    
                </div>
                <div data-wow-delay="0.30s" class="for-width-p for-mobile-display mt4 wow fadeIn">
                    <?php echo $getabout[0]['content']; ?>

                    </div>
                


                
                <?php echo $__env->make('Frontend.Layout.body.joinAmeaToday', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            

        </div>
        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/about-amea.blade.php ENDPATH**/ ?>