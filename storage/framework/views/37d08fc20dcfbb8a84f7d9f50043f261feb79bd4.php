<?php $__env->startSection('content'); ?>

<div class="main-div Pre-Festival-img">
    <div class="Pre-Festival-img">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="container">
            <?php $__currentLoopData = $getPreFestival; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div data-wow-delay="0.30s" class="first-section card-type-back-color mt2 wow bounceIn">
                <div class="pre-fextival-heading">
                    <h1><?php echo e($data->title); ?></h1>
                </div>
                <div class=" pre-fextival-heading for-width-p for-mobile-display mt2 for-fonr-size">
                    <?php echo $data->content; ?>

                </div>
                <?php echo $__env->make('Frontend.Layout.body.joinAmeaToday', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Pre-Festival.blade.php ENDPATH**/ ?>