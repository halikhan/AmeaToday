<?php $__env->startSection('content'); ?>

<div class="main-div educ-Boosters-img">
    <div class="private-inst">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        <div class="container">
            <?php $__currentLoopData = $getEducatorsBooster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="first-section  mt7 for-ipad-margin-top">
                <div data-wow-delay="0.30s" class="for-color-black-text wow fadeIn">
                    <h1><?php echo e($data->title); ?></h1>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p><?php echo $data->content; ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('Frontend.Layout.body.joinAmeaToday', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/educators-Boosters.blade.php ENDPATH**/ ?>