@extends('Frontend.Layout.master')
@section('content')

<div class="main-div educ-fund-raising-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $geteducatorsFundRaising as $data)
            <div class="first-section fund-raised mt7 for-ipad-margin-top ">
                <div data-wow-delay="0.30s"  class="wow fadeIn">
                    <h1>{{ $data->title }}</h1>
                </div>
                <div class="for-width-p mt4 color-whit-p wow fadeInLeft">
                    <p>{!!$data->content!!}</p>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section fund-raised mt7 for-ipad-margin-top ">
                <div data-wow-delay="0.30s"  class="wow fadeIn">
                    <h1>Fun Fund Raising</h1>
                </div>
                <div class="for-width-p mt4 color-whit-p wow fadeInLeft">
                    <p class="span-blue-color font-weight ">The AMEA has put the "f<span>un" back</span> in fund raising.  We have lots of
                        fun, easy, and inexpensive ways to raise money and keep your
                        <span>program o</span>n budget.</p>
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


