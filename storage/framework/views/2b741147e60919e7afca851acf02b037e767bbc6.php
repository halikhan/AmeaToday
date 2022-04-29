<?php $__env->startSection('content'); ?>

<div class="main-div prvt-dance-img">
    <div class="private-inst">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="container">
            <?php $__currentLoopData = $getprivateDance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="first-section  mt7 wow fadeInleft">
                <h1 class="for-decres-font-size"><?php echo e($data->title); ?></h1>
                <div class="for-para-border mt3">
                    <div class="for-width-p color-whit-p wow fadeInLeft">
                        <?php echo $data->content; ?>

                    </div>
                </div>
                <div class="mt5 wow fadeIn">
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

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/private-dance.blade.php ENDPATH**/ ?>