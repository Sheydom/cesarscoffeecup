<?php
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

new class extends Component {
    public $first_name;

    public $last_name;
    public $company_name;
    public $business_name;
    public $tax_number;
    public $password;
    public $password_confirmation;
    public $phone;

    public $email;

    public $street_address;

    public $city;

    public $postal_code;

    public $state;

    public $country;
    //honeypot input
    public $website = '';

    public function register()
    {
        $key = 'contact-form:' . request()->ip();

        if (RateLimiter::tooManyAttempts($key, 3)) {
            $this->addError('spam', 'Too many submissions. Please wait 1 minute.');

            return;
        }

        RateLimiter::hit($key, 60);

        $validated = $this->validate([
            'website' => 'nullable|max:0',
            'first_name' => ['required', 'string', 'max:100', 'min:2'],
            'last_name' => ['required', 'string', 'max:100', 'min:2'],
            'email' => ['required', 'email:rfc,dns', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:30'],
            'company_name' => ['required', 'string', 'max:100', 'min:2'],
            'business_name' => ['required', 'string', 'max:100', 'min:2'],
            'tax_number' => ['required', 'string', 'max:100', 'unique:users,tax_number'],
            'street_address' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:30'],
            'city' => ['required', 'string', 'max:100'],
            'postal_code' => ['required', 'string', 'max:30'],
            'country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Password::default()->mixedCase()->numbers()->symbols()],
        ]);

        $user = User::create($validated);

        Auth::login($user);
        session()->regenerate();

        return redirect('/');
    }
};
?>


<form wire:submit.prevent="register"
    class="max-w-4xl w-md sm:w-xl md:w-2xl lg:w-3xl flex flex-col mx-auto justify-center bg-white rounded-2xl shadow-lg p-5 md:p-10 space-y-8">
    @csrf
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @error('spam')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
    <div>
        <h2 class="text-3xl font-bold text-black mb-2">Register</h2>
        <p class="text-sm text-neutral-500">
            Please enter your details.
        </p>
    </div>
    {{-- honeypot div --}}
    <div class="absolute hidden" aria-hidden="true">

        <label for="website">Website</label>

        <input id="website" type="text" wire:model="website" tabindex="-1" autocomplete="off">

    </div>
    <div class="grid grid-cols-2 md:grid-cols-2 gap-6">

        <div>
            <label for="first_name" class="block text-sm font-medium text-black mb-2">
                First name <span class="text-red-500">*</span>
            </label>
            <input id="first_name" name="first_name" wire:model="first_name" type="text" required
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Your first name">
            @error('first_name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="last_name" class="block text-sm font-medium text-black mb-2">
                Last name <span class="text-red-500">*</span>
            </label>
            <input id="last_name" name="last_name" wire:model="last_name" type="text" required
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Your last name">
            @error('last_name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-black mb-2">
                Email <span class="text-red-500">*</span>
            </label>
            <input id="email" name="email" type="email" wire:model="email" required
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="you@example.com">
            @error('email')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-black mb-2">
                Phone number <span class="text-red-500">*</span>
            </label>
            <input id="phone" name="phone" wire:model="phone" type="tel"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="+61 400 000 000">
            @error('phone')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="company_name" class="block text-sm font-medium text-black mb-2">
                Company name <span class="text-red-500">*</span>
            </label>
            <input id="company_name" wire:model="company_name" name="company_name" type="text" required
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Company Pty Ltd">
            @error('company_name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="business_name" class="block text-sm font-medium text-black mb-2">
                Business name <span class="text-red-500">*</span>
            </label>
            <input id="business_name" name="business_name" type="text" wire:model="business_name"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Trading name">
            @error('business_name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:col-span-2">
            <label for="tax_number" class="block text-sm font-medium text-black mb-2">
                ABN, VAT, EIN, etc <span class="text-red-500">*</span>
            </label>
            <input id="tax_number" name="tax_number" type="text" wire:model="tax_number"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="ABN / VAT / EIN number">
            @error('tax_number')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:col-span-2">
            <label for="street_address" class="block text-sm font-medium text-black mb-2">
                Street address <span class="text-red-500">*</span>
            </label>
            <input id="street_address" name="street_address" wire:model="street_address" type="text"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Street address">
            @error('street_address')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>



        <div>
            <label for="city" class="block text-sm font-medium text-black mb-2">
                City <span class="text-red-500">*</span>
            </label>
            <input id="city" name="city" type="text" wire:model="city"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Melbourne">
            @error('city')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="postal_code" class="block text-sm font-medium text-black mb-2">
                Zip / Postal code <span class="text-red-500">*</span>
            </label>
            <input id="postal_code" name="postal_code" type="text" wire:model="postal_code"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="3000">
            @error('postal_code')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col md:col-span-1">
            <label class="block text-sm font-medium text-black mb-2" for="state">State <span
                    class="text-red-500">*</span></label>

            <select
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                name="state" id="state" wire:model="state">
                <option value="" required selected>Select State</option>
                <option value="ACT">ACT</option>
                <option value="NSW">NSW</option>
                <option value="NT">NT</option>
                <option value="QLD">QLD</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="VIC">VIC</option>
                <option value="WA">WA</option>
            </select>
            @error('state')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:col-span-1">
            <label for="country" class="block text-sm font-medium text-black mb-2">
                Country <span class="text-red-500">*</span>
            </label>
            <input id="country" name="country" wire:model="country" type="text"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Australia">
            @error('country')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-black mb-2">
                Password <span class="text-red-500">*</span>
            </label>
            <input id="password" name="password" type="password" required wire:model="password"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Create a password">
            @error('password')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-black mb-2">
                Confirm password <span class="text-red-500">*</span>
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" required
                wire:model="password_confirmation"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="Confirm your password">
        </div>

    </div>

    <div class="pt-4">
        <button type="submit"
            class="w-full md:w-auto rounded-lg bg-black px-8 py-3 text-sm font-semibold text-white hover:bg-neutral-800 transition">
            Create Account
        </button>
    </div>
</form>
