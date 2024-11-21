<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-content">
            <div class="navbar-logo">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="logo" />
                </a>
            </div>

            <div class="navbar-links">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
        </div>

        <div class="navbar-settings">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="settings-button">
                        @auth
                            <div>{{ Auth::user()->name }}</div>
                        @else
                            <div>Guest</div>
                        @endauth
                        <div class="icon">
                            <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    @auth
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                    @else
                        <x-dropdown-link :href="route('login')">
                            {{ __('Login') }}
                        </x-dropdown-link>
                    @endauth
                </x-slot>
            </x-dropdown>
        </div>

        <div class="navbar-mobile">
            <button @click="open = ! open" class="hamburger-button">
                <svg class="hamburger-icon" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="navbar-mobile-menu">
        <div class="menu-item">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="menu-settings">
            <div class="user-info">
                @auth
                    <div class="user-name">{{ Auth::user()->name }}</div>
                    <div class="user-email">{{ Auth::user()->email }}</div>
                @else
                    <div class="user-name">Guest</div>
                    <div class="user-email">N/A</div>
                @endauth
            </div>

            <div class="settings-links">
                @auth
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @else
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                @endauth
            </div>
        </div>
    </div>
</nav>
