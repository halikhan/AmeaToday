

<?php
$logo_add = App\Models\LogoManager::where('title','logo')->first();

// dd($logo_add);
?>

<div data-wow-delay="0.20s" class="center-logo mt7 wow bounceIn for-class-relative">
    <span class="for-text-over-logo">Join AMEAtoday</span>
    <a href="<?php echo e(route('AmeaToday')); ?>"> <img src="<?php echo e(asset('storage/uploads/logo/'.$logo_add->image)); ?>" alt=""></a>
</div>



<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Layout/body/joinAmeaToday.blade.php ENDPATH**/ ?>