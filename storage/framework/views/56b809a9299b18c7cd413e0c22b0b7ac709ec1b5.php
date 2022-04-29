
<header class="header">
    <div class="col-lg-12 menu-small-screen">
        <div class="toggle-small-screen for-top-mins">
            <div class="for-posistion-abs">
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                    aria-controls="offcanvasWithBackdrop">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="offcanvas offcanvas-start mobile_menu_offcanvas" tabindex="-1"
            id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
            <div class="offcanvas-header">
                <div class="nav-logo">
                    <img src="<?php echo e(asset('frontend/assets/image/1x/Asset 9.png')); ?>" alt="">
                </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="menus-offcanvas">
                    <ul class="">
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="<?php echo e(route('home')); ?>">Home</a>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="<?php echo e(route('about-amea')); ?>">About AMEA</a>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="<?php echo e(route('Band-Room')); ?>">Student Brand Room</a>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="educators.html">Educators(K-12)</a>
                                </button>
                                <div class="dropdown-content">
                                    <a href="educators-Boosters.html">Boosters</a>
                                    <a href="educators-by-laws.html">By-Laws</a>
                                    <a href="educators-fund-raising.html">Fund Raising</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="Pre-Festival.html">Pre-Festival
                                        Evaluators</a>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="private-instructors.html">Private Instructors</a>
                                </button>
                                <div class="dropdown-content">
                                    <a href="private-instrumental.html">Instrumental</a>
                                    <a href="private-dance.html">Dance</a>
                                    <a href="private-vocal.html">Vocal</a>
                                    <a href="private-all-state-pre.html">All State Prep</a>
                                    <a href="acees-amea-today.html">Become a Private Instructor</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><a
                                        href="Arrangers-Composer.html">Arrangers/Composer</a>
                                </button>

                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">More
                                </button>
                                <div class="dropdown-content">
                                    <a href="more-singers.html">Singer/Songwritter</a>
                                    <a href="Music-Producers.html">Music Producers/Enginners</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/Layout/body/header.blade.php ENDPATH**/ ?>