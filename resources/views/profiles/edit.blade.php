<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="black mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required value="{{ $user->name }}">

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="userName" class="black mb-2 uppercase font-bold text-xs text-gray-700">User Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="userName" id="userName" required value="{{ $user->userName }}">

            @error('userName')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label for="avatar" class="black mb-2 uppercase font-bold text-xs text-gray-700">avatar</label>

            <div class="flex">
                <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar" required value="{{ $user->avatar }}">

                <img src="{{ $user->avatar }}" alt="Your Avatar" width="40">

            </div>

            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="black mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" required value="{{ $user->email }}">

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="black mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password">

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="black mb-2 uppercase font-bold text-xs text-gray-700">Password Confirmation</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation">

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>


    </form>
</x-app>
