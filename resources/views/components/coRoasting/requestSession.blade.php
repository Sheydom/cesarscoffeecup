<section class="p-5 md:flex md:items-end md:justify-center gap-10 lg:gap-20 lg:p-15">
    <form class="bg-pastel flex flex-col h-full  shadow-md md:flex-row md:gap-10  rounded p-5 lg:p-10" action="">
        <div>
            <p class=" text-primary mb-2">Ready to Roast?</p>
    <h2 class="text-4xl lg:text-7xl  text-black mb-10">Book your Co-Roasting</h2>
            <div class="flex w-full gap-5">
                <div class="flex w-full flex-col mb-5"><label for="">First Name</label><input
                        class="p-2.5 w-full bg-neutral border-b-2 rounded border-black " type="text" placeholder="Julian">
                </div>
                <div class="flex w-full flex-col mb-5"><label for="">Last Name</label><input
                        class="p-2.5 w-full bg-neutral border-b-2 rounded border-black" type="text" placeholder="Smith">
                </div>
            </div>
            <div class="flex w-full flex-col mb-5"><label for="">Business Name</label><input
                    class="p-2.5 w-full bg-neutral border-b-2 rounded border-black" type="text"
                    placeholder="Smith's Coffee">
            </div>
            <div class="flex flex-col mb-5"><label for="">Email Address</label><input
                    class="p-2.5 bg-neutral border-b-2 rounded border-black" type="email"
                    placeholder="Julian.Smith@gmail.com">
            </div>
            <div class="flex flex-col mb-5"><label for="">Phone</label><input
                    class="p-2.5 bg-neutral border-b-2 rounded border-black" type="tel" placeholder="+61416323223">
            </div>
        </div>
        <div>
            <div class="flex flex-col mb-5"><label for="">Session type</label><select
                    class="p-2.5 bg-neutral border-b-2 rounded border-black" type="select" placeholder="e.g Julian Smith">
                    <option value="">Please Select</option>
                    <option value="">Co-Roasting</option>
                    <option value="">Starter Package</option>
                    <option value="">Basic Package</option>
                    <option value="">Standart Package</option>
                    <option value="">Premium Package</option>
                    <option value="">Other</option>
                </select></div>
            <div class="flex flex-col mb-5"><label for="">Experience Level</label>
                <div class="flex  w-full justify-around p-2.5  bg-neutral items-center rounded border-b-2 border-black">
                    <label for="">Beginner</label><input class=" " type="radio" name="experience">
                    <label for="">Some</label><input class=" " type="radio" name="experience">
                    <label for="">Expert</label><input class=" " type="radio" name="experience">
                </div>
                <div class="flex flex-col w-max mt-5">
                    <label for="date">Select preferred Date</label>
                    <input class="bg-neutral p-2.5 rounded" id="date" type="date" value="{{ date('Y-m-d') }}">
                </div>
            </div>
            <div class="flex flex-col mb-"><label for="">Your Message</label>
                <textarea class="resize-none mb-5 p-2.5 bg-neutral border-b-2 rounded border-black" rows="5" cols="40"
                    placeholder="Type here..."></textarea>
                <x-ui.buttonSolid class=" text-white">SUBMIT REQUEST</x-ui.buttonSolid>
            </div>
        </div>
    </form>
</section>
