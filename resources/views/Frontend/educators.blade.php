

@extends('Frontend.Layout.master')
@section('content')

<div class="main-div educators-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getEducators as $data)
            <div class="first-section card-type-back-color mt2">
                <div data-wow-delay="0.30s"  class="Educators-heading for-ipad-margin-top wow fadeIn">
                    {{-- <h1>Educators (K-12)</h1>{{ $data->title }} --}}
                    <h1>{{ $data->title }}</h1>
                </div>
                <div class="for-width-p for-mobile-display mt4 wow fadeInLeft font-weight">{!!$data->content!!}</div>

                {{-- <div class="for-width-p for-mobile-display mt4 wow fadeInLeft font-weight">
                    <p>The AMEA has collected lots of helpful tips and advice to aid any music program from booster
                        club
                        set-ups, fund raising, and recruiting tips. The AMEA has partnered with some of the most
                        successful
                        elementary, middle, and high schools both public and private to assemble a variety of
                        techniques and
                        applications that will motivate, inspire, and challenge every user.</p>
                    <br>
                </div> --}}
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        @include('Frontend.Layout.body.footer')
    </div>

</div>


@endsection
