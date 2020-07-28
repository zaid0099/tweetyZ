<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">

    <div class="mr-2 flex-shrink-0 ">
        <div class="flex items-center text-sm">
            <a href="{{ $tweet->user->path() }}">
                <img src="{{$tweet->user->avatar}}" alt="" class="rounded-full mr-2" width="50" height="50">
            </a>
        </div>
    </div>

    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm mb-3">{{ $tweet->body }}</p>

        <div class="flex">
            <div class="flex items-center mr-4 {{ $tweet->isDisLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
                <span class="text-xs">
                    {{ $tweet->likes ? : 0}}
                </span>
                <i class="fa fa-thumbs-up ml-2 " aria-hidden="true"></i>
            </div>

            <div class="flex items-center mr-4 {{ $tweet->isDisLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
                <span class="text-xs">
                    {{ $tweet->disLikes ? : 0 }}
                </span>
                <i class="fa fa-thumbs-down ml-2 " aria-hidden="true"></i>
            </div>
        </div>
    </div>

</div>
