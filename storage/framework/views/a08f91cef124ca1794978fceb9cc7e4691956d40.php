<?php $__env->startSection('content'); ?>

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container">
                <?php $__currentLoopData = $getOrderSummaryPagecontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color">
                    <div class="order-heading mt3 mb3">
                        <h1><?php echo e($data->title); ?></h1>
                    </div>

                    <div class="box-grey-backcolor mt2 wow bounceIn">
                        <div class="order-box-content">
                            <h4>Plan</h4>
                            <h4><?php echo e($getOrderSummary->title); ?></h4>
                        </div>
                        <div class="order-box-content mt1">
                            <h4>Duration</h4>
                            <h4>Until Canceled</h4>
                        </div>
                        <div class="box-line mt1">
                            <span></span>
                        </div>
                        <div class="order-box-content mt5">
                            <h4>Subtotal</h4>
                            <h4>$<?php echo e($getOrderSummary->amount); ?></h4>
                        </div>
                        <div class="order-box-content mt1">
                            <h4>Sales Tax ( <?php echo e($getOrderSummary->sale_tax); ?> %) </h4>
                            <h4>$<?php echo e($getOrderSummary->total_tax); ?></h4>
                        </div>
                        <div class="box-line mt2">
                            <span></span>
                        </div>
                        <div class="order-box-content mt3 mb3">
                            <h4>Billed Yearly</h4>
                            <h4>$<?php echo e($getOrderSummary->bill_yearly); ?></h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt2">
                        <a href="<?php echo e(route('AmeaToday_checkout',$getOrderSummary->id)); ?>" class="btn-width"><button class="black-btn">Checkout</button></a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/order-summary.blade.php ENDPATH**/ ?>