@extends('Frontend.Layout.master')
@section('content')

<div class="main-div music-img">
    <div class="">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getMusicProducers as $data)

            <div class="first-section Arrangers-content  mt7 for-ipad-margin-top">
                <div class="d-flex mt3 for-color-black-text wow fadeIn">
                    <span class="font-weight">{{ $data->title }}</span>
                </div>
                <div class="for-width-p mt4 wow fadeInLeft">
                    {!!$data->content!!}
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section Arrangers-content  mt7 for-ipad-margin-top">
                <div class="d-flex mt3 for-color-black-text wow fadeIn">
                    <span class="font-weight">Connect with some of the most well-known producers and engineers in the business</span>
                </div>
                <div class="for-width-p mt4 wow fadeInLeft">
                    <p>The AMEA has assemble a number of highly talented and professional singer/song writers that
                        ranges from the beginning enthusiast, to the advance professional performer. connect with
                        singers/song writers from many different countries, genres, styles and disciplines. Our
                        virtual platform gives you access to one of the largest music communities in the world.</p>
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
