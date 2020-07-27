@unless (current_user()->is($user))
<form method="POST" action="{{ route('follow', $user->userName) }}">
    @csrf
    <button type="submit" href="" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs">
        {{ current_user()->following($user) ? 'UnFollow Me!' : 'Follow Me!'}}
    </button>
</form>
@endunless
