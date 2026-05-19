<section class="p-5 md:p-10 lg:p-15">
    <h2 class="mb-5 text-4xl md:text-5xl lg:text-7xl md:mb-20 font-bodoni italic text-primary text-center">Quick Answers
    </h2>
    <div class="flex flex-col gap-5 md:flex-row md:justify-center md:gap-20 lg:gap-20">
        <div class="flex flex-col gap-5 md:max-w-md lg:gap-5 lg:max-w-xl lg:w-full">
            <div x-data="{ open: false }" @click.outside="open = false" class="group flex flex-col cursor-pointer">
                <button type="button" @click="open = !open"
                    class="flex justify-between w-full items-center text-left font-bold">
                    <span>How do I book a session?</span>
                    <img class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                        :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}" alt="Coffee Bean">
                </button>
                <div x-show="open" x-collapse>
                    <p>The fastest way is through the booking form on the Co-Roasting or Hire a Roaster pages. You can
                        also email us directly.</p>
                </div>
                <span class="w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false }" @click.outside="open = false" class="group flex flex-col cursor-pointer">
                <button type="button" @click="open = !open"
                    class="flex justify-between w-full items-center text-left font-bold">
                    <span>Do you offer wholesale coffee supply?</span>
                    <img class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                        :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}" alt="Coffee Bean">
                </button>
                <div x-show="open" x-collapse>
                    <p>Yes. We supply consistent, direct-origin coffee to businesses across Melbourne. Get in touch to
                        discuss your needs.</p>
                </div>
                <span class="w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false }" @click.outside="open = false" class="group flex flex-col cursor-pointer">
                <button type="button" @click="open = !open"
                    class="flex justify-between w-full items-center text-left font-bold">
                    <span>Can I visit the facility before committing?</span>
                    <img class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                        :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}" alt="Coffee Bean">
                </button>
                <div x-show="open" x-collapse>
                    <p>Absolutely. Book a visit through the form above — no commitment required.</p>
                </div>
                <span class="w-full h-0.5 border border-coffeDark/30"></span>
            </div>
        </div>
        <div class="flex flex-col gap-5 md:max-w-md lg:max-w-xl lg:w-full md:gap-5">
            <div x-data="{ open: false }" @click.outside="open = false" class="group flex flex-col cursor-pointer">
                <button type="button" @click="open = !open"
                    class="flex justify-between w-full items-center text-left font-bold">
                    <span>Do you provide training for staff?</span>
                    <img class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                        :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}" alt="Coffee Bean">
                </button>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false }" @click.outside="open = false" class="group flex flex-col cursor-pointer">
                <button type="button" @click="open = !open"
                    class="flex justify-between w-full items-center text-left font-bold">
                    <span>How long is private label lead time?</span>
                    <img class="w-7 h-7 md:w-10 md:h-10 shrink-0 transition-transform duration-300 ease-in-out md:group-hover:rotate-45"
                        :class="open ? 'rotate-45' : ''" src="{{ asset('images/bean_brown.svg') }}" alt="Coffee Bean">
                </button>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="w-full h-0.5 border border-coffeDark/30"></span>
            </div>
        </div>
    </div>
</section>
