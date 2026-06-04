@php
    $metaTitle = "About Us | Cesar's Coffee Cup — Melbourne Coffee Roasters";

    $metaDescription =
        'Direct-origin specialty coffee roasters in North Williamstown, Melbourne. Colombian farms, state-of-the-art equipment and end-to-end support for your business.';

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/Cesars_Coffee_Cup_just_face.png');

    $ogUrl = url()->current();
@endphp
<x-layouts.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <x-aboutUs.hero />
    <x-aboutUs.trust />
    <x-aboutUs.whyUs />
    <x-aboutUs.behindScene />
    <x-aboutUs.lastCTA />
</x-layouts.app>
