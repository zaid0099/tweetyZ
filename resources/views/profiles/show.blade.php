<x-app>
    <header>


        <div class="relative">
            <img src="{{asset('images/default-profile-banner.jpg')}}" alt="" class="mb-6">

            <img src="{{ $user->avatar}}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="12%" style="left: 50%">
        </div>

        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="font-bold test-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit, $user')
                <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <div>
            <p class="text-sm">You can easily save your host and database data in the cloud and later retrieve it on another Mac,
                when backing up data before making changes on your host. Learn more
            </p>
        </div>


    </header>

    @include('_timeline',[
    'tweets' => $user->tweets])
</x-app>
