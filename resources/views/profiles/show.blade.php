<x-master>


    <header class="relative">
        <div>
            <img src="{{asset('images/default-profile-banner.jpg')}}" alt="" class="mb-6">
        </div>

        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="font-bold test-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs">Follow Me!</a>
            </div>
        </div>

        <div>
            <p class="text-sm">You can easily save your host and database data in the cloud and later retrieve it on another Mac,
                when backing up data before making changes on your host. Learn more
            </p>
        </div>

        <div>
            <img src="{{ $user->avatar}}" alt="" class="rounded-full mr-2 absolute" style="width: 150px; left: calc(50% - 75px); top:16rem">
        </div>



    </header>

    @include('_timeline',[
    'tweets' => $user->tweets])
