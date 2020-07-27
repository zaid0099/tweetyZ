<div class="border border-gray-300 rounded-lg mt-8">
    @forelse($tweets as $tweet)
    @include('_tweet')
    @empty
    <p class="p-4"> No Tweet Yet!</p>
    @endforelse
</div>
