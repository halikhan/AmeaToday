@extends('user_dashboard.layouts.user-master')
@section('content')

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        @if(Session::has('message'))
        <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message') }}</p>
        @endif
        <form action="{{ route('User_Profile_update', $edit_data->id) }}" enctype="multipart/form-data"
            method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1> @if (Auth::user()->type == 2)Student
                            @elseif (Auth::user()->type == 3)Coach
                            @elseif (Auth::user()->type == 4)Evaluator
                            @endif
                            -Profile</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="name" id="" value="{{ $edit_data->name }}"
                            placeholder="First Name">
                    </div>
                    @error('name')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('name') }}
                        </p>
                    @enderror
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="last_name" value="{{ $edit_data->last_name }}" id=""
                            placeholder="last Name">
                    </div>
                    @error('last_name')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('last_name') }}
                        </p>
                    @enderror
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="email" name="email" value="{{ $edit_data->email }}"
                            placeholder="Email">
                    </div>
                    @error('email')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('email') }}
                        </p>
                    @enderror
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="address" value="{{ $edit_data->address }}"
                            placeholder="Address">
                    </div>
                    @error('address')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('address') }}
                        </p>
                    @enderror
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="login-content2 placeholder-white">
                        <input type="text" name="contact" value="{{ $edit_data->contact }}"
                            placeholder="Contact">
                    </div>
                    @error('contact')
                        <p class="help-block" style="color: red">
                            {{ $errors->first('contact') }}
                        </p>
                    @enderror
                </div>
                <div class="col-lg-12 mt8 for-removed-margin">
                    <div class="d-flex justify-content-end mt2">
                        <a href="checkout.html" class="black-btn-width"><button
                                class="black-btn" onClick="window.location.reload();">Update</button></a>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection
