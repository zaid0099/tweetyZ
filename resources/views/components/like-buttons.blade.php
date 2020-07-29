<div class="flex">
    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        <div class="flex items-center mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <button type="submit" class="text-xs">
                {{ $tweet->likes ? : 0 }}
                <i class="fa fa-thumbs-up ml-1" aria-hidden="true"></i>
            </button>
        </div>
    </form>

    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        @method('DELETE')

        <div class="flex items-center mr-4 {{ $tweet->isDisLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <button type="submit" class="text-xs">
                {{ $tweet->dislikes ? : 0 }}
                <i class="fa fa-thumbs-down ml-1" aria-hidden="true"></i>
            </button>
        </div>
    </form>
</div>
