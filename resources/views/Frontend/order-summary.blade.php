
@extends('Frontend.Layout.master')
@section('content')

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color">
                    <div class="order-heading mt3 mb3">
                        <h1>Order Summary</h1>
                    </div>
                    <div class="box-grey-backcolor mt2 wow bounceIn">
                        <div class="order-box-content">
                            <h4>Plan</h4>
                            <h4>AMEA Today</h4>
                        </div>
                        <div class="order-box-content mt1">
                            <h4>Duration</h4>
                            <h4>Until Canceled</h4>
                        </div>
                        <div class="box-line mt1">
                            <span></span>
                        </div>
                        <div class="order-box-content mt5">
                            <h4>Subtotal</h4>
                            <h4>$19.99</h4>
                        </div>
                        <div class="order-box-content mt1">
                            <h4>Sales Tax ( 7 %) </h4>
                            <h4>$1.40</h4>
                        </div>
                        <div class="box-line mt2">
                            <span></span>
                        </div>
                        <div class="order-box-content mt3 mb3">
                            <h4>Billed Yearly</h4>
                            <h4>$21.39</h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt2">
                        <a href="{{ route('AmeaToday_checkout') }}" class="btn-width"><button class="black-btn">Checkout</button></a>
                    </div>

                    <!-- <div class="access-heading">
                        <h1>Get Access to AMEA Today</h1>
                    </div>
                    <div class="row mt4">
                        <div class="col-lg-4">
                            <div data-wow-delay="0.60s" class="card-main wow bounceIn">
                                <div class="card-content text-center">
                                    <h4>AMEA Student</h4>
                                    <span class="dollor-sign">$</span>
                                    <h1>19.99</h1>
                                    <span>Every year</span>
                                    <p>Perfect for virtual private lessons and
                                        college recruitment.</p>
                                </div>
                                <div class="for-position-abs">
                                    <a href="" class="d-flex"><button class="select-card-btn">Select</button></a>
                                    <div class="card-bottom-content-div">
                                        <p>Virtual private instructors and create
                                            a recruitment profile</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div data-wow-delay="0.50s" class="card-main wow bounceIn">
                                <div class="card-content text-center">
                                    <h4>Private Instructor</h4>
                                    <span class="dollor-sign">$</span>
                                    <h1>29.99</h1>
                                    <span>Every year</span>
                                </div>
                                <div class="for-position-abs">
                                    <a href="" class="d-flex"><button class="select-card-btn">Select</button></a>
                                    <div class="card-bottom-content-div">
                                        <p>Teach students from anywhere, at
                                            your convenience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div data-wow-delay="0.40s" class="card-main wow bounceIn">
                                <div class="card-content text-center">
                                    <h4>Music Educators</h4>
                                    <span class="dollor-sign">$</span>
                                    <h1>39.99</h1>
                                    <span>Every year</span>
                                    <p>Frim K- College</p>

                                </div>
                                <div class="for-position-abs">
                                    <a href="" class="d-flex"><button class="select-card-btn">Select</button></a>
                                    <div class="card-bottom-content-div">
                                        <p>Recruit students from anywhere in
                                            the country.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div data-wow-delay="0.20s" class="card-main wow bounceIn">
                                <div class="card-content text-center">
                                    <h4>Arrangers/Composer</h4>
                                    <span class="dollor-sign">$</span>
                                    <h1>19.99</h1>
                                    <span>Every year</span>
                                </div>
                                <div class="for-position-abs">
                                    <a href="" class="d-flex"><button class="select-card-btn">Select</button></a>
                                    <div class="card-bottom-content-div">
                                        <p>Build your following and conduct
                                            your virtual classrooms.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div data-wow-delay="0.10s" class="card-main wow bounceIn">
                                <div class="card-content text-center">
                                    <h4>Singer/Songwriter</h4>
                                    <span class="dollor-sign">$</span>
                                    <h1>34.99</h1>
                                    <span>Every year</span>
                                </div>
                                <div class="for-position-abs">
                                    <a href="" class="d-flex"><button class="select-card-btn">Select</button></a>
                                    <div class="card-bottom-content-div">
                                        <p>Build your following and connect
                                            with voices everywhere.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div data-wow-delay="0.30s" class="card-main wow bounceIn">
                                <div class="card-content text-center">
                                    <h4>Music Producer</h4>
                                    <span class="dollor-sign">$</span>
                                    <h1>49.99</h1>
                                    <span>Every year</span>
                                    <p>Connect with producers/engineers
                                        anywhere in the world</p>

                                </div>
                                <div class="for-position-abs">
                                    <a href="" class="d-flex"><button class="select-card-btn">Select</button></a>
                                    <div class="card-bottom-content-div">
                                        <p>Hold virtual classes or find talent
                                            anywhere.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            @include('Frontend.Layout.body.footer')
        </div>

    </div>


    @endsection
