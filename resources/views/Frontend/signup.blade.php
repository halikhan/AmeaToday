@extends('Frontend.Layout.master')
@section('content')

<style>
    #pageloader {
        background:rgb(129 129 129 / 17%);
        display: none;
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
        top: 0;
        left: 0;
    }

    #pageloader img {
        left: 50%;
        /* margin-left: -32px;
                margin-top: -32px; */
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        filter: grayscale(1);
    }

</style>
      <div id="pageloader">
        <img src="{{asset('frontend/assets/1x/Preloader.gif') }}" alt="processing..." />
    </div>
<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            @include('Frontend.Layout.body.navbar')
        </div>

        <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color">
                <form class="form theme-form" role="form" id="regiterForm" action="{{ route("FrontendUser_store") }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="login-box box-grey-backcolor">
                    <div class="login-content wow bounceIn">
                        <h2>Sign Up</h2>
                        <span>Already a memeber?<a href="{{ route('login-page') }}">Log In</a></span>
                        <input type="text" name="name" id="" placeholder="First Name">
                        @error('name')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('name') }}
                        </p>
                         @enderror
                        <input type="text" name="last_name" id="" placeholder="Last Name">
                        {{-- <input type="text" name="name" id="" placeholder="Full Name"> --}}
                        @error('last_name')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('last_name') }}
                        </p>
                         @enderror
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
                        <input type="password" name="confirm_password" id="" placeholder="Confirm Password">
                        @error('confirm_password')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('confirm_password') }}
                        </p>
                        @enderror
                        <select name="type" class="" size="1">
                            <option selected disabled>User Type</option>
                            <option value="2">Student</option>
                            <option value="3">Coach</option>
                            <option value="4">Evaluator</option>
                         </select>
                         @error('type')
                         <p class="help-block" style="color: red">
                             {{ $errors->first('type') }}
                         </p>
                         @enderror
                        <a href="" class="for-button-width">
                            <button type="submit" class=" mt3 color-trans-button button-back-color wow bounceIn">Sign Up</button>
                        </a>

                    </div>
                </div>
            </form>
            </div>
        </div>

        @include('Frontend.Layout.body.footer')
    </div>

</div>
@endsection


@push('scripts')
<script>

    $("#regiterForm").submit(function() {
        $("#pageloader").fadeIn();
    });
    </script>
@endpush

