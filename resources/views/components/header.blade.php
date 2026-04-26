<nav class="flex text-black p-2 justify-between w-full ">

    <div class="sm:hidden self-start">
        <div x-data="{ open: false }"class="relative">

            <button class="relative w-10 h-10 flex items-center justify-center" @click="open = !open"
                @click.outside="open = false">

                <!-- Burger icon -->
                <svg x-show="!open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-90 rotate-[-90deg]"
                    x-transition:enter-end="opacity-100 scale-100 rotate-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100 rotate-0"
                    x-transition:leave-end="opacity-0 scale-90 rotate-90"
                    class="absolute w-10 h-10 shrink-0 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 640">
                    <path fill="rgb(5, 5, 5)"
                        d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z" />
                </svg>

                <!-- X icon -->
                <svg x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-90 rotate-[-90deg]"
                    x-transition:enter-end="opacity-100 scale-100 rotate-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100 rotate-0"
                    x-transition:leave-end="opacity-0 scale-90 rotate-90" class="absolute w-10 h-10 shrink-0"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>

            </button>




            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                class="absolute top-12 left-0 bg-white shadow-lg rounded p-2 z-50">
                <flux:navlist.item href="#">
                    Home
                </flux:navlist.item>

                <flux:navlist.item href="#">
                    Wholsesale
                </flux:navlist.item>

                <flux:navlist.item href="#">
                    Co-Roasting
                </flux:navlist.item>
                <flux:navlist.item href="#">
                    Meet Cesar
                </flux:navlist.item>
                <flux:navlist.item href="#">
                    Contact
                </flux:navlist.item>
            </div>

        </div>
    </div>

    <div class="hidden sm:block">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('products') }}">Products</a>
        <a href="{{ route('wholesale') }}">Wholesale</a>
        <a href="{{ route('coRoasting') }}">Co-Roasting</a>
        <a href="{{ route('meetCesar') }}">Meet Cesar</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
    <div class="h-10 flex items-center">
        <p class="text-center font-bold">Cesar's Coffee Cup</p>
    </div>
    <div class="h-10 flex items-center">
        <svg class="h-10 w-10 shrink-0 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
            <path fill="rgb(5, 5, 5)"
                d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z" />
        </svg>
    </div>
</nav>
