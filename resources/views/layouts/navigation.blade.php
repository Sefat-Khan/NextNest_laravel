<nav
    x-data="{ open: false }"
    class="bg-gradient-to-r from-[var(--text-color)] via-[var(--secondary-color)] to-[var(--primary-color)]
       border-b border-[var(--primary-color)]/60
       backdrop-blur-md
       shadow-sm hover:shadow-lg
       transition-all duration-300"
>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="group">
                        <x-application-logo
                            class="block h-10 w-auto text-white
       drop-shadow-sm
       transition-transform duration-300 group-hover:scale-105"
                        />
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden sm:flex sm:items-center space-x-10 sm:ms-12">
                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        class="relative text-base font-semibold text-white/90
       transition-all duration-300
       after:absolute after:-bottom-1 after:left-0 after:h-[2px] after:w-0
       after:bg-[var(--primary-color)]
       after:transition-all after:duration-300
       hover:text-white
       hover:after:w-full"
                    >
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium
       text-white
       bg-white/10
       backdrop-blur-md
       border border-white/10
       rounded-lg
       transition-all duration-300
       hover:bg-white/20
       hover:shadow-md"
                        >
                            <span>{{ Auth::user()->name }}</span>

                            <svg
                                class="h-4 w-4 text-white/80 transition-transform duration-300"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link
                            class="transition
                                   hover:bg-[var(--primary-color)]/10
                                   hover:text-[var(--secondary-color)]"
                            :href="route('profile.edit')"
                        >
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                class="transition
                                       hover:bg-[var(--primary-color)]/10
                                       hover:text-[var(--secondary-color)]"
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex sm:hidden">
                <button
                    @click="open = ! open"
                    class="p-2 rounded-lg
       text-white
       transition-all duration-300
       hover:bg-white/10
       hover:text-[var(--primary-color)]"
                >
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path
                            :class="{'hidden': open, 'inline-flex': ! open }"
                            class="inline-flex transition-all duration-300"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{'hidden': ! open, 'inline-flex': open }"
                            class="hidden transition-all duration-300"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="sm:hidden bg-[var(--bg-color)] border-t border-[var(--primary-color)]/20"
    >
        {{-- <div class="pt-3 pb-3 space-y-1 px-4">
            <x-responsive-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')"
                class="font-medium text-white/90 hover:text-[var(--primary-color)]"
            >
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> --}}

        <div class="pt-4 pb-4 border-t border-[var(--primary-color)]/20 px-4">
            <div class="font-semibold text-white">
                {{ Auth::user()->name }}
            </div>
            <div class="text-sm text-white">
                {{ Auth::user()->email }}
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link
                    class="text-white"
                    :href="route('profile.edit')"
                >
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link
                        class="text-white"
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
