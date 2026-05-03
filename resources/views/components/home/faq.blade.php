<section class="p-5 md:p-10 lg:p-15">
    <h2 class="mb-5 text-4xl md:text-5xl lg:text-7xl md:mb-20 font-bodoni italic text-primary text-center">Questions of Origin</h2>
    <div class="flex flex-col gap-5 md:flex-row md:justify-center md:gap-20 lg:gap-20">
        <div class="flex flex-col gap-5  md:max-w-md lg:gap-10 lg:max-w-xl lg:w-full">
            <div x-data="{ open: false }" @click.outside="open=false" class="flex flex-col cursor-pointer  ">
                <div class="flex ">
                    <div @click="open=!open" class="flex justify-between w-full"><button>What are the co-roasting
                            minimums?</button><span><img class="w-7 h-7 md:w-10 md:h-10 shrink-0" src="{{asset('images/bean_brown.svg')}}" alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false }" @click.outside="open=false" class="flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button>Can we source specific
                            microlots?</button><span><img class="w-7 h-7 md:w-10 md:h-10 shrink-0" src="{{asset('images/bean_brown.svg')}}" alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false }" @click.outside="open=false" class="flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button>Are there delivery fees for
                            Melbourne CBD?</button><span><img class="w-7 h-7 md:w-10 md:h-10 shrink-0" src="{{asset('images/bean_brown.svg')}}" alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
        </div>
        <div class="flex flex-col gap-5 md:flex md:flex-col md:max-w-md lg:max-w-xl lg:w-full md:gap-5">
            <div x-data="{ open: false }" @click.outside="open=false" class="flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button>Do you provide training for
                            staff?</button><span><img class="w-7 h-7 md:w-10 md:h-10 shrink-0" src="{{asset('images/bean_brown.svg')}}" alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
            <div x-data="{ open: false }" @click.outside="open=false" class="flex flex-col cursor-pointer">
                <div class="flex">
                    <div @click="open=!open" class="flex justify-between w-full"><button>How long is privade label lead
                            time?</button><span><img class="w-7 h-7 md:w-10 md:h-10 shrink-0" src="{{asset('images/bean_brown.svg')}}" alt="Coffe-Bean"></span></div>
                </div>
                <div x-show="open" x-collapse>
                    <p>test</p>
                </div>
                <span class="underline w-full h-0.5 border border-coffeDark/30"></span>
            </div>
        </div>
    </div>
</section>
