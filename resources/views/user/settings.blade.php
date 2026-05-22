<x-layouts.app>
    <section class=" flex flex-col p-5 justify-between">

        <legend class="text-5xl mb-5">{{auth()->user()->first_name}}'s Settings</legend>

        <form action="" method="POST" class="grid grid-cols-2 gap-5 rounded ">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <label for="">First Name</label><input type="text" value="{{ auth()->user()->first_name }}"
                    class=" px-2 border-2 border-tertiary bg-white rounded">
            </div>
            <div class="flex flex-col">
                <label for="">Last Name</label><input type="text"
                    value="{{ auth()->user()->last_name }}"class=" px-2 border-2 border-tertiary bg-white rounded">
            </div>

            <div class="flex flex-col"><label for="">Phone:</label><input type="text"
                    value="{{ auth()->user()->phone }}"class=" px-2 border-2 border-tertiary bg-white rounded"></div>
            <div class="flex flex-col">
                <label for="">Email</label><input type="text"
                    value="{{ auth()->user()->email }}"class=" px-2 border-2 border-tertiary bg-white rounded">
            </div>
            <div class="flex flex-col">
                <label for="">Street Address</label><input type="text"
                    value="{{ auth()->user()->street_address }}"class=" px-2 border-2 border-tertiary bg-white rounded">
            </div>
            <div class="flex flex-col"><label for="">City</label><input type="text"
                    value="{{ auth()->user()->city }}" class=" px-2 border-2 border-tertiary bg-white rounded"></div>

        </form>
    </section>
</x-layouts.app>
