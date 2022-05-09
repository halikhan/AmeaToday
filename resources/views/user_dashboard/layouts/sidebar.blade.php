
<div class="tabs-side-bar-width">
    <div class="tabs-side-bar">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <h5><p></p></h5>
            <ul class="tabs-ul">
                <li class="mt1">
                    <a class="for-cstm-tabs-button" target="_blank" href="{{ route('home') }}">Website Home</a>
                </li>
                <li class="mt1">
                    <a class="for-cstm-tabs-button {{ Route::currentRouteName()=='User_Profile_edit' ? 'active' : '' }}" href="{{ route('User_Profile_edit',Auth::user()->id) }}" >Profile</a>
                </li>
                @if (Auth::user()->type==2)
                <li class="mt1">
                    <a class="for-cstm-tabs-button" href="{{ route('coaches') }}">Coaches</a>
                </li>
                <li class="mt1">
                    <a class="for-cstm-tabs-button" href="{{ route('Evaluators') }}">Evaluators</a>
                </li>
                @endif
                <li class="mt1">
                    <a class="for-cstm-tabs-button" href="{{ route('User_Password_edit',Auth::user()->id) }}">Change Password</a>
                </li>
            </ul>
        </div>
    </div>
</div>
