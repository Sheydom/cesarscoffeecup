<section id="hero" class="relative overflow-hidden bg-primary p-5">

    <img class=" sm:absolute inset-0 h-full w-full object-cover object-bottom  rounded"
        src="{{ asset('images/coRoasting/loringMachines.jpg') }}" alt="coffee roasting facility">

    <div
        class="absolute inset-0 sm:bg-linear-to-r sm:from-primary/80 sm:via-primary/60 sm:to-transparent">
    </div> 

    <div class="relative z-10 flex min-h-130 md:min-h-170 lg:min-h-170 items-center">
        <div class="mx-auto flex max-w-7xl flex-col items-center  text-white sm:items-start md:w-full ">

            <h1 class="mb-8 max-w-4xl font-bodoni drop-shadow-2xl text-5xl italic leading-[0.95] sm:text-6xl lg:text-7xl">
                Roast your own coffee.<br>
                In our facility.
            </h1>

            <p class="mb-10 max-w-2xl text-lg leading-relaxed sm:text-xl lg:text-2xl">
                Access professional Loring S7 Nighthawk and S15 Falcon roasters with expert guidance from our team. No experience needed — we guide you through every step.
            </p>

            <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row">
                <x-ui.buttonSolid href="{{route('coRoasting')}}#sessionsPrice" class="w-full sm:w-auto bg-pastel! text-black">
                    See Pricing
                </x-ui.buttonSolid>

                {{-- <x-ui.buttonClear class="w-full sm:w-auto  ">
                    See Pricing
                </x-ui.buttonClear> --}}
            </div>

        </div>
    </div>


</section>
