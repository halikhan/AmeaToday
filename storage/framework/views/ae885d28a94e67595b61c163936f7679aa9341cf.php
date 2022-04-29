<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid p-0">
    <div class="row m-0">
       <div class="col-12 p-0">
          <div class="login-card">
             <div>

        <div class="login-main">
        <form class="theme-form" method="POST" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>
            <div><a class="logo" href="<?php echo e(route('login')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/login.png')); ?>" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt="looginpage"></a></div>

            <h4>Reset Your Password</h4>

            <!-- Email Address -->
            
            <div class="form-group">
                <label class="col-form-label">Email Address</label>
                <input class="form-control" type="email" id="email" :value="old('email')"  name="email" required="" placeholder="Test@gmail.com">
             </div>
             <button class="btn btn-primary btn-block" type="submit">Email Password Reset Link</button>
            
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>