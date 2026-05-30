<?php

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $first_name;

    public $last_name;

    public $phone;

    public $email;

    public $street_address;

    public $city;

    public $postal_code;

    public $state;

    public $country;


    public function mount()
    {
        $user = auth()->user();

       $this->first_name = $user->first_name;

        $this->last_name = $user->last_name;

        $this->phone = $user->phone;

        $this->email = $user->email;

        $this->street_address = $user->street_address;

        $this->city = $user->city;

        $this->postal_code = $user->postal_code;

        $this->state = $user->state;

        $this->country = $user->country;
        

    }

    public function settings(Request $request)
    {
        $user = auth()->user();

        $validated = $this->validate([
            'first_name' => 'required|string|max:255',

            'last_name' => 'required|string|max:255',
            // 'tax_number'=> 'required|string|max:255|unique:users,tax_number',

            'phone' => 'nullable|string|max:255',

            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],

            'street_address' => 'nullable|string|max:255',

            'city' => 'nullable|string|max:255',

            'postal_code' => 'nullable|string|max:255',

            'state' => 'nullable|string|max:255',

            'country' => 'nullable|string|max:255',
        ]);

        $user->update($validated);

        session()->flash('success', 'Profile updated succesfully');
    }

    public function deleteAccount(Request $request)
    {
        $user = auth()->user();
        Auth::logout();
        $user->delete();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
};
?>

        <section class="min-h-screen bg-neutral px-5 py-10">
            <div class="max-w-6xl mx-auto">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
                <div class="mb-10">
                    <p class="text-sm uppercase tracking-wide text-tertiary mb-2">
                        Account Settings
                    </p>
    
                    <h1 class="text-4xl md:text-5xl font-semibold text-black">
                        {{ auth()->user()->first_name }}'s Account
                    </h1>
    
                    <p class="text-neutral-600 mt-3">
                        View your saved details and update your personal information.
                    </p>
                </div>
    
                <div class="grid grid-cols-1 lg:grid-cols-[350px_1fr] gap-8">
    
                    {{-- Left side: saved details --}}
                    <aside class="bg-white rounded-2xl shadow-sm border border-black/10 p-6 h-fit">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-14 h-14 rounded-full bg-tertiary text-white flex items-center justify-center text-xl font-semibold">
                                {{ strtoupper(substr(auth()->user()->first_name, 0, 1)) }}
                            </div>
    
                            <div>
                                <h2 class="text-xl font-semibold">
                                    {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                                </h2>
                                <p class="text-sm text-neutral-500">
                                    {{ auth()->user()->email }}
                                </p>
                            </div>
                        </div>
    
                        <div class="space-y-4 text-sm">
                            <div>
                                <p class="text-neutral-500">ABN, VAT, EIN, etc.</p>
                                <p>{{ auth()->user()->tax_number ?? 'Not added yet' }}</p>
                            </div>
                            <div>
                                <p class="text-neutral-500">Phone</p>
                                <p class="font-medium">{{ auth()->user()->phone ?? 'Not added yet' }}</p>
                            </div>
    
                            <div>
                                <p class="text-neutral-500">Street Address</p>
                                <p class="font-medium">{{ auth()->user()->street_address ?? 'Not added yet' }}</p>
                            </div>
    
                            <div>
                                <p class="text-neutral-500">City</p>
                                <p class="font-medium">{{ auth()->user()->city ?? 'Not added yet' }}</p>
                            </div>
    
                            <div>
                                <p class="text-neutral-500">Postal Code</p>
                                <p class="font-medium">{{ auth()->user()->postal_code ?? 'Not added yet' }}</p>
                            </div>
                            <div>
                                <p class="text-neutral-500">State</p>
                                <p class="font-medium">{{ auth()->user()->state ?? 'Not added yet' }}</p>
                            </div>
    
                            <div>
                                <p class="text-neutral-500">Country</p>
                                <p class="font-medium">{{ auth()->user()->country ?? 'Not added yet' }}</p>
                            </div>
    
                        </div>
    
                    </aside>
    
                    {{-- Right side: update form --}}
                    <div class="bg-white rounded-2xl shadow-sm border border-black/10 p-6 md:p-8">
    
                        <div class="mb-8 flex text-xl justify-between">
                            <div class="">
                                <h2 class="text-2xl font-semibold text-black">
                                    Edit Personal Details
                                </h2>
                                <p class="text-sm text-neutral-500 mt-1">
                                    Change your details below and save your updates.
                                </p>
    
                            </div>
                            <div>
                                @if (session('success'))
                                    <p class="text-green-500">{{ session('success') }}</p>
                                @endif
                            </div>
                        </div>
    
                        <form wire:submit.prevent="settings" class="grid grid-cols-1 md:grid-cols-2 gap-5">
    
    
                            <div class="flex flex-col">
                                <label for="name" class="mb-1 text-sm font-medium">First Name</label>
                                <input id="name" name="first_name" type="text" wire:model="first_name"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('first_name')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="flex flex-col">
                                <label for="last_name" class="mb-1 text-sm font-medium">Last Name</label>
                                <input id="last_name" name="last_name" wire:model="last_name" type="text"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('last_name')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- <div class="flex flex-col md:col-span-2">
                                <label for="tax">ABN, VAT, EIN, etc.</label><input id="tax" name="tax_number" wire:model="tax_number"
                                    class="px-3 py-2 border-tertiary border rounded " type="text"
    
                                    @error('tax_number')
                                        <p class="text-red-500 mt-1 text-sm">{{$message}}</p>
                                    @enderror
                            </div> --}}
                            <div class="flex flex-col">
                                <label for="phone" class="mb-1 text-sm font-medium">Phone</label>
                                <input id="phone" name="phone" type="text" wire:model="phone"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('phone')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="flex flex-col">
                                <label class="mb-1 text-sm font-medium">Email</label>
                                <input name="email" wire:model="email" type="email"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('email')
                                    <p class="text-sm mt-1 text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="flex flex-col md:col-span-2">
                                <label for="street_address" class="mb-1 text-sm font-medium">Street Address</label>
                                <input id="street_address" wire:model="street_address" name="street_address" type="text"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('street_address')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="flex flex-col">
                                <label for="city" class="mb-1 text-sm font-medium">City</label>
                                <input id="city" wire:model="city" name="city" type="text"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('city')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="flex flex-col">
                                <label for="postal_code" class="mb-1 text-sm font-medium">Postal Code</label>
                                <input id="postal_code" wire:model="postal_code" name="postal_code" type="text"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('postal_code')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label for="select" class="mb-1 text-sm font-medium">State</label>
                                <select id="select"
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40"
                                    name="state" wire:model="state" id="state">
                                    <option value="">Select State</option>
    
                                    <option value="ACT" @selected(old('state', auth()->user()->state) === 'ACT')>ACT</option>
    
                                    <option value="NSW" @selected(old('state', auth()->user()->state) === 'NSW')>NSW</option>
    
                                    <option value="NT" @selected(old('state', auth()->user()->state) === 'NT')>NT</option>
    
                                    <option value="QLD" @selected(old('state', auth()->user()->state) === 'QLD')>QLD</option>
    
                                    <option value="SA" @selected(old('state', auth()->user()->state) === 'SA')>SA</option>
    
                                    <option value="TAS" @selected(old('state', auth()->user()->state) === 'TAS')>TAS</option>
    
                                    <option value="VIC" @selected(old('state', auth()->user()->state) === 'VIC')>VIC</option>
    
                                    <option value="WA" @selected(old('state', auth()->user()->state) === 'WA')>WA</option>
    
                                </select>
                                @error('state')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="flex flex-col">
                                <label for="country" class="mb-1 text-sm font-medium">Country</label>
                                <input id="country" wire:model="country" name="country" type="text"
    
                                    class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                                @error('country')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div class="md:col-span-2 flex justify-end gap-3 pt-5">
                                <a href="{{ url()->previous() }}"
                                    class="px-5 py-2 rounded-lg border border-black/20 text-black hover:bg-black/5">
                                    Cancel
                                </a>
    
                                <button type="submit"
                                    class="px-6 py-2 rounded-lg bg-tertiary text-white hover:opacity-90 hover:text-white">
                                    Save Changes
                                </button>
                            </div>
                        </form>
    
                        <button
                            class="mt-5 text-xs  text-red-500 border-2 border-transparent p-2 rounded-xl hover:border-2 hover:border-red-500 transition duration-300 ease-in-out"
                            wire:click="deleteAccount" wire:confirm="Are you Sure? This action can not be undone."
                            type="button">Delete
                            Account</button>
                    </div>
    
                </div>
    
            </div>
    
        </section>

