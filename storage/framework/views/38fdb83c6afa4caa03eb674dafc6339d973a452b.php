<?php $__env->startSection('content'); ?>

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <div class="row">
                <div class="col-lg-12">
                    <h1>User-profile</h1>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="First Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" placeholder="last Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="password" placeholder="Password">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a href="checkout.html" class="black-btn-width"><button
                                class="black-btn">Update</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
            aria-labelledby="v-pills-profile-tab">
            <?php if(Session::has('message')): ?>
                <p class="alert
                <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?></p>
                <?php endif; ?>
                <form action="" enctype="multipart/form-data"
                    method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs-main-heading mt3 mb3">
                                <h1>User-Profile</h1>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-content2 placeholder-white">
                                <input type="text" name="name" id="" value=""
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
                            <div class="login-content2 placeholder-white">
                                <input type="text" name="last_name" value="" id=""
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
                            <div class="login-content2 placeholder-white">
                                <input type="email" name="email" value=""
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
                            <div class="login-content2 placeholder-white">
                                <input type="text" name="address" value=""
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
                            <div class="login-content2 placeholder-white">
                                <input type="text" name="contact" value=""
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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_dashboard.layouts.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/user_dashboard/profile/index.blade.php ENDPATH**/ ?>