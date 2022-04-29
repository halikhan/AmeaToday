<?php
$logo_add = App\Models\LogoManager::where('title', 'footer')->first();

// dd($logo_add);
?>
<header class="header">
    <div class="container">
        <div class="row mainRow">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-xs-12">
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <div class="nav-logo">
                            <img src="<?php echo e(asset('storage/uploads/logo/' . $logo_add->image)); ?>" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-8 menu-large-screen">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 col-8 menu-large-screen">
                <div class="header-nav">
                    <ul>
                        <li>
                            <a class="link_header" href="<?php echo e(route('FrontendUser_logout')); ?>"><button
                                    class="log-out-button"><i class="fa fa-sign-out" aria-hidden="true"></i>LOG
                                    OUT</button></a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/user_dashboard/header.blade.php ENDPATH**/ ?>