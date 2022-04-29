@extends('Frontend.Layout.master')
@section('content')

<div class="main-div educ-by-laws-img">
    <div class="private-inst educ-by-laws-img">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>

        <div class="container">
            @foreach ( $getEducatorslaws as $data)
            <div data-wow-delay="0.30s"  class="first-section  mt7 for-ipad-margin-top wow fadeIn">
                <div class="for-color-black-text">
                    <h1>{{ $data->title }}</h1>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p>{!!$data->content!!}</p>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>

        {{-- <div class="container">
            <div data-wow-delay="0.30s"  class="first-section  mt7 for-ipad-margin-top wow fadeIn">
                <div class="for-color-black-text">
                    <h1>By-laws</h1>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p>This is where you protect your organization or program.
                        Many will say this is one of the most important steps to a successful  program.
                        Get this right!</p>
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

