<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
    @csrf
        <textarea name="body" id="" class="w-full outline-none" placeholder="What's Up!"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <div class="flex items-center text-sm">
                <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full mr-2">
                {{auth()->user()->name}}
            </div>
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-Root!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
    @enderror
</div>