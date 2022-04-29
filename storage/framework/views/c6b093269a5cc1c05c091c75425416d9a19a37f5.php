
<?php
$getfacebook = App\Models\sociallink::where('type',1)->first();
$getinstagram = App\Models\sociallink::where('type',2)->first();
$getlinkedin = App\Models\sociallink::where('type',3)->first();

?>
<footer class="for-transparent-color mt2 for-mac-marging">
    <div class="container">
        <div class="footer">
            <div class="d-flex justify-content-between footer-mobile-styling">
                <div class="d-flex footer-social-logo">
                    <div class="footer-img"><a href="<?php echo e($getfacebook->social_media); ?>" target="_blank"><img src="<?php echo e(asset('frontend/assets/image/1x/face.png')); ?>" alt=""></a>
                    </div>
                    <div class="footer-img"><a href="<?php echo e($getinstagram->social_media); ?>" target="_blank"><img src="<?php echo e(asset('frontend/assets/image/1x/insta.png')); ?>" alt=""></a>
                    </div>
                    <div class="footer-img"><a href="<?php echo e($getlinkedin->social_media); ?>" target="_blank"><img src="<?php echo e(asset('frontend/assets/image/1x/in.png')); ?>" alt=""></a></div>
                </div>
                <?php $__currentLoopData = $getCopyrights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Copyright): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="footer-content">
                    <span><?php echo e($Copyright->email_one); ?></span>
                    <span>Design & Development by
                        <a href="https://designprosusa.com/" target="_blank"> Design Pros
                            USA</a></span>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Layout/body/footer.blade.php ENDPATH**/ ?>