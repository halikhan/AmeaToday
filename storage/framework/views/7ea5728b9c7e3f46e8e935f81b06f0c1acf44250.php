<?php $__env->startSection('content'); ?>

<div class="main-div instructor-img" >
    <div class="">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color mt2">
                <div class="access-heading">
                    <h1>Get Access to AMEA Today</h1>
                </div>

                <div class="row mt4">
                    <?php $__currentLoopData = $getpackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div data-wow-delay="0.10s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4><?php echo e($packages->title); ?></h4>
                                <span class="dollor-sign">$</span>
                                <h1><?php echo e($packages->amount); ?></h1>
                                <span><?php echo e($packages->type); ?></span>
                                <p><?php echo e($packages->mid_details); ?></p>
                            </div>
                            <div class="for-position-abs">
                                <a href="<?php echo e(route('order-summary',$packages->id)); ?>" class="d-flex"><button class="select-card-btn" >Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p><?php echo e($packages->deatails); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                

            </div>
        </div>
        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/acees-amea-today.blade.php ENDPATH**/ ?>