<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="icon" type="image/x-icon" href="./assets/image/1x/Asset 9.png">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="tabs.css">
    <link rel="stylesheet" href="./assets/cdn/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/cdn/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/cdn/animated.css">
</head>

<body>
    <div>
        <header class="header">
            <div class="container">
                <div class="row mainRow">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 col-xs-12">
                        <div class="logo">
                            <a href="./home.html">
                                <div class="nav-logo">
                                    <img src="./assets/image/1x/Asset 9.png" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-8 menu-large-screen">
                        <!-- <div class="header-nav">
                            <ul>
                                <li>
                                    <a class="link_header" href="home.html">Home</a>
                                </li>
                                <li>
                                    <a class="link_header active" href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a class="link_header" href="services.html">Services</a>
                                </li>
                                <li>
                                    <a class="link_header" href="get-in-touch.html">Contact Us</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8 col-8 menu-large-screen">
                        <div class="header-nav">
                            <ul>
                                <li>
                                    <a class="link_header" href=""><button class="log-out-button"><i
                                                class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT</button></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6 col-6 menu-small-screen">
                        <div class="toggle-small-screen">
                            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                                aria-controls="offcanvasWithBackdrop">
                                <img src="./assets/images/1x/ham-bar.png" alt="toggle">
                            </button>
                        </div>
                        <div class="offcanvas offcanvas-start mobile_menu_offcanvas" tabindex="-1"
                            id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                            <div class="offcanvas-header">
                                <div class="nav-logo mobile-sidenavbar">
                                    <img src="./assets/images/1x/logo.png" alt="">
                                </div>
                                <!-- <div class="logo">
                                <a href="./index.html">
                                    <img src="./assets/images/logo.png" alt="logo">
                                </a>
                            </div> -->
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="menus-offcanvas">
                                    <ul>
                                        <li>
                                            <a class="link_header" href="home.html">Home</a>
                                        </li>
                                        <li>
                                            <a class="link_header" href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a class="link_header" href="services.html">Services</a>
                                        </li>
                                        <li>
                                            <a class="link_header" href="get-in-touch.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="mt7 d-flex">
            <div class="tabs-side-bar-width">
                <div class="tabs-side-bar">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active for-cstm-tabs-button" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Home</button>
                        <button class="nav-link for-cstm-tabs-button" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile</button>
                        <button class="nav-link for-cstm-tabs-button" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Messages</button>
                        <button class="nav-link for-cstm-tabs-button" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Settings</button>
                    </div>
                </div>
            </div>
            <div class="for-content-tabs">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="row">
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
                            <div class="col-lg-12 mt8">
                                <div class="d-flex justify-content-end mt2">
                                    <a href="checkout.html" class="black-btn-width"><button class="black-btn">Update</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="row">
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
                            <div class="col-lg-12 mt8">
                                <div class="d-flex justify-content-end mt2">
                                    <a href="checkout.html" class="black-btn-width"><button class="black-btn">Update</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="row">
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
                            <div class="col-lg-12 mt8">
                                <div class="d-flex justify-content-end mt2">
                                    <a href="checkout.html" class="black-btn-width"><button class="black-btn">Update</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <div class="row">
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
                            <div class="col-lg-12 mt8">
                                <div class="d-flex justify-content-end mt2">
                                    <a href="checkout.html" class="black-btn-width"><button class="black-btn">Update</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <footer class="for-transparent-color mt2 for-mac-marging">
            <div class="container">
                <div class="footer">
                    <div class="d-flex justify-content-between footer-mobile-styling">
                        <div class="d-flex footer-social-logo">
                            <div class="footer-img"><a href="https://www.facebook.com/" target="_blank"><img
                                        src="./assets/image/1x/face.png" alt=""></a>
                            </div>
                            <div class="footer-img"><a href="https://www.instagram.com/" target="_blank"><img
                                        src="./assets/image/1x/insta.png" alt=""></a>
                            </div>
                            <div class="footer-img"><a href="https://www.linkedin.com/" target="_blank"><img
                                        src="./assets/image/1x/in.png" alt=""></a></div>
                        </div>
                        <div class="footer-content">
                            <span>2022 All copyrights reserved by AMEA -Today </span>
                            <a href="https://designprosusa.com/" target="_blank">Design & Development by Design Pros
                                USA</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
    </div>


    <script src="./assets/cdn/jquery2.js"></script>
    <script src="./assets/cdn/jquery3.js"></script>
    <script src="./assets/cdn/animated.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/cdn/bootstrap.min.js"></script>
    <script src="./main.js"></script>

</body>

</html>
