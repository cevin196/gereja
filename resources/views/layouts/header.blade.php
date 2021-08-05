<header class="bg-gradient-to-r from-green-400 to-blue-500 flex text-gray-100 space-x-3 fixed w-full z-10">        
    <a class=" p-3 hover:bg-green-600 text-lg font-bold" href="#">Dashboard</a>    
    <div class="flex justify-end w-full px-2">
        {{-- <div class="flex space-x-3">
            <a class="p-3 hover:bg-green-500 hover:text-gray-100 " href="#">Jemaat</a>
            <a class="p-3 hover:bg-green-500 hover:text-gray-100" href="#">Keluarga</a>
            <a class="p-3 hover:bg-green-500 hover:text-gray-100" href="#">Keuangan</a>
        </div> --}}
        <div class="flex p-2 px-2 space-x-3">
            <span class="p-1">Hello, {{Auth::user()->name}} </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
        
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
    
</header>