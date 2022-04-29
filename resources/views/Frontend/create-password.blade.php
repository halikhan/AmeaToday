@extends('Frontend.Layout.master')
@section('content')

<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            @include('Frontend.Layout.body.navbar')
        </div>
            <div class="container">
                <div data-wow-delay="0.30s" class="first-section card-type-back-color">
                    <form class="theme-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="login-box box-grey-backcolor">
                        <div class="login-content wow bounceIn">
                            <h2>Create New Password</h2>
                            <span>Please enter your email address</span>
                            <input type="email" name="email"  id="email" :value="old('email')" placeholder="Email">
                            @error('email')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('email') }}
                            </p>
                            @enderror
                            {{-- <a href="" class="for-button-width">
                                <button type="submit" class="for-button-width mt3 color-trans-button button-back-color wow bounceIn">Create Password</button>
                            </a> --}}
                            <button type="submit" class="for-button-width mt3 color-trans-button button-back-color wow bounceIn">Create Password</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            @include('Frontend.Layout.body.footer')
        </div>
    </div>

    @endsection

