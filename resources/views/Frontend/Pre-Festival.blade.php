@extends('Frontend.Layout.master')
@section('content')

<div class="main-div Pre-Festival-img">
    <div class="Pre-Festival-img">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            @foreach ( $getPreFestival as $data)
            <div data-wow-delay="0.30s" class="first-section card-type-back-color mt2 wow bounceIn">
                <div class="pre-fextival-heading">
                    <h1>{{ $data->title }}</h1>
                </div>
                <div class=" pre-fextival-heading for-width-p for-mobile-display mt2 for-fonr-size">
                    {!!$data->content!!}
                </div>
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            @endforeach
        </div>
        {{-- <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color mt2 wow bounceIn">
                <div class="pre-fextival-heading">
                    <h1 class="pre-fextival-heading">Pre-Festival Evaluations</h1>
                </div>
                <div class="pre-fextival-heading">
                    <h3 class="pre-fextival-heading">At your fingertips</h3>
                </div>
                <div class="for-width-p for-mobile-display mt2 for-fonr-size">

                    <p>Regardless of your level of performance, directors now have access to some of the top music
                        evaluators in
                        the business. </p>
                    <br>
                    <br>
                    <p>Your state's Music Educators Associations (MEA's) have always been a source of stress for the
                        serious
                        director, whether it's beginning chorus, intermediate jazz band or advance symphonic
                        ensembles, getting
                        the right evaluators can cost more than some budgets allow.</p>
                    <br>
                    <p>
                        <span>We've just made it a lot easier. </span> Now directors can record their performances, choose
                        from some of the top music evaluators in the business, and be evaluated without the cost of
                        expensive
                        visits. This tool gives all directors, regardless of their location, access to better
                        evaluations and higher
                        performance scores.
                    </p>
                    <br>
                    <h4 class="second-haeding">Read some of the comments from members</h4>
                </div>
                <div class="comment-content">
                    <p>"This will no-doubt increase performance ratings for programs everywhere".</p>
                    <span>-Dr, M, Goodman, Dir. of Bands - The Scholarship Institute</span>
                    <p>"A Game-Changer!!!"</p>
                    <span>-Prof. William Nasser - Ret, music teacher</span>
                    <p>"OMG Thank You!!! Our kids deserve this"!</p>
                    <span>-Mrs. L Whitley - Booster Club Pres.</span>
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
