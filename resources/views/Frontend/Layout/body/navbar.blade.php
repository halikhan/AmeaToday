<div
class="{{ Request::is('home') ? 'grey-background for-home-nav-back color-tranparent' : 'grey-background for-transparent-color' }}">

    <div class="container">
        <div class="nav-bar-main">
            <div  class="first-nav-bar">
                <div id="google_translate_element">
                    {{-- <summary class="radios">
                        <input type="radio" name="item" id="default" title="EN" checked>
                        <input type="radio" name="item" id="item1" title="Item 1">
                        <input type="radio" name="item" id="item2" title="Item 2">
                        <input type="radio" name="item" id="item3" title="Item 3">
                        <input type="radio" name="item" id="item4" title="Item 4">
                        <input type="radio" name="item" id="item5" title="Item 5">
                        <input type="radio" name="item" id="item6" title="item4">
                        <input type="radio" name="item" id="item7" title="Item 1">
                        <input type="radio" name="item" id="item8" title="Item 2">
                        <input type="radio" name="item" id="item9" title="Item 3">
                        <input type="radio" name="item" id="item10" title="Item 4">
                        <input type="radio" name="item" id="item11" title="Item 5">
                        <input type="radio" name="item" id="item12" title="item3">
                        <input type="radio" name="item" id="item13" title="Item 1">
                        <input type="radio" name="item" id="item14" title="Item 2">
                        <input type="radio" name="item" id="item15" title="Item 3">
                    </summary>
                    <ul class="list">
                        <li>
                            <label for="item1">AB</label>
                        </li>
                        <li>
                            <label for="item2">AF</label>
                        </li>
                        <li>
                            <label for="item3">AR</label>
                        </li>
                        <li>
                            <label for="item4">AS</label>
                        </li>
                        <li>
                            <label for="item5">BG</label>
                        </li>
                        <li>
                            <label for="item6">BM</label>
                        </li>
                        <li>
                            <label for="item7">BO</label>
                        </li>
                        <li>
                            <label for="item8">BR</label>
                        </li>
                        <li>
                            <label for="item9">CO</label>
                        </li>
                        <li>
                            <label for="item10">CR</label>
                        </li>
                        <li>
                            <label for="item11">CY</label>
                        </li>
                        <li>
                            <label for="item12">DA</label>
                        </li>
                        <li>
                            <label for="item13">DE</label>
                        </li>
                        <li>
                            <label for="item14">EL</label>
                        </li>
                        <li>
                            <label for="item15">ES</label>
                        </li>
                        <li>
                            <label for="item15">ET</label>
                        </li>
                        <li>
                            <label for="item15">FA</label>
                        </li>
                        <li>
                            <label for="item15">FI</label>
                        </li>
                        <li>
                            <label for="item15">ES</label>
                        </li>
                        <li>
                            <label for="item15">FR</label>
                        </li>

                        <li>
                            <label for="item15">GA</label>
                        </li>
                        <li>
                            <label for="item15">HE</label>
                        </li>
                        <li>
                            <label for="item15">HI</label>
                        </li>
                        <li>
                            <label for="item15">HR</label>
                        </li>
                        <li>
                            <label for="item15">HY</label>
                        </li>
                        <li>
                            <label for="item15">ID</label>
                        </li>
                        <li>
                            <label for="item15">IT</label>
                        </li>
                        <li>
                            <label for="item15">JA</label>
                        </li>
                        <li>
                            <label for="item15">KO</label>
                        </li>
                        <li>
                            <label for="item15">LA</label>
                        </li>
                        <li>
                            <label for="item15">MK</label>
                        </li>
                        <li>
                            <label for="item15">MN</label>
                        </li>
                        <li>
                            <label for="item15">MS</label>
                        </li>
                        <li>
                            <label for="item15">MT</label>
                        </li>

                        <li>
                            <label for="item15">NE</label>
                        </li>
                        <li>
                            <label for="item15">NL</label>
                        </li>

                        <li>
                            <label for="item15">NN</label>
                        </li>
                        <li>
                            <label for="item15">NO</label>
                        </li>
                        <li>
                            <label for="item15">NV</label>
                        </li>
                        <li>
                            <label for="item15">PL</label>
                        </li>
                        <li>
                            <label for="item15">PT</label>
                        </li>
                        <li>
                            <label for="item15">RO</label>
                        </li>
                        <li>
                            <label for="item15">SK</label>
                        </li>

                        <li>
                            <label for="item15">SM</label>
                        </li>
                        <li>
                            <label for="item15">SQ</label>
                        </li>
                        <li>
                            <label for="item15">SV</label>
                        </li>
                        <li>
                            <label for="item15">TH</label>
                        </li>
                        <li>
                            <label for="item15">TR</label>
                        </li>
                        <li>
                            <label for="item15">TY</label>
                        </li>
                        <li>
                            <label for="item15">VI</label>
                        </li>
                        <li>
                            <label for="item15">YI</label>
                        </li>
                        <li>
                            <label for="item15">ZH</label>
                        </li>
                    </ul> --}}
                </div>

                {{-- <a href="{{ route('login-page') }}">
                    <div class="log-box">
                        <div class="profile-img">
                            <img src="{{ asset('frontend/assets/image/1x/Asset 8.png') }}" alt="">
                        </div>
                        <div class="login-text">
                        <span> Log In</span>
                        </div>
                    </div>
                </a> --}}

             {{-- @if (Auth::user()->type == '2' or  Auth::user()->type == '3' or  Auth::user()->type == '4') --}}
             @if (Auth::check() && Auth::user()->type != 1)
                <a href="{{ route('AmeaToday_user-dashboard') }}">
                    <div class="log-box">
                        <div class="profile-img">

                            <img src="{{ asset('frontend/assets/image/1x/Asset 8.png') }}" alt="">

                        </div>
                        <div class="login-text">
                        <span>User Profile</span>
                        </div>
                    </div>
                    </a>
                    @else
                    <a href="{{ route('login-page') }}">
                    <div class="log-box">
                        <div class="profile-img">
                            <img src="{{ asset('frontend/assets/image/1x/Asset 8.png') }}" alt="">
                        </div>
                        <div class="login-text">
                        <span> Log In</span>
                        </div>
                    </div>
                </a>
             @endif

            </div>
        </div>
    </div>
