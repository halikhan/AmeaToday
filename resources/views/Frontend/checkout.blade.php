
@extends('Frontend.Layout.master')
@section('content')

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            @include('Frontend.Layout.body.navbar')

            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color ">
                    <div class="checkout-heading mt2">
                        <h1>Checkout</h1>
                    </div>
                    <div class="order-box-line mt1">
                        <span></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 padding-for-left-right wow bounceIn">
                            <div class="checkout-content d-flex">
                                <div class="check-mark-img">
                                    <img src="{{ asset('frontend/assets/1x/checkmark.png') }}" alt="">
                                </div>
                                    <p>Sign up</p>
                            </div>
                            <div class="checkout-content">
                                <p>Sign in as a abc@example.com</p>
                            </div>
                            <div class="checkout-input">
                                <label for="">Email</label>
                                <input type="text">
                            </div>
                            <div class="checkout-input">
                                <label for="">First name</label>
                                <input type="text">
                            </div>
                            <div class="checkout-input">
                                <label for="">Last name</label>
                                <input type="text">
                            </div>
                            <div class="checkout-input">
                                <label for="">Address</label>
                                <input type="text">
                            </div>
                            <div class="checkout-input">
                                <label for="">City</label>
                                <input type="text">
                            </div>
                            <div class="checkout-input">
                                <label for="">Country</label>
                                <input type="text">
                            </div>
                            <div class="checkout-input">
                                <label for="">Zip Code</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 wow bounceIn">
                            <div class="box-grey-backcolor mb3">
                                <div class="order-box-content">
                                    <h5>Plan</h5>
                                    <h5>AMEA Today</h5>
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
                                    <h5>$19.99</h5>
                                </div>
                                <div class="order-box-content mt1">
                                    <h5>Sales Tax ( 7 %) </h5>
                                    <h5>$1.40</h5>
                                </div>
                                <div class="box-line mt2">
                                    <span></span>
                                </div>
                                <div class="order-box-content mt3 mb3">
                                    <h5>Billed Yearly</h5>
                                    <h5>$21.39</h5>
                                </div>
                            </div>
                            <div class="mt7">
                                <a href="{{ route('AmeaToday_buy-now') }}" class="btn-width"><button
                                        class="black-btn">Buy Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('Frontend.Layout.body.footer')
        </div>

    </div>


    @endsection
