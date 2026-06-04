@php
    $metaTitle = "Cesar's Coffee Cup | Specialty Coffee Roaster Melbourne";

    $metaDescription =
        'Melbourne specialty coffee roasting facility. Co-roasting, machine hire, wholesale supply and private label. Sourced from Colombia. No lock-in contracts.';

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/Cesars_Coffee_Cup_just_face.svg');

    $ogUrl = url()->current();
@endphp




<x-layouts.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <x-home.hero />
    <x-home.services />
    <x-home.howItWorks />
    <x-home.trust />
    <livewire:home.contact-controller />
    <x-home.lastCTA />
    <x-home.faq />
</x-layouts.app>
