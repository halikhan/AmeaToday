<?php $__env->startSection('content'); ?>

<div class="main-div more-singers-img">
    <div class="">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="container">
            <?php $__currentLoopData = $getmoreSingers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="first-section Arrangers-content  mt7 for-ipad-margin-top">
                <div class="d-flex mt3 wow fadeIn">
                    <span class="font-weight"><?php echo e($data->title); ?></span>
                </div>
                <div class="for-width-p mt4 wow fadeInLeft">
                    <?php echo $data->content; ?>

                </div>
                <div class="mt5 lets-get-heding wow fadeInRight">
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

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/more-singers.blade.php ENDPATH**/ ?>