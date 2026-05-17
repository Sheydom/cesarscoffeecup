<section id="hero" class="relative overflow-hidden">

    <img class="absolute inset-0 h-full w-full object-cover object-center -scale-x-100"
        src="{{ asset('images/hero4.jpg') }}" alt="coffee roasting facility">

    <div
        class="absolute inset-0 bg-linear-to-b from-black/40 via-black/0 to-transparent sm:bg-linear-to-r sm:from-black/40 sm:via-black/0 sm:to-transparent">
    </div>

    <div class="relative z-10 flex min-h-130 md:min-h-170 lg:min-h-170 items-center ">
        <div class="mx-auto flex w-[90%] max-w-7xl flex-col items-center  text-white sm:items-start ">

            <h1 class="mb-8 max-w-4xl font-bodoni text-5xl italic leading-[0.95] sm:text-6xl lg:text-8xl">
                @if (Auth::check())
                    <p class="text-gold"><span class="text-white">Hello</span> {{ auth()->user()->name }}</p>
                @endif Specialty Coffee,<br>
                Built for Your Business
            </h1>

            <p class="mb-10 max-w-2xl text-lg leading-relaxed sm:text-xl lg:text-2xl">
                Create, roast, and package your own coffee with flexible co-roasting and roaster hire in our Melbourne
                facility.
            </p>

            <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row">
                <x-ui.buttonSolid class="w-full sm:w-auto">
                    Book a Facility Visit
                </x-ui.buttonSolid>

                <x-ui.buttonClear class="w-full sm:w-auto">
                    Explore Co-Roasting
                </x-ui.buttonClear>
            </div>

        </div>
    </div>

    <div class="relative z-10 bg-accent text-center text-xs font-medium uppercase tracking-wide text-white md:text-sm">
        <div class="flex justify-center md:hidden">
            <p class="p-2 flex ">
                <img class="w-5 h-5 shrink-0" src="{{ asset('images/bean_white.svg') }}" alt="coffeBeanWhite">Direct
                from
                origin
            </p>
            <p class="p-2 flex "><img class="w-5 h-5 shrink-0" src="{{ asset('images/bean_white.svg') }}"
                    alt="coffeBeanWhite">Melbourne-based
            </p>
        </div>

        <div class="mx-auto hidden p-1 md:flex md:gap-5 md:justify-around md:text-xl">
            <p class="flex items-center"><img class="w-6 h-6 shrink-0" src="{{ asset('images/bean_white.svg') }}"
                    alt="coffeBeanWhite">Direct from Colombian & global farms</p>
            <p class="flex items-center"><img class="w-6 h-6 shrink-0" src="{{ asset('images/bean_white.svg') }}"
                    alt="coffeBeanWhite">Loring & IMF equipment</p>
            <p class="flex items-center"><img class="w-6 h-6 shrink-0" src="{{ asset('images/bean_white.svg') }}"
                    alt="coffeBeanWhite">No lock-in contracts</p>
            <p class="flex items-center"><img class="w-6 h-6 shrink-0" src="{{ asset('images/bean_white.svg') }}"
                    alt="coffeBeanWhite">Melbourne local delivery</p>
        </div>
    </div>

</section>
