<?php $__env->startSection('content'); ?>

<div class="main-div instructor-img">

    <div class="">
        <div class="top-home-section">

            
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color">

                <form class="form theme-form" action="<?php echo e(route("FrontendUser_login")); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                <div class="login-box box-grey-backcolor">


                    <div class="login-content wow bounceIn">
                        <h2>Log In</h2>
                        <span>New to this site?<a href="<?php echo e(route('signUp')); ?>">Sign Up</a></span>

                        <input type="email" name="email"  placeholder="Email">
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
                        <input type="password" name="password"  placeholder="Password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help-block" style="color: red">
                            <?php echo e($errors->first('password')); ?>

                        </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php if(Route::has('create_new_password')): ?>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('create_new_password')); ?>">
                                <?php echo e(__('Forgot your password?')); ?>

                            </a>
                         <?php endif; ?>
                        
                        <a href="" class="for-button-width"><button class=" mt3 color-trans-button button-back-color wow bounceIn">Log In</button></a>
                    </div>

                </div>
                </form>
            </div>
        </div>

        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/login-page.blade.php ENDPATH**/ ?>