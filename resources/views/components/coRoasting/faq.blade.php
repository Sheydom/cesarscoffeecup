<section class="p-5 md:p-10 lg:p-15">
    <h2 class="mb-5 text-4xl md:text-5xl lg:text-7xl md:mb-20 font-bodoni italic text-primary text-center">Co-Roasting FAQ</h2>
    <div class="flex flex-col gap-5 md:flex-row md:justify-center md:gap-20 lg:gap-20">
        <div class="flex flex-col gap-5  md:max-w-md lg:gap-10 lg:max-w-xl lg:w-full">
            <div x-data="{ open: false, hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                @click.outside="open = false" class="group flex flex-col cursor-pointer">
                <button type="button" @click="open = !open"
                    class="flex justify-between w-full items-center text-left font-bold">
                    <span>Do I need to bring my own green beans?</span>

                    <img class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                        :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}" alt="Coffee Bean">
                </button>

                <div x-show="open" x-collapse>
                    <p>Not necessarily. We can source green beans for you directly through our Colombian and global
                        supply network, or you're welcome to bring your own.</p>
                </div>

                <span class="w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false, rotate: false }" @mouseenter="rotate=true" @mouseleave="rotate=false"
                @click.outside="open=false" class="group flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button class="font-bold">Can I bring
                            my team along?</button><span><img
                                class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 md:group-hover:rotate-45 "
                                :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}"
                                alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>Absolutely. Sessions are a great opportunity to train your staff. Just let us know how many
                        people will be attending when you book.</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false, rotate: false }" @mouseenter="rotate=true" @mouseleave="rotate=false"
                @click.outside="open=false" class="group flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button class="font-bold">What if I've
                            never roasted before?</button><span><img
                                class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition duration-300 ease-in-out md:group-hover:rotate-45"
                                :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}"
                                alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>That's exactly who the Guided Session is designed for. Our team walks you through every step — no
                        prior experience needed.</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
        </div>
        <div class="flex flex-col gap-5 md:flex md:flex-col md:max-w-md lg:max-w-xl lg:w-full md:gap-5">
            <div x-data="{ open: false, rotate: false }" @mouseenter="rotate=true" @mouseleave="rotate=false"
                @click.outside="open=false" class=" group flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button class="font-bold">Can I source
                            green beans through you?</button><span><img
                                class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                                :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}"
                                alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>Yes. We work directly with farmers in Colombia, Panama, Brazil and Ethiopia. We're happy to
                        discuss sourcing as part of your session or separately.</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false, rotate: false }" @mouseenter="rotate=true" @mouseleave="rotate=false"
                @click.outside="open=false" class="group flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button class="font-bold">What's the
                            cancellation policy?</button><span><img
                                class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                                :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}"
                                alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>You can reschedule free of charge up to 48 hours before your session. Cancellations within 48
                        hours forfeit the deposit.</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
        </div>
    </div>
</section>