</div>


<div class="{{ Request::is('home') ? 'li-navbar menu-large-screen' : 'li-navbar menu-large-screen-transparent-color for-transparent-color' }}">
    <div class="container">
        <div class="second-navbar">
            <ul class="nav-bar-ul">
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('home') }}" class="{{ Route::currentRouteName()=='home' ? 'active' : '' }}">Home</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('about-amea') }}" class="{{ Route::currentRouteName()=='about-amea' ? 'active' : '' }}">About AMEA</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('Band-Room') }}" class="{{ Route::currentRouteName()=='Band-Room' ? 'active' : '' }}">Student Brand Room</a>
                        </button>
                    </div>
                </li>


                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('educators') }}" class="{{ Route::currentRouteName()=='educators' ? 'active' : '' }}">Educators(K-12)</a>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('educators-Boosters') }}" class="{{ Route::currentRouteName()=='educators-Boosters' ? 'active' : '' }}">Boosters</a>
                            <a href="{{ route('educators-by-laws') }}" class="{{ Route::currentRouteName()=='educators-by-laws' ? 'active' : '' }}">By-Laws</a>
                            <a href="{{ route('educators-fund-raising') }}" class="{{ Route::currentRouteName()=='educators-fund-raising' ? 'active' : '' }}">Fund Raising</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('Pre-Festival') }}" class="{{ Route::currentRouteName()=='Pre-Festival' ? 'active' : '' }}">Pre-Festival Evaluators</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('private-instructors') }}" class="{{ Route::currentRouteName()=='private-instructors' ? 'active' : '' }}">Private
                                Instructors</a>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('private-instrumental') }}" class="{{ Route::currentRouteName()=='private-instrumental' ? 'active' : '' }}">Instrumental</a>
                            <a href="{{ route('private-dance') }}" class="{{ Route::currentRouteName()=='private-dance' ? 'active' : '' }}">Dance</a>
                            <a href="{{ route('private-vocal') }}" class="{{ Route::currentRouteName()=='private-vocal' ? 'active' : '' }}">Vocal</a>
                            <a href="{{ route('private-all-state-pre') }}" class="{{ Route::currentRouteName()=='private-all-state-pre' ? 'active' : '' }}">All State Prep</a>
                            <a href="{{ route('amea-today') }}" class="{{ Route::currentRouteName()=='amea-today' ? 'active' : '' }}">Become a Private Instructor</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><a href="{{ route('Arrangers-Composer') }}" class="{{ Route::currentRouteName()=='Arrangers-Composer' ? 'active' : '' }}">Arrangers/Composer</a>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">More
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('more-singers') }}" class="{{ Route::currentRouteName()=='more-singers' ? 'active' : '' }}">Singer/Songwritter</a>
                            <a href="{{ route('Music-Producers') }}" class="{{ Route::currentRouteName()=='Music-Producers' ? 'active' : '' }}">Music Producers/Enginners</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

