<nav x-data="{ open: false }" class="border-b shadow-sm bg-white/80 backdrop-blur-lg border-gray-100/10">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->



                <!-- Public Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-4 py-2 border-2 rounded-lg border-blue-500/20 hover:border-blue-500/40">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')" class="px-4 py-2 border-2 rounded-lg border-blue-500/20 hover:border-blue-500/40">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link :href="route('certificates')" :active="request()->routeIs('certificates')" class="px-4 py-2 border-2 rounded-lg border-blue-500/20 hover:border-blue-500/40">
                        {{ __('Certificates') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="px-4 py-2 border-2 rounded-lg border-blue-500/20 hover:border-blue-500/40">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center">
                <!-- Admin Navigation Links -->
                @auth
                @if(Auth::user()->role === 'admin')
                <div class="hidden space-x-4 sm:flex sm:items-center sm:ms-6">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="px-4 py-2 border-2 rounded-lg border-blue-500/20 hover:border-blue-500/40">
                        Dashboard
                    </x-nav-link>
                </div>
                @endif
                @endauth

                <!-- Settings Dropdown -->
                @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 transition-all border border-gray-200 rounded-lg shadow-sm bg-white/90 backdrop-blur-sm hover:shadow-md">
                                <div class="font-medium text-gray-700">{{ Auth::user()->name }}</div>
                                <svg class="w-4 h-4 text-gray-500 ms-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Profile Link -->
                            <x-dropdown-link :href="route('profile.edit')" class="hover:bg-gray-50/50 group">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="text-gray-700 group-hover:text-gray-900">{{ __('Profile Settings') }}</span>
                                </div>
                            </x-dropdown-link>

                            <!-- Separator -->
                            <div class="my-1 border-t border-gray-100"></div>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="hover:bg-red-50/50 group">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-red-400 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span class="text-red-600 group-hover:text-red-700">{{ __('Log Out') }}</span>
                                    </div>
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth

                <!-- Hamburger Menu -->
                <div class="flex items-center -me-2 sm:hidden">
                    <button @click="open = ! open" class="p-2 transition-colors rounded-lg hover:bg-gray-100/50">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white/95 backdrop-blur-xl">
        <!-- Public Links -->
        <div class="px-4 pt-2 pb-3 space-y-2">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-4 py-3 rounded-lg">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('projects')" :active="request()->routeIs('projects')" class="px-4 py-3 rounded-lg">
                {{ __('Projects') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('certificates')" :active="request()->routeIs('certificates')" class="px-4 py-3 rounded-lg">
                {{ __('Certificates') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="px-4 py-3 rounded-lg">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>

        <!-- Admin Links -->
        @auth
        <div class="px-4 pt-2 pb-3 space-y-2 border-t border-gray-100/20">
            <x-responsive-nav-link :href="route('admin.portfolio.index')" :active="request()->routeIs('admin.portfolio.*')" class="px-4 py-3 rounded-lg bg-blue-50/50">
                {{ __('Portfolio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.certificates.index')" :active="request()->routeIs('admin.certificates.*')" class="px-4 py-3 rounded-lg bg-blue-50/50">
                {{ __('Certificates') }}
            </x-responsive-nav-link>
        </div>

        <!-- User Settings -->
        <div class="pt-4 pb-2 border-t border-gray-100/20">
            <div class="px-4 py-3">
                <div class="font-medium text-gray-800">{{ Auth::user()->name }}</div>
                <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="px-4 mt-2 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="px-4 py-3 rounded-lg">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="px-4 py-3 text-red-600 rounded-lg hover:bg-red-50/50">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>