<?php

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

new class extends Component {
    public $name = '';
    public $lastName = '';
    public $businessName = '';
    public $email = '';
    public $phone = '';
    public $typeOf = '';
    public $message = '';
    //honeypot input
    public $website = '';

    public function contactSubmit()
    {
        $data = $this->validate([
            'name' => 'required|string|min:2|max:100',
            'lastName' => 'required|string|min:2|max:100',
            'businessName' => 'required|string|min:2|max:100',
            'email' => 'require|email:rfc,dns|max:255',
            'phone' => 'required|string|max:30',
            'typeOf' => 'required|string',
            'message' => 'required|string|max:5000',
            'website' => 'nullable|max:0',
        ]);

        Mail::to('info@cesarscoffeecup.com')->send(new ContactFormMail($data));
        $this->reset();
        session()->flash('success', 'Message sent!');
    }
};
?>

<section
    class="p-5 flex flex-col sm:flex-row w-full justify-center sm:flex md:mx-auto md:flex md:justify-center gap-10 lg:p-15 ">
    <div class="flex flex-col sm:w-full md:w-3xl  sm: gap-5">
        <h2 id="contactForm" class="text-5xl text-primary mb-5">Get in touch</h2>
        <div class="flex gap-5 items-start">
            <svg class="h-7 w-7 shrink-0" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path fill="currentColor"
                    d="M320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
            </svg>

            <p>Mon-Fri: 8:00 AM - 5:00 PM<br> Sat: 9:00 AM - 2:00 PM</p>
        </div>
        <div class="flex gap-5 items-start">
            <svg class="shrink-0 w-7 h-7" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 640"><!--!Font Awesome Pro v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2026 Fonticons, Inc.-->
                <path fill="currentColor"
                    d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
            </svg>
            <p>19 Churchill St, North Williamstown,<br> VIC 3016</p>
        </div>
        <div class="flex gap-5 mb-10 items-start">
            <svg class="shrink-0 h-7 w-7 " xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path fill="currentColor"
                    d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
            </svg>
            <p>info@cesarscoffeecup.com.au</p>
        </div>
        <div class="mb-10 sm:mb-0 flex   md:max-w-200  h-90 mt-auto"><iframe class="h-full w-full rounded md:block"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.3517643218615!2d144.86003537676578!3d-37.85205893622908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66148018d3543%3A0xe873e59dd7c65e0d!2s19%20Churchill%20St%2C%20Williamstown%20North%20VIC%203016!5e0!3m2!1sen!2sau!4v1777770937450!5m2!1sen!2sau"
                style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <form class="bg-pastel/60 flex flex-col h-full  shadow-md  rounded p-5 lg:p-10" wire:submit.prevent="contactSubmit">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-red-500">{{ $error }}</p>
            @endforeach

        @endif
        @if (session('success'))
            <p class="text-green-500 text-2xl">{{ session('success') }}</p>
        @endif
        {{-- //honeypot div --}}
        <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
            <div class="absolute -left-[9999px]" aria-hidden="true">

                <label for="website">Website</label>

                <input id="website" type="text" wire:model="website" tabindex="-1" autocomplete="off">

            </div>
            <div class="flex w-full gap-5">
                <div class="flex w-full flex-col mb-5"><label for="firstName">First Name</label><input id="firstName"
                        class="p-2.5 w-full bg-neutral border-b-2 rounded border-black " type="text" name="name"
                        wire:model="name" placeholder="Julian">
                </div>
                <div class="flex w-full flex-col mb-5"><label for="lastName">Last Name</label><input id="lastName"
                        wire:model="lastName" class="p-2.5 w-full bg-neutral border-b-2 rounded border-black"
                        type="text" placeholder="Smith">
                </div>
            </div>
            <div class="flex w-full flex-col mb-5"><label for="businessName">Business Name</label><input
                    id="businessName" wire:model="businessName"
                    class="p-2.5 w-full bg-neutral border-b-2 rounded border-black" type="text"
                    placeholder="Smith's Coffee">
            </div>
            <div class="flex flex-col mb-5"><label for="email">Email Address</label><input id="email"
                    wire:model="email" name="email" class="p-2.5 bg-neutral border-b-2 rounded border-black"
                    type="email" placeholder="Julian.Smith@gmail.com">
            </div>
            <div class="flex flex-col mb-5"><label for="phone">Phone</label><input id="phone" wire:model="phone"
                    name="phone" class="p-2.5 bg-neutral border-b-2 rounded border-black" type="tel"
                    placeholder="+61416323223">
            </div>
            <div class="flex flex-col mb-5"><label for="typeOf">Type of enquiry</label><select id="typeOf"
                    wire:model="typeOf" name="typeOf" class="p-2.5 bg-neutral border-b-2 rounded border-black"
                    type="select" placeholder="e.g Julian Smith">
                    <option value="" disabled selected>Please Select</option>
                    <option value="Co-Roasting">Co-Roasting</option>
                    <option value="Roaster Hire">Roaster Hire</option>
                    <option value="Wholesale">Wholesale</option>
                    <option value="Starter Packages">Starter Packages</option>
                    <option value="Private label">Private label</option>
                    <option value="Facility Visit">Facility Visit</option>
                    <option value="Other">Other</option>
                </select></div>
            <div class="flex flex-col mb-"><label for="message">Your Message</label>
                <textarea id="message" name="message" wire:model="message"
                    class="resize-none mb-5 p-2.5 bg-neutral border-b-2 rounded border-black" rows="5" cols="40"
                    placeholder="Type here..."></textarea>
                <x-ui.buttonSolid class=" text-white">SUBMIT REQUEST</x-ui.buttonSolid>
            </div>
    </form>
</section>
