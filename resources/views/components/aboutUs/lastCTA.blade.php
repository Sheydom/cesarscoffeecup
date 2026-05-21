<section class="relative flex flex-col items-center gap-3 bg-coffeDark  px-5 py-16 overflow-hidden">

    
    <div class="absolute inset-0 pointer-events-none"
         style="background: radial-gradient(ellipse 60% 80% at 50% 110%, rgba(61,41,27,0.45) 0%, transparent 70%);">
    </div>


    <h2 class="relative z-10 font-bodoni italic text-4xl md:text-5xl lg:text-7xl  text-center text-neutral">
        Ready to see it yourself?
    </h2>
    <p class="text-neutral mb-10">Come and visit the facility. Taste the coffee, meet the team, and see exactly how we can support your business.</p>

    <div class="relative z-10 flex flex-col w-full justify-center gap-3 md:flex-row  md:max-w-5xl">
        <x-ui.buttonSolid href="{{route('contact')}}#contactForm" class="bg-tertiary text-coffeDark text-[11px] tracking-[0.14em] uppercase font-semibold rounded-full py-3.5 px-9">
            BOOK A VISIT
        </x-ui.buttonSolid>
        <x-ui.buttonClear href="{{route('contact')}}" class="border border-neutral/40 text-neutral text-[11px] tracking-[0.14em] uppercase font-medium rounded-full py-3.5 px-9">
            CONTACT US
        </x-ui.buttonClear>
    </div>

</section>