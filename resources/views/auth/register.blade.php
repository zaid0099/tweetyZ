<x-master>


    <div class="container mx-auto flex justify-center ">
        <div class="px-16 py-6 bg-gray-300 rounded-lg border border-gray-600">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bold text-lg mb-4">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="userName" class="black mb-2 uppercase font-bold text-xs text-gray-700">User Name</label>

                                <div class="col-md-6">
                                    <input id="userName" type="text" class="border border-gray-400 p-2 w-full @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>

                                    @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="name" class="black mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="border border-gray-400 p-2 w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="email" class="black mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="border border-gray-400 p-2 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="password" class="black mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="border border-gray-400 p-2 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="password-confirm" class="black mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mb-6 mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
