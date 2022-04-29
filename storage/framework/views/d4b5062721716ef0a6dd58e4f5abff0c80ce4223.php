<?php $__env->startSection('content'); ?>

<div class="main-div prvt-vocal-img">
    <div>
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="container">
            <?php $__currentLoopData = $getArrangersComposer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="first-section Arrangers-content  mt7 for-ipad-margin-top">
                <div data-wow-delay="0.10s" class="d-flex mt3 wow fadeInLeft">
                    <span><?php echo e($data->title); ?></span>
                </div>
                <div data-wow-delay="0.50s" class="for-width-p mt4 wow fadeInLeft">
                    <?php echo $data->content; ?>

                </div>
                <div class="mt5 lets-get-heding wow fadeIn">
                    <h1>Lets get started!</h1>
                </div>
                <?php echo $__env->make('Frontend.Layout.body.joinAmeaToday', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        


        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Arrangers-Composer.blade.php ENDPATH**/ ?>