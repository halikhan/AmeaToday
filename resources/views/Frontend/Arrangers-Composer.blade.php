@extends('Frontend.Layout.master')
@section('content')

<div class="main-div prvt-vocal-img">
    <div>
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getArrangersComposer as $data)

            <div class="first-section Arrangers-content  mt7 for-ipad-margin-top">
                <div data-wow-delay="0.10s" class="d-flex mt3 wow fadeInLeft">
                    <span>{{ $data->title }}</span>
                </div>
                <div data-wow-delay="0.50s" class="for-width-p mt4 wow fadeInLeft">
                    {!!$data->content!!}
                </div>
                <div class="mt5 lets-get-heding wow fadeIn">
                    <h1>Lets get started!</h1>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section Arrangers-content  mt7 for-ipad-margin-top">
                <div data-wow-delay="0.10s" class="d-flex mt3 wow fadeInLeft">
                    <span>Join one of the largest communities of
                        arrangers/composers from around the world</span>
                </div>
                <div data-wow-delay="0.50s" class="for-width-p mt4 wow fadeInLeft">
                    <p>The AMEA has assemble a select number of highly qualified and professional
                        instrumentalist that ranges from the beginning flute instructor, to the advance
                        oboe professor. You now can choose instructors from many different countries
                        and practices, or the local favorite. Our virtual platform gives you access to one
                        of the largest music communities in the world. </p>
                </div>
                <div class="mt5 lets-get-heding wow fadeIn">
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
