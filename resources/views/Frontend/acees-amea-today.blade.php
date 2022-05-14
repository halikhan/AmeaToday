@extends('Frontend.Layout.master')
@section('content')
{{-- <?php
$data['User_Signup'] = Session::get('User_Signup');
dd($data)
?> --}}
<div class="main-div instructor-img" >
    <div class="">
        <div class="top-home-section">

            {{-- @include('Frontend.Layout.body.header') --}}
            @include('Frontend.Layout.body.navbar')

        </div>
        <div class="container">
            <div data-wow-delay="0.30s" class="first-section card-type-back-color mt2">
                <div class="access-heading">
                    <h1>Get Access to AMEA Today</h1>
                </div>

                <div class="row mt4">
                    @foreach ($getpackages as $packages)
                    <div class="col-lg-4">
                        <div data-wow-delay="0.10s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>{{ $packages->title }}</h4>
                                <span class="dollor-sign">$</span>
                                <h1>{{ $packages->amount }}</h1>
                                <span>{{ $packages->type }}</span>
                                <p>{{ $packages->mid_details }}</p>
                            </div>
                            <div class="for-position-abs">
                                <a href="{{ route('order-summary',$packages->id) }}" class="d-flex"><button class="select-card-btn" >Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p>{{ $packages->deatails }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="row mt4">
                    <div class="col-lg-4">
                        <div data-wow-delay="0.60s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>AMEA Student</h4>
                                <span class="dollor-sign">$</span>
                                <h1>19.99</h1>
                                <span>Every year</span>
                                <p>Perfect for virtual private lessons and
                                    college recruitment.</p>
                            </div>
                            <div class="for-position-abs">
                                <a href="{{ route('order-summary') }}"="{{ route('order-summary') }}" class="d-flex"><button class="select-card-btn">Select</button><a/>
                                <div class="card-bottom-content-div">
                                    <p>Virtual private instructors and create
                                        a recruitment profile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-wow-delay="0.50s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>Private Instructor</h4>
                                <span class="dollor-sign">$</span>
                                <h1>29.99</h1>
                                <span>Every year</span>
                            </div>
                            <div class="for-position-abs">
                                <a href="{{ route('order-summary') }}" class="d-flex"><button class="select-card-btn">Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p>Teach students from anywhere, at
                                        your convenience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-wow-delay="0.40s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>Music Educators</h4>
                                <span class="dollor-sign">$</span>
                                <h1>39.99</h1>
                                <span>Every year</span>
                                <p>Frim K- College</p>

                            </div>
                            <div class="for-position-abs">
                                <a href="{{ route('order-summary') }}" class="d-flex"><button class="select-card-btn">Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p>Recruit students from anywhere in
                                        the country.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-wow-delay="0.20s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>Arrangers/Composer</h4>
                                <span class="dollor-sign">$</span>
                                <h1>19.99</h1>
                                <span>Every year</span>
                            </div>
                            <div class="for-position-abs">
                               <a href="{{ route('order-summary') }}" class="d-flex"><button class="select-card-btn">Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p>Build your following and conduct
                                        your virtual classrooms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-wow-delay="0.10s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>Singer/Songwriter</h4>
                                <span class="dollor-sign">$</span>
                                <h1>34.99</h1>
                                <span>Every year</span>
                            </div>
                            <div class="for-position-abs">
                                <a href="{{ route('order-summary') }}" class="d-flex"><button class="select-card-btn">Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p>Build your following and connect
                                        with voices everywhere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div data-wow-delay="0.30s" class="card-main wow bounceIn">
                            <div class="card-content text-center">
                                <h4>Music Producer</h4>
                                <span class="dollor-sign">$</span>
                                <h1>49.99</h1>
                                <span>Every year</span>
                                <p>Connect with producers/engineers
                                    anywhere in the world</p>

                            </div>
                            <div class="for-position-abs">
                               <a href="{{ route('order-summary') }}" class="d-flex"><button class="select-card-btn">Select</button></a>
                                <div class="card-bottom-content-div">
                                    <p>Hold virtual classes or find talent
                                        anywhere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        @include('Frontend.Layout.body.footer')
    </div>

</div>
@endsection
