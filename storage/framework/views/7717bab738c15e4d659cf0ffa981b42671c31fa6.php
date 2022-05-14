<?php $__env->startSection('content'); ?>

 
<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color ">
                    <div class="checkout-heading mt2">
                        <h1>Checkout</h1>
                    </div>
                    <div class="order-box-line mt1">
                        <span></span>
                    </div>
                    <form action="<?php echo e(route('checkout')); ?>" enctype="multipart/form-data" method="get">
                        <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6 padding-for-left-right wow bounceIn">
                            <div class="checkout-content d-flex">
                                <div class="check-mark-img">
                                    <img src="<?php echo e(asset('frontend/assets/1x/checkmark.png')); ?>" alt="">
                                </div>
                                    <p>Sign up</p>
                            </div>
                            <div class="checkout-content">

                                


                                <?php if(Session::has('User_Signup')): ?>
                                <p>Sign in as a <?php echo e(Session::get('User_Signup')['email']); ?>

                                </p>
                                <?php else: ?>
                                <p>Sign in as a abc@example.com</p>
                                <?php endif; ?>

                            </div>
                            <div class="checkout-input">
                                <label for="">Email</label>
                                <input id="mail-email" name="email" type="text">
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
                            <div class="checkout-input">
                                <label for="">First name</label>
                                <input name="name"  type="text">
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
                            <div class="checkout-input">
                                <label for="">Last name</label>
                                <input name="last_name" type="text">
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
                            <div class="checkout-input">
                                <label for="">Address</label>
                                <input name="address" type="text">
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
                            <div class="checkout-input">
                                <label for="">City</label>
                                <input name="city" type="text">
                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help-block" style="color: red">
                                        <?php echo e($errors->first('city')); ?>

                                    </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="checkout-input">
                                <label for="">Country</label>
                                <input name="country" type="text">
                                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help-block" style="color: red">
                                        <?php echo e($errors->first('country')); ?>

                                    </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="checkout-input">
                                <label for="">Zip Code</label>
                                <input name="zip_code" type="number">
                                <?php $__errorArgs = ['zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="help-block" style="color: red">
                                        <?php echo e($errors->first('zip_code')); ?>

                                    </p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-lg-6 wow bounceIn">
                            <div class="box-grey-backcolor mb3">
                                <div class="order-box-content">
                                    <h5>Plan</h5>
                                    <h4><?php echo e(@$getOrderSummary->title); ?></h4>
                                <input value="<?php echo e(@$getOrderSummary->title); ?>" name="package_title" type="hidden" placeholder="email">

                                </div>
                                <div class="order-box-content mt1">
                                    <h5>Duration</h5>
                                    <h5>Until Canceled</h5>
                                </div>
                                <div class="box-line mt1">
                                    <span></span>
                                </div>
                                <div class="order-box-content mt5">
                                    <h5>Subtotal</h5>
                                    <h4>$<?php echo e(@$getOrderSummary->amount); ?></h4>
                                </div>
                                <div class="order-box-content mt1">
                                    <h5>Sales Tax ( <?php echo e(@$getOrderSummary->sale_tax); ?> % ) </h5>
                                    <h4>$<?php echo e(@$getOrderSummary->total_tax); ?></h4>
                                </div>
                                <div class="box-line mt2">
                                    <span></span>
                                </div>
                                <div class="order-box-content mt3 mb3">
                                    <h5>Billed Yearly</h5>
                                    <h5>$<?php echo e(@$getOrderSummary->bill_yearly); ?></h5>
                                    <input value="<?php echo e(@$getOrderSummary->bill_yearly); ?>" name="package_amount" type="hidden" placeholder="email">
                                </div>
                            </div>
                            <div class="mt7">
                                
                                        <button  type="submit" class="black-btn">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </form>
                    
                </div>
            </div>
            <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/checkout.blade.php ENDPATH**/ ?>