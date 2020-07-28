<ul>
    <li class="mb-4">
        <a href="{{ route('home') }}" class="font-bold text-lg mb-5 black">Home</a>
    </li>
    <li class="mb-4">
        <a href="{{ route('explore') }}" class="font-bold text-lg mb-5 black">Explore</a>
        <!-- </li>
    <li class="mb-4">
        <a href="#" class="font-bold text-lg mb-5 black">Notifications</a>
    </li>
    <li class="mb-4">
        <a href="#" class="font-bold text-lg mb-5 black">Messages</a>
    </li>
    <li class="mb-4">
        <a href="#" class="font-bold text-lg mb-5 black">Bookmarks</a>
    </li>
    <li class="mb-4">
        <a href="#" class="font-bold text-lg mb-5 black">Lists</a>
    </li> -->
    <li class="mb-4">
        <a href="{{ route('profile', current_user()) }}" class="font-bold text-lg mb-5 black">Profile</a>
    </li>
    <li class="mb-4">
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-lg">LogOut</button>
        </form>
    </li>
</ul>
