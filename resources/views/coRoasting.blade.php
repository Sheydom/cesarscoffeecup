@php
    $metaTitle = "Co-Roasting Melbourne | Cesar's Coffee Cup";

    $metaDescription =
        'Roast your own coffee in our North Williamstown facility. Access Loring S7 & S15 roasters with expert guidance. No experience needed.';

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/Cesars_Coffee_Cup_just_face.svg');

    $ogUrl = url()->current();
@endphp
<x-layouts.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <x-coRoasting.hero />
    <x-coRoasting.services />
    <x-coRoasting.equipment />
    <x-coRoasting.sessionsPricing />
    <x-coRoasting.whoItsFor />
    <x-coRoasting.whatToExpect />
    <livewire:coRoasting.contact-controller />
    <x-coRoasting.faq />
</x-layouts.app>
