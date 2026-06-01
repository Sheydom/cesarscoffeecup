<?php

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\RateLimiter;

new class extends Component {
    public $name = '';
    public $lastName = '';
    public $businessName = '';
    public $email = '';
    public $phone = '';
    public $typeOf = '';
    public $experience = '';
    public $date;
    public $message = '';
    //honeypot input
    public $website = '';

    public function mount()
    {
        $this->date = now()->format('Y-m-d');
    }

    public function coRoastingSubmit()
    {
        $key = 'contact-form:' . request()->ip();

        if (RateLimiter::tooManyAttempts($key, 3)) {
            $this->addError('spam', 'Too many submissions. Please wait 1 minute.');

            return;
        }

        $data = $this->validate([
            'name' => 'required|string|min:2|max:100',
            'lastName' => 'required|string|min:2|max:100',
            'businessName' => 'required|string|min:2|max:100',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'required|string|max:30',
            'typeOf' => 'required|string',
            'experience' => 'required|string',
            'date' => 'required|date',
            'message' => 'required|string|max:5000',
            'website' => 'nullable|max:0',
        ]);

        Mail::to('info@cesarscoffeecup.com')->send(new ContactFormMail($data));
        $this->reset();
        $this->mount();
        session()->flash('success', 'Message sent!');
    }
};
?>

<section class="p-5 md:flex md:items-end md:justify-center gap-10 lg:gap-20 lg:p-15">
    <form id="coRoastingForm" class="bg-pastel flex flex-col h-full shadow-md rounded p-5 lg:p-10"
        wire:submit.prevent="coRoastingSubmit">

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <p class="text-red-500">{{ $error }}</p>
                @endforeach
            </ul>
        @endif

        @error('spam')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div class="flex justify-between">
            <p class="text-primary mb-2">Ready to Roast?</p>

            @if (session('success'))
                <p class="text-green-500 text-2xl">{{ session('success') }}</p>
            @endif
        </div>

        {{-- honeypot --}}
        <input id="website" type="text" wire:model="website" tabindex="-1" autocomplete="off" class="hidden"
            aria-hidden="true">

        <h2 class="text-4xl lg:text-7xl text-black mb-10">
            Book your Co-Roasting
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="flex flex-col">
                <label for="firstName">First Name</label>
                <input wire:model="name" required id="firstName" name="name"
                    class="p-2.5 w-full bg-neutral border-b-2 rounded border-black" type="text" placeholder="Julian">
            </div>

            <div class="flex flex-col">
                <label for="lastName">Last Name</label>
                <input wire:model="lastName" required id="lastName" name="lastName"
                    class="p-2.5 w-full bg-neutral border-b-2 rounded border-black" type="text" placeholder="Smith">
            </div>

            <div class="flex flex-col md:col-span-2">
                <label for="businessName">Business Name</label>
                <input wire:model="businessName" required id="businessName" name="businessName"
                    class="p-2.5 w-full bg-neutral border-b-2 rounded border-black" type="text"
                    placeholder="Smith's Coffee">
            </div>

            <div class="flex flex-col">
                <label for="email">Email Address</label>
                <input id="email" required wire:model="email" name="email"
                    class="p-2.5 bg-neutral border-b-2 rounded border-black" type="email"
                    placeholder="Julian.Smith@gmail.com">
            </div>

            <div class="flex flex-col">
                <label for="phone">Phone</label>
                <input id="phone" required name="phone" wire:model="phone"
                    class="p-2.5 bg-neutral border-b-2 rounded border-black" type="tel" placeholder="+61416323223">
            </div>

            <div class="flex flex-col md:col-span-2">
                <label for="typeOf">Type of enquiry</label>
                <select required id="typeOf" name="typeOf" wire:model="typeOf"
                    class="p-2.5 bg-neutral border-b-2 rounded border-black">
                    <option value="" selected disabled>Please Select</option>
                    <option value="Co-Roasting">Co-Roasting</option>
                    <option value="Starter Package">Starter Package</option>
                    <option value="Basic Package">Basic Package</option>
                    <option value="Standard Package">Standard Package</option>
                    <option value="Premium Package">Premium Package</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="flex flex-col md:col-span-2">
                <p>Experience Level</p>

                <div id="level"
                    class="flex w-full justify-around p-2.5 bg-neutral items-center rounded border-b-2 border-black">
                    <label for="beginner">Beginner</label>
                    <input required id="beginner" type="radio" name="experience" wire:model="experience"
                        value="Beginner">

                    <label for="some">Some</label>
                    <input id="some" type="radio" value="Some" name="experience" wire:model="experience">

                    <label for="expert">Expert</label>
                    <input id="expert" type="radio" name="experience" wire:model="experience" value="Expert">
                </div>
            </div>

            <div class="flex flex-col">
                <label for="date">Select Date</label>
                <input class="bg-neutral p-2.5 rounded border-b-2 border-black" required id="date" name="date"
                    wire:model="date" type="date">
            </div>

            <div class="flex flex-col md:col-span-2">
                <label for="message">Your Message</label>
                <textarea id="message" wire:model="message" name="message" required
                    class="resize-none mb-5 p-2.5 bg-neutral border-b-2 rounded border-black" rows="5"
                    placeholder="Type here..."></textarea>

                <x-ui.buttonSolid type="submit" class="text-white">
                    SUBMIT REQUEST
                </x-ui.buttonSolid>
            </div>

        </div>
    </form>
</section>
