<?php $__env->startSection('content'); ?>

<div class="main-div private-inst-img">
    <div class="private-inst">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        <div class="container">
            <?php $__currentLoopData = $getprivateInstrumental; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="first-section  mt7">
                <div class="wow fadeInLeft">
                    <h1 class="for-decres-font-size"><?php echo e($data->title); ?></h1>

                </div>
                <div class="for-width-p mt4 wow fadeInLeft">
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


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/private-instrumental.blade.php ENDPATH**/ ?>