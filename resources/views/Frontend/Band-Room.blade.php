

@extends('Frontend.Layout.master')
@section('content')

<div class="main-div Band-Room-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getBandRoom as $data)

            <div class="first-section card-type-back-color wow bounceIn">
                <div>
                    {{-- <h1 class="">The Band Room</h1> --}}
                    <h1 class="">{{ $data->title }}</h1>
                </div>
                 <div class="for-width-p for-mobile-display mt4">{!!$data->content!!}</div>
                {{-- <div class="for-width-p for-mobile-display mt4">
                    <p>All instrumentalist, vocalist, strings and dancers, you now have the ability to be discovered
                        by
                        the nations best music programs without the long expensive road trips and stressful
                        evaluation wait times.
                        This all-in-one tool makes it as easy as 1-2-3.</p>
                    <br>
                    <p> First, create your free profile with up to 30 seconds of your best mini-solo. Second, upload
                        your profile
                        onto the AMEA's student talent band room. And third, relax and be discovered by hundreds of
                        the best
                        music school, dance institutions and talent recruiters in the country.
                    </p>
                </div> --}}
                <div class="for-removing-margin italic-font mt4">
                    <h1>Lets get started!</h1>
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach

        </div>
        @include('Frontend.Layout.body.footer')
    </div>

</div>


@endsection
