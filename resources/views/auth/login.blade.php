<x-layouts.app>
    <form method="POST" action="{{route('login')}}"
        class="max-w-4xl w-md sm:w-xl md:w-2xl lg:w-3xl mx-auto bg-white rounded-2xl shadow-lg p-6 md:p-10 space-y-8">
        @csrf

        <div>
            <h2 class="text-3xl font-bold text-black mb-2">LogIn</h2>
            <p class="text-sm text-neutral-500">
                Please enter your details.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="email" class="block text-sm font-medium text-black mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input id="email" name="email" type="email" required
                    class="w-full rounded-lg border border-neutral-300 bg-white px-2 py-2 sm:px-4 sm:py-3 text-sm outline-none focus:border-black focus:ring-2 focus:ring-black/10"
                    placeholder="you@example.com">
                @error('email')
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
        </div>

        <div class="pt-4">
            <button type="submit"
                class="w-full md:w-auto rounded-lg bg-black px-8 py-3 text-sm font-semibold text-white hover:bg-neutral-800 transition">
                LogIn
            </button>
        </div>
    </form>
</x-layouts.app>
