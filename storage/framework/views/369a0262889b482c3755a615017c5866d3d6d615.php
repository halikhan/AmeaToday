<?php $__env->startSection('content'); ?>

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color">
                    <div class="login-box box-grey-backcolor">
                        <div class="login-content wow bounceIn">
                            <h2>Create New Password</h2>
                            <span>Please enter your email address</span>
                            <input type="email" name="" id="" placeholder="Email">
                            <a href="" class="for-button-width">
                                <button class=" mt3 color-trans-button button-back-color wow bounceIn">Create Password</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/frontend/creat-password.blade.php ENDPATH**/ ?>