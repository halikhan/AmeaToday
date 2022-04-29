<?php $__env->startSection('content'); ?>

<div class="main-div educ-by-laws-img">
    <div class="private-inst educ-by-laws-img">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        <div class="container">
            <?php $__currentLoopData = $getEducatorslaws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div data-wow-delay="0.30s"  class="first-section  mt7 for-ipad-margin-top wow fadeIn">
                <div class="for-color-black-text">
                    <h1><?php echo e($data->title); ?></h1>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p><?php echo $data->content; ?></p>
                </div>
                <?php echo $__env->make('Frontend.Layout.body.joinAmeaToday', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        

        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/educators-by-laws.blade.php ENDPATH**/ ?>