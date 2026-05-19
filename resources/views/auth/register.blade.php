<x-layouts.app>
    <form method="POST" action="{{route('register.store')}}" class="max-w-4xl w-md sm:w-xl md:w-2xl lg:w-3xl flex flex-col mx-auto justify-center bg-white rounded-2xl shadow-lg p-5 md:p-10 space-y-8">
    @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{$error}}</li>
                @endforeach
            </ul>
        @endif
    <div>
        <h2 class="text-3xl font-bold text-black mb-2">Business Details</h2>
        <p class="text-sm text-neutral-500">
            Please enter your details.
        </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-2 gap-6">

        <div>
            <label for="first_name" class="block text-sm font-medium text-black mb-2">
                First name <span class="text-red-500">*</span>
            </label>
            <input value="{{old('first_name')}}" id="first_name" name="first_name" type="text" required
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
            <input value="{{old('last_name')}}" id="last_name" name="last_name" type="text" required
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
            <input value="{{old('email')}}" id="email" name="email" type="email" required
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
            <input value="{{old('phone')}}" id="phone" name="phone" type="tel"
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
            <input value="{{old('company_name')}}" value="{{old('cpmpany_name')}}" id="company_name" name="company_name" type="text" required
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
            <input value="{{old('business_name')}}" id="business_name" name="business_name" type="text"
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
            <input value="{{old('tax_number')}}" id="tax_number" name="tax_number" type="text"
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
            <input value="{{old('street_address')}}" id="street_address" name="street_address" type="text"
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
            <input value="{{old('city')}}" id="city" name="city" type="text"
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
            <input value="{{old('postal_code')}}" id="postal_code" name="postal_code" type="text"
                class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                placeholder="3000">
            @error('postal_code')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:col-span-2">
            <label for="country" class="block text-sm font-medium text-black mb-2">
                Country <span class="text-red-500">*</span>
            </label>
            <input value="{{old('country')}}" id="country" name="country" type="text"
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
    <input id="password" name="password" type="password" required
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
        class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3e text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
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
</x-layouts.app>
