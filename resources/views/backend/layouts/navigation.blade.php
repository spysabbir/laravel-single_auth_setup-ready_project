
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="route('dashboard')" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>
                </div>

                <div>{{ Auth::user()->name }}</div>

                <a href="route('profile.edit')">
                    Profile
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
