<?php $__env->startSection('content'); ?>

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        <?php if(Session::has('message')): ?>
        <p class="alert
        <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
        <form action="<?php echo e(route('User_Password_update', $edit_data->id)); ?>" enctype="multipart/form-data"
            method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>User-Password</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="password" name="password" placeholder="Password">
                    </div>
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
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </div>
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
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a type="submit" class="black-btn-width"><button
                                class="black-btn">Update</button></a>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_dashboard.layouts.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/user_dashboard/UserPassword/edit.blade.php ENDPATH**/ ?>