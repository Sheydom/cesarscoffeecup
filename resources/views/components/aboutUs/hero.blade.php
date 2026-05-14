<section id="hero" class="relative overflow-hidden">

    <img class="absolute inset-0 h-full w-full object-cover object-center -scale-x-100"
        src="{{ asset('images/hero.jpg') }}" alt="coffee roasting facility">

    <div
        class="absolute inset-0 bg-linear-to-b from-black/60 via-black/60 to-transparent sm:bg-linear-to-b sm:from-black/60 sm:via-black/40 sm:to-transparent">
    </div>

    <div class="relative z-10 flex min-h-130 md:min-h-170 lg:min-h-170 items-center ">
        <div class="mx-auto flex w-[90%] max-w-7xl flex-col items-center  text-white sm:items-start ">

            <h1 class="mb-8 max-w-4xl font-bodoni text-5xl italic leading-[0.95] sm:text-6xl lg:text-8xl">
                More than coffee. A partner for your business.
            </h1>

            <p class="mb-10 max-w-2xl text-lg leading-relaxed sm:text-xl lg:text-2xl">
                We're a specialty coffee roasting facility built for businesses — not just coffee drinkers. Everything
                we do is designed to help you build something consistent, profitable and yours.
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

    </div>

</section>
