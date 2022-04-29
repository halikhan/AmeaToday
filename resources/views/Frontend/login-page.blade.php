@extends('Frontend.Layout.master')
@section('content')

<div class="main-div instructor-img">
    
    <div class="">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color">

                <form class="form theme-form"id="" action="{{ route("FrontendUser_login") }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="login-box box-grey-backcolor">


                    <div class="login-content wow bounceIn">
                        <h2>Log In</h2>
                        <span>New to this site?<a href="{{ route('signUp') }}">Sign Up</a></span>

                        <input type="email" name="email" id="" placeholder="Email">
                        @error('email')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('email') }}
                        </p>
                        @enderror
                        <input type="password" name="password" id="" placeholder="Password">
                        @error('password')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('password') }}
                        </p>
                        @enderror
                        @if (Route::has('create_new_password'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('create_new_password') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                         @endif
                        {{-- <a href="{{ route('create_new_password') }}" class="mt3 forget-link">Forgot password?</a> --}}
                        <a href="" class="for-button-width"><button class=" mt3 color-trans-button button-back-color wow bounceIn">Log In</button></a>
                    </div>

                </div>
                </form>
            </div>
        </div>

        @include('Frontend.Layout.body.footer')
    </div>

</div>
@endsection
