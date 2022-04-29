@extends('Frontend.Layout.master')
@section('content')

<div class="main-div instructor-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getprivateInstructors as $data)
            <div class="first-section card-type-back-color wow bounceIn mt2">
                <div class="wow fadeIn">
                    <h1>{{ $data->title }}</h1>
                </div>
                <div class="for-width-p for-mobile-display mt4">
                    {!!$data->content!!}
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')

            </div>
            @endforeach

        </div>
        {{-- <div class="container">
            <div class="first-section card-type-back-color wow bounceIn mt2">
                <div class="wow fadeIn">
                    <h1>Private Instructors</h1>
                </div>
                <div class="for-width-p for-mobile-display mt4">
                    <p>The AMEA has assembled many of the finest private instructors from around the country. This
                        virtual
                        learning tool makes it easy and affordable to continue learning music while both the student
                        and the instructor remain safe from the current Covid-19 pandemic. </p>
                    <br>
                    <p>Students are now able to receive private instructions on all brass and woodwind instruments,
                        percussion,
                        piano, strings, vocals and multiple forms of dance all from the virtual safety and
                        convenience of home.
                    </p>
                </div>
                <div class="for-removing-margin mt4 italic-font">
                    <h1>Lets get started!</h1>
                </div>
                <div class="italic-font">
                    <h1>Join AMEA today!</h1>
                </div>
                <div class="mt3">
                    <a href="{{ route('amea-today') }}"><button class="color-trans-button right-arrow">Click Here to Join</button></a>
                </div>

            </div>
        </div> --}}
        @include('Frontend.Layout.body.footer')
    </div>

</div>


@endsection


