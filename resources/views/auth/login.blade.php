<x-layouts.app>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <fieldset class="fieldset bg-tertiary flex flex-col border-base-300 rounded-box w-xs border p-4 mx-auto">

            <legend class="fieldset-legend">Login</legend>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif

            <label class="label">Email</label>
            <input name="email" type="email" class="bg-pastel" placeholder="test@gmail.com" />
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label class="label">Password</label>
            <input name="password" type="password" class="bg-pastel" />
            <button type="submit" class="border-2 border-black">Login</button>

        </fieldset>
    </form>
</x-layouts.app>
