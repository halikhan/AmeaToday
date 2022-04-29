
@extends('Frontend.Layout.master')
@section('content')

<div class="main-div educ-Boosters-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>

        <div class="container">
            @foreach ( $getEducatorsBooster as $data)
            <div class="first-section  mt7 for-ipad-margin-top">
                <div data-wow-delay="0.30s" class="for-color-black-text wow fadeIn">
                    <h1>{{ $data->title }}</h1>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p>{!!$data->content!!}</p>
                </div>
            </div>
            @endforeach
            @include('Frontend.Layout.body.joinAmeaToday')
        </div>
        {{-- <div class="container">
            <div class="first-section  mt7 for-ipad-margin-top">
                <div data-wow-delay="0.30s" class="for-color-black-text wow fadeIn">
                    <h1>Super Booster Organizations</h1>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p>The AMEA has assembled a multitude of great booster ideas and ways to
                        effectively support your program regardless of size or function. Here
                        you will find step-by-step instructions, diagrams, and even an open
                        forum where you can ask questions and make suggestions. Let's get
                        started.</p>
                </div>

            </div>
        </div> --}}
        @include('Frontend.Layout.body.footer')
    </div>

</div>
@endsection

