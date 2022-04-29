@extends('Frontend.Layout.master')
@section('content')

<div class="main-div prvt-dance-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getprivateDance as $data)

            <div class="first-section  mt7 wow fadeInleft">
                <h1 class="for-decres-font-size">{{ $data->title }}</h1>
                <div class="for-para-border mt3">
                    <div class="for-width-p color-whit-p wow fadeInLeft">
                        {!!$data->content!!}
                    </div>
                </div>
                <div class="mt5 wow fadeIn">
                    <h1>Lets get started!</h1>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section  mt7 wow fadeInleft">

                <h1 class="for-decres-font-size">Choose from our list of highly qualified dance
                    instructors
                </h1>


                <div class="for-para-border mt3">
                    <div class="for-width-p color-whit-p wow fadeInLeft">
                        <p>The AMEA has assemble a select number of highly qualified and
                            professional dance choreographers and instructors that ranges from
                            the beginning ballerina, to the advance Hip-Hop director. You now
                            can choose choreographers from many different countries, practices
                            and styles, or your local favorite. Our virtual platform gives you access
                            to one of the largest dance communities in the world. </p>
                    </div>
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
