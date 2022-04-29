

<?php
$logo_add = App\Models\LogoManager::where('title','logo')->first();

// dd($logo_add);
?>

<div data-wow-delay="0.20s" class="center-logo mt7 wow bounceIn for-class-relative">
    <span class="for-text-over-logo">Join AMEAtoday</span>
    <a href="{{ route('amea-today') }}"> <img src="{{ asset('storage/uploads/logo/'.$logo_add->image) }}" alt=""></a>
</div>


{{-- <div data-wow-delay="0.20s" class="center-logo mt7 wow bounceIn for-class-relative">
    <span class="for-text-over-logo">Join AMEAtoday</span>
    <a href="{{ route('amea-today') }}"> <img src="{{ asset('frontend/assets/image/1x/assets9.webp') }}" alt=""></a>
</div> --}}
