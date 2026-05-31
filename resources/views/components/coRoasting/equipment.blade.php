<section class="bg-pastel px-5 py-20">
    <div class="mx-auto max-w-6xl">

        {{-- Heading --}}
        <div class="mb-14 text-center">
            <span class="text-xs uppercase tracking-widest text-gold">
                The Equipment
            </span>

            <h2 class="mt-3 text-4xl md:text-5xl font-bodoni text-primary">
                State of the art. Industry standard.
            </h2>

            <div class="mx-auto mt-6 h-0.5 w-20 bg-coffeDark"></div>
        </div>

        {{-- Cards --}}
        <div class="space-y-16">

            {{-- Card 1 --}}
            <article class="grid overflow-hidden rounded-2xl bg-neutral shadow-xl md:grid-cols-2">

                <div class="flex flex-col justify-center bg-pastelLight p-5 md:p-12 order-2 md:order-1">
                    <span class="mb-3 text-sm uppercase tracking-widest text-gold">
                        01 / Masterpiece
                    </span>

                    <h3 class="mb-5 text-4xl font-bodoni text-black">
                        Loring S7 Nighthawk
                    </h3>

                    <div class="mb-5 space-y-2 text-sm md:text-base">
                        <p><strong>Batch size:</strong> 1.4–7kg</p>
                        <p>
                            <strong>Best for:</strong> smaller batches, profile development,
                            sample production, and custom blends.
                        </p>
                    </div>

                    <ul class="space-y-3 text-sm">
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Digital roast profiling
                        </li>
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Automated roast control
                        </li>
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Repeatable profiles for consistency
                        </li>
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Ideal for small-batch and specialty coffee production
                        </li>
                    </ul>
                </div>

                <div class="order-1 md:order-2">
                    <img
                        class="h-80 w-full object-cover md:h-full"
                        src="{{ asset('images/coRoasting/loringS7NighthawkAll.jpg') }}"
                        alt="Loring S7 Nighthawk coffee roaster"
                    >
                </div>

            </article>

            {{-- Card 2 --}}
            <article class="grid overflow-hidden rounded-2xl bg-neutral shadow-xl md:grid-cols-2">

                <div>
                    <img
                        class="h-80 w-full object-cover md:h-full"
                        src="{{ asset('images/coRoasting/loringS15All.webp') }}"
                        alt="Loring S15 Falcon coffee roaster"
                    >
                </div>

                <div class="flex flex-col justify-center bg-pastelLight p-5 md:p-12">
                    <span class="mb-3 text-sm uppercase tracking-widest text-gold">
                        02 / Precision
                    </span>

                    <h3 class="mb-5 text-4xl font-bodoni text-black">
                        Loring S15 Falcon
                    </h3>

                    <div class="mb-5 space-y-2 text-sm md:text-base">
                        <p><strong>Batch size:</strong> 3–15kg</p>
                        <p>
                            <strong>Best for:</strong> larger production runs, scaling established
                            profiles, and wholesale coffee roasting.
                        </p>
                    </div>

                    <ul class="space-y-3 text-sm">
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Digital roast profiling
                        </li>
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Automated roast control
                        </li>
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Repeatable profiles for consistency
                        </li>
                        <li class="flex gap-3">
                            <x-icons.check class="h-5 w-5 shrink-0 text-gold" />
                            Built for higher-volume specialty coffee production
                        </li>
                    </ul>
                </div>

            </article>

        </div>
    </div>
</section>