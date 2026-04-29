<section class="p-5">
    <div class="flex flex-col mb-10">
        <h2 class="text-4xl font-bodoni mb-10">Book a visit</h2>
        <p class=" text-sms text-coffeDark font-medium">Join us at our Melbourne facility. Let's discuss your vision
            over a fresh brewand walk through how we can bring your brand to life.</p>
    </div>
    <div class="flex mb-10 p-5 gap-5 border-t-neutral border-b-neutral border-t-2 border-b-2">
        <img class="h-15 w-15 object-cover" src="{{ asset('images/Cesars_Coffee_Cup_just_face.png') }}" alt="">
        <div class="flex flex-col">
            <p class="text-2xl font-bodoni italic">Meet Cesar</p>
            <p class="text-coffeDark text-xs">FOUNDER & MASTER ROASTER</p>
        </div>
    </div>
    <form class=" action="">
        <div class="flex flex-col mb-5"><label for="">Full Name</label><input
                class="p-2.5 bg-neutral border-b-2 border-black" type="text" placeholder="e.g Julian Smith"></div>
        <div class="flex flex-col mb-5"><label for="">Email Address</label><input
                class="p-2.5 bg-neutral border-b-2 border-black" type="email" placeholder="Julian.Smith@gmail.com">
        </div>
        <div class="flex flex-col mb-5"><label for="">Phone</label><input
                class="p-2.5 bg-neutral border-b-2 border-black" type="tel" placeholder="+61416323223"></div>
        <div class="flex flex-col mb-5"><label for="">Type of enquiry</label><select
                class="p-2.5 bg-neutral border-b-2 border-black" type="select" placeholder="e.g Julian Smith">
                <option value="">test1</option>
                <option value="">test2</option>
                <option value="">test3</option>
                <option value="">test4</option>
            </select></div>
        <div class="flex flex-col mb-5"><label for="">Your Message</label>
            <textarea class="resize-none mb-5 p-2.5 bg-neutral border-b-2 border-black" rows="5" cols="40"
                placeholder="Type here..."></textarea>
                <x-ui.buttonSolid class=" text-white">SUBMIT REQUEST</x-ui.buttonSolid>
    </form>
</section>
