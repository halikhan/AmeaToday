<?php $__env->startSection('content'); ?>
 
<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        <?php if(Session::has('message')): ?>
        <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
            <?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
        <form action="<?php echo e(route('User_Profile_update', $edit_data->id)); ?>" enctype="multipart/form-data"
            method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>
                            <?php if(Auth::user()->type == 2): ?>Student
                            <?php elseif(Auth::user()->type == 3): ?>Coach
                            <?php elseif(Auth::user()->type == 4): ?>Evaluator
                            <?php endif; ?>
                            -Profile
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="name" id="" value="<?php echo e($edit_data->name); ?>"
                            placeholder="First Name">
                    </div>
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
                </div>
                <div class="col-lg-6">
                </div>

                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="last_name" value="<?php echo e($edit_data->last_name); ?>" id=""
                            placeholder="last Name">
                    </div>
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
                </div>
                <div class="col-lg-6">
                </div>

                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="email" name="email" value="<?php echo e($edit_data->email); ?>"
                            placeholder="Email">
                    </div>
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
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="address" value="<?php echo e($edit_data->address); ?>"
                            placeholder="Address">
                    </div>
                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help-block" style="color: red">
                            <?php echo e($errors->first('address')); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="contact" value="<?php echo e($edit_data->contact); ?>"
                            placeholder="Contact">
                    </div>
                    <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="help-block" style="color: red">
                            <?php echo e($errors->first('contact')); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a href="checkout.html" class="black-btn-width"><button
                                class="black-btn" onClick="window.location.reload();">Update</button></a>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_dashboard.layouts.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/user_dashboard/profile/edit.blade.php ENDPATH**/ ?>