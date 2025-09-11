<nav x-data="{ open: false }" class="bg-white shadow-sm sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14 items-center">
            <!-- Logo -->
            <a href="{{ route('user.dashboard') }}" class="flex items-center space-x-2">
                <x-application-logo class="h-8 w-auto fill-current text-blue-500"/>
                <span class="text-lg font-semibold text-gray-800">DreamHome</span>
            </a>

            <!-- Desktop Links -->
            <div class="hidden md:flex md:space-x-4">
                <x-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">Dashboard</x-nav-link>
                <x-nav-link :href="route('user.properties')" :active="request()->routeIs('user.properties')">Properties</x-nav-link>
                <x-nav-link :href="route('user.bookings')" :active="request()->routeIs('user.bookings')">Bookings</x-nav-link>
                <x-nav-link :href="route('user.profile')" :active="request()->routeIs('user.profile')">Profile</x-nav-link>
                <x-nav-link :href="route('user.earnings')" :active="request()->routeIs('user.earnings')">Earnings</x-nav-link>
            </div>

            <!-- User Dropdown -->
            <div class="hidden md:flex md:items-center">
                <x-dropdown align="right" width="44">
                    <x-slot name="trigger">
                        <button class="flex items-center space-x-2 rounded-full px-2 py-1 hover:bg-gray-100 focus:outline-none">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-semibold">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <span class="hidden md:block font-medium text-gray-700">{{ Auth::user()->name }}</span>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Logout</x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex md:hidden">
                <button @click="open = !open" class="p-2 rounded-md text-gray-500 hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg :class="{'hidden': open, 'block': !open}" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg :class="{'block': open, 'hidden': !open}" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="md:hidden px-2 pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">Dashboard</x-responsive-nav-link>
        <x-responsive-nav-link :href="route('user.properties')" :active="request()->routeIs('user.properties')">Properties</x-responsive-nav-link>
        <x-responsive-nav-link :href="route('user.bookings')" :active="request()->routeIs('user.bookings')">Bookings</x-responsive-nav-link>
        <x-responsive-nav-link :href="route('user.profile')" :active="request()->routeIs('user.profile')">Profile</x-responsive-nav-link>
        <x-responsive-nav-link :href="route('user.earnings')" :active="request()->routeIs('user.earnings')">Earnings</x-responsive-nav-link>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Logout</x-responsive-nav-link>
        </form>
    </div>
</nav>
