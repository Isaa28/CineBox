<nav x-data="{ open: false }" class="backdrop-blur-xl bg-neutral-200/70 border-b border-white/10 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex items-center space-x-6">

                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto text-indigo-500" />
                    </a>
                </div>

                <div class="hidden sm:flex items-center space-x-1">

                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    <x-nav-link :href="route('movies.index')" :active="request()->routeIs('movies.*')">
                        Filme
                    </x-nav-link>

                    <x-nav-link :href="route('rooms.index')" :active="request()->routeIs('rooms.*')">
                        Salas
                    </x-nav-link>

                    <x-nav-link :href="route('sessions.index')" :active="request()->routeIs('sessions.*')">
                        Sessões
                    </x-nav-link>

                    <x-nav-link :href="route('tickets.index')" :active="request()->routeIs('tickets.*')">
                        Ingressos
                    </x-nav-link>

                    <x-nav-link :href="route('snacks.index')" :active="request()->routeIs('snacks.*')">
                        Lanches
                    </x-nav-link>

                </div>
            </div>

            <div class="hidden sm:flex items-center space-x-4">

                <div class="text-gray-500 text-sm">
                    <p>Seu perfil</p>
                </div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 rounded-lg bg-white/20 hover:bg-white/30 text-gray-400 transition duration-150 focus:outline-none">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ms-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            Perfil
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                Sair
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 transition duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none">
                        <path :class="{'hidden': open, 'inline-flex': ! open }"
                              class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />

                        <path :class="{'hidden': ! open, 'inline-flex': open }"
                              class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</nav>
