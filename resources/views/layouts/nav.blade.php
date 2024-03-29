<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    id="toggle-mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href={{route('home')}}>
                        <img class="block lg:hidden h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                        <img class="hidden lg:block h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                            alt="Workflow">
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        @if(Auth::check())
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        @if(Auth::user()->hasRole('admin'))
                            <a href="{{route('dashboard')}}"
                                class="{{ Route::is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium"
                                aria-current="page">Dashboard</a>
                                @endif
                        @endif
                        <a href="{{ route('createPosts') }}"
                            class="{{ Route::is('createPosts') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Create
                            Post</a>
                        <a href="{{ route('viewPosts') }}"
                            class="{{ Route::is('viewPosts') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">View
                            Posts</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @if(Auth::check())
                <!-- check if user is logged in -->
                <span class="hidden lg:block text-white">{{Auth::user()->name}}</span>
                @else
                <span class="hidden lg:block text-white">guest</span>
                @endif
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    <div>
                        <button type="button"
                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            @if(Auth::check())
                            <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_img}}" alt="profilePic">
                            @else
                            <img class="h-8 w-8 rounded-full" src="../img/user.png" alt="profilePic" />
                            @endif

                        </button>
                    </div>

                    <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                    <div class="z-50 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        id="menu" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                        tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        @if (Route::has('login'))
                        @auth
                        <a class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                        id="user-menu-item-2" href="{{ route('editProfile') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Edit Profile</a>
                        <a class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                        id="user-menu-item-2" href="{{ route('viewAllUsers') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">View Users</a>
                        <form role="menuitem" tabindex="-1" id="user-menu-item-0" method="POST"
                            action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @else
                        <a class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1" href="{{ route('login') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                        <a class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-2" href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif

                        @endauth

                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
        @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('dashboard')}}" class="{{ Route::is('dashboard') ? 'bg-gray-900' : 'text-gray-300'}} text-white block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">Dashboard</a>
            @endif
            @endif
            <a href="{{ route('createPosts') }}"
                class="{{ Route::is('createPosts') ? 'bg-gray-900' : 'text-gray-300'}} text-white block px-3 py-2 rounded-md text-base font-medium">Create Post</a>

            <a href="{{route('viewPosts')}}"
                class="{{ Route::is('viewPosts') ? 'bg-gray-900' : 'text-gray-300'}} text-white block px-3 py-2 rounded-md text-base font-medium">View Post</a>



        </div>
    </div>
</nav>
