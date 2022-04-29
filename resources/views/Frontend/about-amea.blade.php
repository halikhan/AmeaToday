@extends('Frontend.Layout.master')
@section('content')
{{-- about-amea-img --}}
{{-- <div class="main-div about-amea-img" style="background: url({{ asset('storage/uploads/cms/'.$getabout[0]['image'], ) }})"> --}}
    <div class="main-div about-amea-img">
    <div class="private-inst">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>

        <div class="container">
            {{-- @foreach ( $getabout as $about) --}}
            <div  data-wow-delay="0.30s" class="first-section card-type-back-color mt2 wow bounceIn">
                <div class="">
                    {{-- <h1>About the AMEA</h1> --}}
                    <h1>{{ $getabout[0]['title'] }}</h1>
                    {{-- <p style="height: 300; width: 300px;">{{ $getabout[0]['image'] }}</p> --}}
                </div>
                <div data-wow-delay="0.30s" class="for-width-p for-mobile-display mt4 wow fadeIn">
                    {!!$getabout[0]['content']!!}
                    </div>
                {{-- <div data-wow-delay="0.30s" class="for-width-p for-mobile-display mt4 wow fadeIn">
                    <p>The American Music Educators Association (AMEA) is a "all-in-one" educational hub that
                        caters to the unique needs of music educators, students, and enthusiasts of all musical
                        levels
                        and disciplines. </p>
                    <br>
                    <p>The AMEA has created a comprehensive portal that allows music students to be discovered
                        by hundreds of university recruiters on one platform, while allowing access to some of the
                        most talented private instructors from around the country.
                    </p>
                    <br>
                    <p>For the grade school educator that's looking for the best evaluation of their program, the
                        AMEA has collected some of the most experienced music directors in the country, and with
                        the "Pre-Evaluation" tool the AMEA has made it affordable to have any music program, dance
                        routine or solo performance evaluated by some of the best and most experienced in the
                        field. </p>
                    <br>
                    <p>For the college student looking to start a career as an educator, the AMEA has created the
                        Ambassador recruiting program that not only makes recruiting easier, but it also allows for
                        the recruiter to have a better understanding as to what it takes to deal with issues like
                        parental concerns, event scheduling, effective fund raising and local community promotions
                        all while growing and maintaining a program, this is field study at it's best</p>
                    <br>
                    <p>The American Music Educators Association is a community designed for music education
                        by music educators. </p>
                    <br>
                    <p>Join the AMEAtoday, because culture starts with us.
                        ​</p>
                </div> --}}


                {{-- <div data-wow-delay="0.20s" class="center-logo mt7 wow bounceIn for-class-relative">
                    <span class="for-text-over-logo">Join AMEAtoday</span>
                    <a href="{{ route('amea-today') }}"> <img src="{{ asset('frontend/assets/image/1x/assets9.webp') }}" alt=""></a>
                </div> --}}
                @include('Frontend.Layout.body.joinAmeaToday')
            </div>
            {{-- @endforeach --}}

        </div>
        @include('Frontend.Layout.body.footer')
    </div>

</div>


@endsection
