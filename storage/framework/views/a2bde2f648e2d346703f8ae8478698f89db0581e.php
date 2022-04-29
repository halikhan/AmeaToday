<?php $__env->startSection('content'); ?>

<style>
    #pageloader {
        background:rgb(129 129 129 / 17%);
        display: none;
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
        top: 0;
        left: 0;
    }

    #pageloader img {
        left: 50%;
        /* margin-left: -32px;
                margin-top: -32px; */
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        filter: grayscale(1);
    }

</style>
      <div id="pageloader">
        <img src="<?php echo e(asset('frontend/assets/1x/Preloader.gif')); ?>" alt="processing..." />
    </div>
<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color">
                <form class="form theme-form" role="form" id="regiterForm" action="<?php echo e(route("FrontendUser_store")); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                <div class="login-box box-grey-backcolor">
                    <div class="login-content wow bounceIn">
                        <h2>Sign Up</h2>
                        <span>Already a memeber?<a href="<?php echo e(route('login-page')); ?>">Log In</a></span>
                        <input type="text" name="name" id="" placeholder="First Name">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help-block" style="color: red">
                            <?php echo e($errors->first('name')); ?>

                        </p>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input type="text" name="last_name" id="" placeholder="Last Name">
                        
                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help-block" style="color: red">
                            <?php echo e($errors->first('last_name')); ?>

                        </p>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input type="email" name="email" id="" placeholder="Email">
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

                        <input type="password" name="password" id="" placeholder="Password">
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
                        <input type="password" name="confirm_password" id="" placeholder="Confirm Password">
                        <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help-block" style="color: red">
                            <?php echo e($errors->first('confirm_password')); ?>

                        </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <select name="type" class="" size="1">
                            <option selected disabled>User Type</option>
                            <option value="2">Student</option>
                            <option value="3">Coach</option>
                            <option value="4">Evaluator</option>
                         </select>
                         <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="help-block" style="color: red">
                             <?php echo e($errors->first('type')); ?>

                         </p>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <a href="" class="for-button-width">
                            <button type="submit" class=" mt3 color-trans-button button-back-color wow bounceIn">Sign Up</button>
                        </a>

                    </div>
                </div>
            </form>
            </div>
        </div>

        <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
<script>

    $("#regiterForm").submit(function() {
        $("#pageloader").fadeIn();
    });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/signup.blade.php ENDPATH**/ ?>