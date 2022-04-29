{{-- Footer work  --}}
<?php
$getfacebook = App\Models\sociallink::where('type',1)->first();
$getinstagram = App\Models\sociallink::where('type',2)->first();
$getlinkedin = App\Models\sociallink::where('type',3)->first();

?>
<footer class="for-transparent-color mt2 for-mac-marging">
    <div class="container">
        <div class="footer">
            <div class="d-flex justify-content-between footer-mobile-styling">
                <div class="d-flex footer-social-logo">
                    <div class="footer-img"><a href="{{ $getfacebook->social_media }}" target="_blank"><img src="{{ asset('frontend/assets/image/1x/face.png') }}" alt=""></a>
                    </div>
                    <div class="footer-img"><a href="{{ $getinstagram->social_media }}" target="_blank"><img src="{{ asset('frontend/assets/image/1x/insta.png') }}" alt=""></a>
                    </div>
                    <div class="footer-img"><a href="{{ $getlinkedin->social_media }}" target="_blank"><img src="{{ asset('frontend/assets/image/1x/in.png') }}" alt=""></a></div>
                </div>
                @foreach ($getCopyrights as $Copyright )
                <div class="footer-content">
                    <span>{{ $Copyright->email_one }}</span>
                    <span>Design & Development by
                        <a href="https://designprosusa.com/" target="_blank"> Design Pros
                            USA</a></span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>
