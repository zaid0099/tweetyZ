<div class="border border-blue-400 rounded-lg px-8 py-6">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="" class="w-full outline-none" placeholder="What's Up!" required autofocus></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <div class="flex items-center text-sm">
                <img src="{{ current_user()->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
                {{current_user()->name}}
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-2 text-white px-6 text-sm">Tweet-a-Root!</button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
    @enderror
</div>
