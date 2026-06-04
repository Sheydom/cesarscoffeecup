@php
    $metaTitle = "Contact | Cesar's Coffee Cup Melbourne";

    $metaDescription =
        "Get in touch with Cesar's Coffee Cup in North Williamstown, Melbourne. Book a session, ask about wholesale, or visit the facility. We respond within 24 hours.";

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/Cesars_Coffee_Cup_just_face_black.png');

    $ogUrl = url()->current();
@endphp
<x-layouts.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <x-contact.hero />
    {{-- <x-contact.contactForm/> --}}
    <livewire:contact.contact-controller />
    <x-contact.faq />
</x-layouts.app>
