<x-master>

    <section class="px-8">
        <main class="py-4">
            <div class="lg:flex lg:justify-bwtween">
                @if(auth()->check())
                <div class="lg:w-1/6">
                    @include('_sidebar-links')
                </div>
                @endif

                <div class="lg:flex-1 lg:mx-10">
                    {{ $slot }}
                </div>

                @if(auth()->check())
                <div class="lg:w-1/6">
                    @include('_frinds-list')
                </div>
                @endif

            </div>
        </main>
    </section>

</x-master>
