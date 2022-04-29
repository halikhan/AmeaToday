<?php $__env->startSection('content'); ?>

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color">
                    <form class="theme-form" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                    <div class="login-box box-grey-backcolor">
                        <div class="login-content wow bounceIn">
                            <h2>Create New Password</h2>
                            <span>Please enter your email address</span>
                            <input type="email" name="email"  id="email" :value="old('email')" placeholder="Email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="help-block" style="color: red">
                                <?php echo e($errors->first('email')); ?>

                            </p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                            <button type="submit" class="for-button-width mt3 color-trans-button button-back-color wow bounceIn">Create Password</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/frontend/create-password.blade.php ENDPATH**/ ?>