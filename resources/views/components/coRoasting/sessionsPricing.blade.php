<section class="px-5 mt-10 flex flex-col justify-center">
    <div class="mb-10 sm:mx-auto  sm:text-center sm:w-max">
        <span class="text-xs text-coffeDark">SESSIONS & PRICING</span>
        <h2 class="text-4xl mb-5 text-primary">Simple, flexible, no lock-in</h2>
        <div class="w-15 h-0.5 border border-coffeDark sm:self-start"></div>
    </div>
    <div class=" md:grid md:grid-cols-3 md:gap-6 lg:grid-cols-[350px_350px_350px]  lg:justify-center  ">
        <div
            class="relative bg-white border-bean flex flex-col justify-between text-white p-5 mb-10 drop-shadow shadow-md sm:mb-0 sm:p-10 sm:drop-shadow-xl border-2 hover:border-2 hover:border-coffeDark hover:-translate-y-2 hover:scale-105 transform-gpu  hover:cursor-pointer transition duration-300 ease-in-out">
            <div class=" mb-5 ">
                <span class="absolute -top-3 right-5 z-100 text-white bg-bean rounded px-2 text-sm">MOST POPULAR</span>
                <h2 class="text-3xl mb-5 font-bodoni font-bold  text-black">Intro session</h2>
                <p class="text-black mb-2">Perfect for first-timers and those developing new products</p>
                <ul class="ml-5 mb-5 text-black text-xs">
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Acces to Loring S7 Nighthawk or S15 Falcon</li>
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Full guidance from our team</li>
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Roast profile development</li>
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Use of cupping and branding</li>
                </ul>
                <p class="text-black"><span class="text-3xl text-bold">$250</span> <span class="text-sm text-black/60">/
                        3 hours</span></p>
            </div>
            <x-ui.buttonSolid class="bg-bean! text-white!">Book guided session</x-ui.buttonSolid>
        </div>
        <div
            class=" bg-white border-transparent flex flex-col justify-between text-white p-5 mb-10 drop-shadow shadow-md sm:mb-0 sm:p-10 sm:drop-shadow-xl border-2 hover:border-2 hover:border-coffeDark hover:-translate-y-2 hover:scale-105 transform-gpu  hover:cursor-pointer transition duration-300 ease-in-out">
            <div class=" mb-5 ">

                <h2 class="text-3xl mb-5 font-bodoni font-bold  text-black">Production Session</h2>
                <p class="text-black mb-2">Ideal for businesses with established roast profiles</p>
                <ul class="ml-5 mb-5 text-black text-xs">
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Priority acces to Loring S15 Falcon</li>
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Staff available on callout</li>
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Larger batch capacity</li>
                    <li class="flex items-center"><img class="w-3 h-3 mr-3" src="{{ asset('images/bean_brown.svg') }}"
                            alt="brownBean">Use of cupping, de-stoner and branding</li>
                </ul>
                <p class="text-black"><span class="text-3xl text-bold">$450</span> <span class="text-sm text-black/60">/
                        3 hours</span></p>
            </div>
            <x-ui.buttonClear class="border-2! border-bean! text-bean">Book production</x-ui.buttonClear>
        </div>



        {{-- <div class="bg-pastel/60 flex flex-col justify-between text-white p-5 drop-shadow shadow-md sm:mb-0 sm:p-10 sm:drop-shadow-xl border-transparent border-2 hover:border-2 hover:border-primary hover:-translate-y-2 hover:scale-105 transform-gpu  hover:cursor-pointer transition duration-300 ease-in-out">
            <div class="mb-5">
                <div class=" flex justify-end ">
                    <p class=" text-xs p-1 px-2 text-end text-black  w-max ">Professional</p>
                </div>
                <h2 class="text-3xl mb-5 font-bodoni">Wholesale Coffee Supply</h2>
                <p>A consistent, high-quality coffee supply tailored to your business. Stable flavour profiles,
                    year-round availability, and reliable Melbourne delivery — so your offering never drops.</p>
            </div>
            <button class="p-5 rounded bg-white text-primary">GET STARTED</button>
        </div> --}}

    </div>

</section>
