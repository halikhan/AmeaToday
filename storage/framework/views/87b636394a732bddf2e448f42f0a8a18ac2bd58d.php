<div
class="<?php echo e(Request::is('home') ? 'grey-background for-home-nav-back color-tranparent' : 'grey-background for-transparent-color'); ?>">

    <div class="container">
        <div class="nav-bar-main">
            <div  class="first-nav-bar">
                <div id="google_translate_element">
                    
                </div>

                

             
             <?php if(Auth::check() && Auth::user()->type != 1): ?>
                <a href="<?php echo e(route('AmeaToday_user-dashboard')); ?>">
                    <div class="log-box">
                        <div class="profile-img">

                            <img src="<?php echo e(asset('frontend/assets/image/1x/Asset 8.png')); ?>" alt="">

                        </div>
                        <div class="login-text">
                        <span>User Profile</span>
                        </div>
                    </div>
                    </a>
                    <?php else: ?>
                    <a href="<?php echo e(route('login-page')); ?>">
                    <div class="log-box">
                        <div class="profile-img">
                            <img src="<?php echo e(asset('frontend/assets/image/1x/Asset 8.png')); ?>" alt="">
                        </div>
                        <div class="login-text">
                        <span> Log In</span>
                        </div>
                    </div>
                </a>
             <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<div class="<?php echo e(Request::is('home') ? 'li-navbar menu-large-screen' : 'li-navbar menu-large-screen-transparent-color for-transparent-color'); ?>">
    <div class="container">
        <div class="second-navbar">
            <ul class="nav-bar-ul">
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('home')); ?>" class="<?php echo e(Route::currentRouteName()=='home' ? 'active' : ''); ?>">Home</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('about-amea')); ?>" class="<?php echo e(Route::currentRouteName()=='about-amea' ? 'active' : ''); ?>">About AMEA</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('Band-Room')); ?>" class="<?php echo e(Route::currentRouteName()=='Band-Room' ? 'active' : ''); ?>">Student Brand Room</a>
                        </button>
                    </div>
                </li>


                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('educators')); ?>" class="<?php echo e(Route::currentRouteName()=='educators' ? 'active' : ''); ?>">Educators(K-12)</a>
                        </button>
                        <div class="dropdown-content">
                            <a href="<?php echo e(route('educators-Boosters')); ?>" class="<?php echo e(Route::currentRouteName()=='educators-Boosters' ? 'active' : ''); ?>">Boosters</a>
                            <a href="<?php echo e(route('educators-by-laws')); ?>" class="<?php echo e(Route::currentRouteName()=='educators-by-laws' ? 'active' : ''); ?>">By-Laws</a>
                            <a href="<?php echo e(route('educators-fund-raising')); ?>" class="<?php echo e(Route::currentRouteName()=='educators-fund-raising' ? 'active' : ''); ?>">Fund Raising</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('Pre-Festival')); ?>" class="<?php echo e(Route::currentRouteName()=='Pre-Festival' ? 'active' : ''); ?>">Pre-Festival Evaluators</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('private-instructors')); ?>" class="<?php echo e(Route::currentRouteName()=='private-instructors' ? 'active' : ''); ?>">Private
                                Instructors</a>
                        </button>
                        <div class="dropdown-content">
                            <a href="<?php echo e(route('private-instrumental')); ?>" class="<?php echo e(Route::currentRouteName()=='private-instrumental' ? 'active' : ''); ?>">Instrumental</a>
                            <a href="<?php echo e(route('private-dance')); ?>" class="<?php echo e(Route::currentRouteName()=='private-dance' ? 'active' : ''); ?>">Dance</a>
                            <a href="<?php echo e(route('private-vocal')); ?>" class="<?php echo e(Route::currentRouteName()=='private-vocal' ? 'active' : ''); ?>">Vocal</a>
                            <a href="<?php echo e(route('private-all-state-pre')); ?>" class="<?php echo e(Route::currentRouteName()=='private-all-state-pre' ? 'active' : ''); ?>">All State Prep</a>
                            <a href="<?php echo e(route('amea-today')); ?>" class="<?php echo e(Route::currentRouteName()=='amea-today' ? 'active' : ''); ?>">Become a Private Instructor</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="<?php echo e(route('Arrangers-Composer')); ?>" class="<?php echo e(Route::currentRouteName()=='Arrangers-Composer' ? 'active' : ''); ?>">Arrangers/Composer</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">More
                        </button>
                        <div class="dropdown-content">
                            <a href="<?php echo e(route('more-singers')); ?>" class="<?php echo e(Route::currentRouteName()=='more-singers' ? 'active' : ''); ?>">Singer/Songwritter</a>
                            <a href="<?php echo e(route('Music-Producers')); ?>" class="<?php echo e(Route::currentRouteName()=='Music-Producers' ? 'active' : ''); ?>">Music Producers/Enginners</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Layout/body/navbar.blade.php ENDPATH**/ ?>