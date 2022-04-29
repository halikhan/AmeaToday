@extends('Frontend.Layout.master')
@section('content')

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            @include('Frontend.Layout.body.navbar')

            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color">
                    <div class="checkout-heading mt3 mb3">
                        <h1>Payment</h1>
                    </div>
                    <div class="order-box-line mt1">
                        <span></span>
                    </div>
                    <div class="box-payment-style">
                        <div class="card-line">
                            <div class="credit-card">
                                <input type="radio" name="fav_language" id="" value="credit-cards">
                                <label for="">Credit/Debit Cards</label>
                            </div>
                            <div class="visacard-img">
                                <img src="{{ asset('frontend/assets/image/1x/card.png') }}" alt="">
                            </div>
                        </div>
                        <div class="cards-cardits for-grey-color wow bounceIn">
                            <div class="payment-content">
                                <h4>Your payment is secure.</h4>
                            </div>
                            <div class="payment-input">
                                <label for="">Card number</label>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="Expiration-input">
                                        <label for="">Expiration date</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="Expiration-input">
                                        <label for="">Security code (CVV)</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="card-holder-input">
                                <label for="">Card holder name</label>
                                <input type="text">
                            </div>
                            <div class="payment-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">Save card details for next time</label>
                            </div>
                        </div>
                        <div  class="PayPal-line">
                            <div class="credit-card">
                                <input type="radio" name="fav_language" id="" value="paypal">
                                <label for="">PayPal</label>
                                <div class="paypal-image">
                                    <img src="{{ asset('frontend/assets/image/1x/paypal-logo.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                        <a href="{{ route('home') }}" class="btn-width"><button class="black-btn">Pay Now</button></a>
                    </div>
                </div>
            </div>
            @include('Frontend.Layout.body.footer')
        </div>

    </div>


    @endsection
