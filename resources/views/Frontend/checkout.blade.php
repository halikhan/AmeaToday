
@extends('Frontend.Layout.master')
@section('content')

 {{-- <?php
$checkout = Session::get('checkout');
dd($checkout)
?> --}}
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
                    <form action="{{ route('checkout') }}" enctype="multipart/form-data" method="get">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6 padding-for-left-right wow bounceIn">
                            <div class="checkout-content d-flex">
                                <div class="check-mark-img">
                                    <img src="{{ asset('frontend/assets/1x/checkmark.png') }}" alt="">
                                </div>
                                    <p>Sign up</p>
                            </div>
                            <div class="checkout-content">

                                {{-- @if (Auth::user())
                                <p>Sign in as a {{ @$getUser->email }}
                                </p>
                                @else
                                <p>Sign in as a abc@example.com</p>
                                @endif --}}


                                @if (Session::has('User_Signup'))
                                <p>Sign in as a {{Session::get('User_Signup')['email']}}
                                </p>
                                @else
                                <p>Sign in as a abc@example.com</p>
                                @endif

                            </div>
                            <div class="checkout-input">
                                <label for="">Email</label>
                                <input id="mail-email" name="email" type="text">
                                @error('email')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('email') }}
                                    </p>
                                @enderror
                            </div>
                            <div class="checkout-input">
                                <label for="">First name</label>
                                <input name="name"  type="text">
                                @error('name')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('name') }}
                                    </p>
                                @enderror
                            </div>
                            <div class="checkout-input">
                                <label for="">Last name</label>
                                <input name="last_name" type="text">
                                @error('last_name')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('last_name') }}
                                    </p>
                                @enderror
                            </div>
                            <div class="checkout-input">
                                <label for="">Address</label>
                                <input name="address" type="text">
                                @error('address')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('address') }}
                                    </p>
                                @enderror
                            </div>
                            <div class="checkout-input">
                                <label for="">City</label>
                                <input name="city" type="text">
                                @error('city')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('city') }}
                                    </p>
                                @enderror
                            </div>
                            <div class="checkout-input">
                                <label for="">Country</label>
                                <input name="country" type="text">
                                @error('country')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('country') }}
                                    </p>
                                @enderror
                            </div>
                            <div class="checkout-input">
                                <label for="">Zip Code</label>
                                <input name="zip_code" type="number">
                                @error('zip_code')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('zip_code') }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 wow bounceIn">
                            <div class="box-grey-backcolor mb3">
                                <div class="order-box-content">
                                    <h5>Plan</h5>
                                    <h4>{{ @$getOrderSummary->title }}</h4>
                                <input value="{{ @$getOrderSummary->title }}" name="package_title" type="hidden" placeholder="email">

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
                                    <h4>${{ @$getOrderSummary->amount }}</h4>
                                </div>
                                <div class="order-box-content mt1">
                                    <h5>Sales Tax ( {{ @$getOrderSummary->sale_tax }} % ) </h5>
                                    <h4>${{ @$getOrderSummary->total_tax }}</h4>
                                </div>
                                <div class="box-line mt2">
                                    <span></span>
                                </div>
                                <div class="order-box-content mt3 mb3">
                                    <h5>Billed Yearly</h5>
                                    <h5>${{ @$getOrderSummary->bill_yearly }}</h5>
                                    <input value="{{ @$getOrderSummary->bill_yearly }}" name="package_amount" type="hidden" placeholder="email">
                                </div>
                            </div>
                            <div class="mt7">
                                {{-- <a href="{{ route('AmeaToday_buy-now') }}" class="btn-width"><button
                                        class="black-btn">Buy Now</button></a> --}}
                                        <button  type="submit" class="black-btn">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </form>
                    {{-- <div class="row">
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
                    </div> --}}
                </div>
            </div>
            @include('Frontend.Layout.body.footer')
        </div>

    </div>


    @endsection
