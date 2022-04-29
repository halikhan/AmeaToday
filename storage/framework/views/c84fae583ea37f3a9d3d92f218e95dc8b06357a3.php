<?php $__env->startSection('content'); ?>
<?php
$getCopyrights = App\Models\Config::where('email_type','Copyrights')->get();

// dd($logo_add);
?>
<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color">
        <form class="theme-form" method="POST" action="<?php echo e(route('password.update')); ?>">
            <?php echo csrf_field(); ?>
            <div class="login-box box-grey-backcolor">
                <div class="login-content wow bounceIn">
                    <h2>Password Reset</h2>
                            <span>Please enter your new password</span>
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">

            <!-- Email Address -->

            
            <input type="email" name="email" id="" placeholder="Email" value="<?php echo e($request->email); ?>">
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
            <!-- Password -->

            <input type="password" name="password" id="password" placeholder="Password">
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
            <!-- Confirm Password -->

             <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" />

            <button type="submit" class="for-button-width mt3 color-trans-button button-back-color wow bounceIn"><?php echo e(__('Reset Password')); ?></button>

        </div>
    </div>
        </form>
    </div>
</div>


<footer class="for-transparent-color mt2 for-mac-marging">
    <div class="container">
        <div class="footer">
            <div class="d-flex justify-content-between footer-mobile-styling">
                <div class="d-flex footer-social-logo">
                    <div class="footer-img"><a href="https://www.facebook.com/" target="_blank"><img
                                src="<?php echo e(asset('frontend/assets/image/1x/face.png')); ?>" alt=""></a>
                    </div>
                    <div class="footer-img"><a href="https://www.instagram.com/" target="_blank"><img
                                src="<?php echo e(asset('frontend/assets/image/1x/insta.png')); ?>" alt=""></a>
                    </div>
                    <div class="footer-img"><a href="https://www.linkedin.com/" target="_blank"><img
                                src="<?php echo e(asset('frontend/assets/image/1x/in.png')); ?>" alt=""></a></div>
                </div>
                <?php if($getCopyrights): ?>
                <?php $__currentLoopData = $getCopyrights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Copyright): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="footer-content">
                    <span><?php echo e($Copyright->email_one); ?></span>
                    <span>Design & Development by
                        <a href="https://designprosusa.com/" target="_blank"> Design Pros
                            USA</a></span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</footer>
</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>