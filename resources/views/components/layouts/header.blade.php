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

            </button>




            {{-- Dark overlay --}}

             {{-- <div x-show="open" @click="open = false" x-transition.opacity class="fixed inset-0 bg-black/50 z-40"></div>  --}}

            {{-- Sliding sidebar --}}

            <aside x-show="open" x-transition:enter="transition ease-out duration-300 "
                x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-300 " x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full opacity-0"
                class="fixed top-0 left-0 h-full w-72 bg-[#FCF9F2] z-50  p-6">

                <button @click="open = false" class="mb-6 ">

                    <!-- X icon -->
                    <svg class="w-8 h-8 shrink-0 text-red-500 hover:cursor-pointer -ml-2"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                        <path fill="currentColor"
                            d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
                    </svg>

                </button>

                <nav class="flex flex-col gap-4 text-lg">

                    <a class=" hover:bg-accent/10 rounded p-2" href="{{ route('home') }} "wire:navigate.hover>Home</a>
                    <a class="hover:bg-accent/10 rounded p-2"
                        href="{{ route('coRoasting') }} "wire:navigate.hover>Co-Roasting</a>
                    <a class="hover:bg-accent/10 rounded p-2"
                        href="{{ route('meetCesar') }} "wire:navigate.hover>Roasting Hire</a>
                    <a class="hover:bg-accent/10 rounded p-2" href="{{ route('aboutUs') }}"wire:navigate.hover>About
                        Us</a>
                    <a class="hover:bg-accent/10 rounded p-2"
                        href="{{ route('contact') }}"wire:navigate.hover>Contact</a>

                </nav>

                <div class=" gap-4 flex justify-center w-full  text-black mt-16 mb-6 absolute bottom-0 left-0">
                    <a class="transition duration-300 hover:-translate-y-5 ease-in-out" target="_blank"
                        rel="noopener noreferrer" href="https://www.instagram.com/latinamilesaway/">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 shrink-0 rounded-full p-2 bg-white text-black   md:bg-gray-200 md:hover:-translate-y-3 md:hover:text-white md:hover:bg-primary transition duration-200 ease-in-out cursor-pointer"
                            viewBox="0 0 448 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="currentColor"
                                d="M224.3 141a115 115 0 1 0 -.6 230 115 115 0 1 0 .6-230zm-.6 40.4a74.6 74.6 0 1 1 .6 149.2 74.6 74.6 0 1 1 -.6-149.2zm93.4-45.1a26.8 26.8 0 1 1 53.6 0 26.8 26.8 0 1 1 -53.6 0zm129.7 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM399 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a><a class="transition duration-300 hover:-translate-y-5 ease-in-out" target="_blank"
                        rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=61586298837478">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 shrink-0 rounded-full p-2 bg-white text-black    md:bg-gray-200 md:hover:-translate-y-3 md:hover:text-white md:hover:bg-primary transition duration-200 ease-in-out cursor-pointer"
                            viewBox="0 0 448 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="currentColor"
                                d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l98.2 0 0-145.8-52.8 0 0-78.2 52.8 0 0-33.7c0-87.1 39.4-127.5 125-127.5 16.2 0 44.2 3.2 55.7 6.4l0 70.8c-6-.6-16.5-1-29.6-1-42 0-58.2 15.9-58.2 57.2l0 27.8 83.6 0-14.4 78.2-69.3 0 0 145.8 129 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32z" />
                        </svg>
                    </a>
                    </a><a class="transition duration-300 hover:-translate-y-5 ease-in-out" target="_blank"
                        rel="noopener noreferrer" href="https://www.tiktok.com/@latinamilesaway">
                        <svg class="w-10 h-10 shrink-0 rounded-full p-2 bg-white text-black   md:bg-gray-200 md:hover:-translate-y-3 md:hover:text-white md:hover:bg-primary transition duration-200 ease-in-out cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                            <path fill="currentColor"
                                d="M448.5 209.9c-44 .1-87-13.6-122.8-39.2l0 178.7c0 33.1-10.1 65.4-29 92.6s-45.6 48-76.6 59.6-64.8 13.5-96.9 5.3-60.9-25.9-82.7-50.8-35.3-56-39-88.9 2.9-66.1 18.6-95.2 40-52.7 69.6-67.7 62.9-20.5 95.7-16l0 89.9c-15-4.7-31.1-4.6-46 .4s-27.9 14.6-37 27.3-14 28.1-13.9 43.9 5.2 31 14.5 43.7 22.4 22.1 37.4 26.9 31.1 4.8 46-.1 28-14.4 37.2-27.1 14.2-28.1 14.2-43.8l0-349.4 88 0c-.1 7.4 .6 14.9 1.9 22.2 3.1 16.3 9.4 31.9 18.7 45.7s21.3 25.6 35.2 34.6c19.9 13.1 43.2 20.1 67 20.1l0 87.4z" />
                        </svg>
                    </a>

                </div>


            </aside>


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
