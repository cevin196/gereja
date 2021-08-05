        
        <x-nav-link2 :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link2>

        <x-nav-link2 :href="route('jemaat.index')" :active="request()->routeIs('jemaat.index')">
            {{ __('Jemaat') }}
        </x-nav-link2>

        <x-nav-link2 :href="route('keluarga.index')" :active="request()->routeIs('keluarga.index')">
            {{ __('Keluarga') }}
        </x-nav-link2>

        <x-nav-link2 :href="route('keuangan.index')" :active="request()->routeIs('keuangan.index')">
            {{ __('Keuangan') }}
        </x-nav-link2>
 