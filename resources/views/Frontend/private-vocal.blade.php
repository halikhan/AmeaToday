@extends('Frontend.Layout.master')
@section('content')

<div class="main-div prvt-vocal-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getprivateVocal as $data)
            <div class="first-section  mt7">
                <div class="wow fadeIn">
                    <h1 class="for-decres-font-size">{{ $data->title }}</h1>
                </div>
                <div class="for-width-p mt4 color-whit-p wow fadeInLeft">
                    {!!$data->content!!}
                </div>
                <div class="mt5 wow fadeIn">
                    <h1>Lets get started!</h1>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section  mt7">
                <div class="wow fadeIn">
                    <h1 class="for-decres-font-size">Choose from our list of highly qualified Vocal <br> instructors</h1>
                </div>
                <div class="for-width-p mt4 color-whit-p wow fadeInLeft">
                    <p>The AMEA has assemble a select number of highly qualified and professional
                        vocal talents that ranges from the beginning chorus singer, to the advance
                        baritone concerto. You now can choose instructors from many different
                        countries, practices and styles, or the local favorite. Our virtual platform gives
                        you access to one of the largest music communities in the world. </p>
                </div>
                <div class="mt5 wow fadeIn">
                    <h1>Lets get started!</h1>
                </div>
                <div data-wow-delay="0.20s" class="center-logo mt7 wow bounceIn for-class-relative">
                    <span class="for-text-over-logo">Join AMEAtoday</span>
                    <a href="{{ route('amea-today') }}"> <img src="{{ asset('frontend/assets/image/1x/assets9.webp') }}" alt=""></a>
                </div>
            </div>
        </div> --}}

        @include('Frontend.Layout.body.footer')
    </div>

</div>
@endsection
