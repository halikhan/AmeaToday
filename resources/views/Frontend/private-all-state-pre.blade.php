@extends('Frontend.Layout.master')
@section('content')

<div class="main-div private-all-state-img">
    <div class="private-inst private-all-state-img">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getPrivateallStatePre as $data)

            <div class="first-section  mt7">
                <div class="for-color-black-text wow fadeInRight">
                    <h1 class="for-decres-font-size">{{ $data->title }}</h1>

                </div>

                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    {!!$data->content!!}
                </div>
                <div class="mt5 for-color-black-text wow bounceIn">
                    <h1>Lets get started!</h1>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section  mt7">
                <div class="for-color-black-text wow fadeInRight">
                    <h1 class="for-decres-font-size">Choose from our list of highly qualified private <br>
                        instrumental instructors</h1>

                </div>
                <div class="all-state-heading mt3 wow fadeIn">
                    <span>(ALL-STATE PREP)</span>
                </div>
                <div class="for-width-p mt4 for-color-black-text wow fadeInLeft">
                    <p>The AMEA has assemble a select number of highly qualified and
                        professional instrumental and vocal instructors that will assist you on all
                        your all-state needs.  From choosing the right percussion rudiments, to
                        advance sight-singing.  You now can choose instructors from many
                        different countries and practices, or the local favorite.  Our virtual
                        platform gives you access to one of the largest music communities in the
                        world.   </p>
                </div>
                <div class="mt5 for-color-black-text wow bounceIn">
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
