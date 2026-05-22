<x-layouts.app>
    <section class="min-h-screen bg-neutral px-5 py-10">
        <div class="max-w-6xl mx-auto">

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
                            <p class="text-neutral-500">Country</p>
                            <p class="font-medium">{{ auth()->user()->country ?? 'Not added yet' }}</p>
                        </div>
                        
                    </div>
                    
                </aside>

                {{-- Right side: update form --}}
                <div class="bg-white rounded-2xl shadow-sm border border-black/10 p-6 md:p-8">

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-black">
                            Edit Personal Details
                        </h2>
                        <p class="text-sm text-neutral-500 mt-1">
                            Change your details below and save your updates.
                        </p>
                    </div>

                    <form action="{{ route('settings.update') }}" method="POST"
                        class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-medium">First Name</label>
                            <input name="first_name" type="text"
                                value="{{ old('first_name', auth()->user()->first_name) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-medium">Last Name</label>
                            <input name="last_name" type="text"
                                value="{{ old('last_name', auth()->user()->last_name) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-medium">Phone</label>
                            <input name="phone" type="text" value="{{ old('phone', auth()->user()->phone) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-medium">Email</label>
                            <input name="email" type="email" value="{{ old('email', auth()->user()->email) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col md:col-span-2">
                            <label class="mb-1 text-sm font-medium">Street Address</label>
                            <input name="street_address" type="text"
                                value="{{ old('street_address', auth()->user()->street_address) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-medium">City</label>
                            <input name="city" type="text" value="{{ old('city', auth()->user()->city) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-medium">Postal Code</label>
                            <input name="postal_code" type="text"
                                value="{{ old('postal_code', auth()->user()->postal_code) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="flex flex-col md:col-span-2">
                            <label class="mb-1 text-sm font-medium">Country</label>
                            <input name="country" type="text" value="{{ old('country', auth()->user()->country) }}"
                                class="px-3 py-2 border border-tertiary bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-tertiary/40">
                        </div>

                        <div class="md:col-span-2 flex justify-end gap-3 pt-5">
                            <a href="{{ url()->previous() }}"
                                class="px-5 py-2 rounded-lg border border-black/20 text-black hover:bg-black/5">
                                Cancel
                            </a>

                            <button type="submit" class="px-6 py-2 rounded-lg bg-tertiary text-white hover:opacity-90">
                                Save Changes
                            </button>
                        </div>
                    </form>
<form action="{{ route('settings.delete') }}" method="POST">
            @csrf
            @method('DELETE')<button
                class="mt-5 text-xs  text-red-500 p-1 rounded-xl hover:bg-red-500 hover:text-white transition duration-300 ease-in-out"
                onclick="return confirm('Are you Sure?This action can not be undone.')" type="submit">Delete
                Account</button></form>
                </div>

            </div>
        
        </div>
        
    </section>
</x-layouts.app>
