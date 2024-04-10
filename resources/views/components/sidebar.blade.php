<div class="bg-gray-800 text-white w-48 min-h-screen hidden sm:block">
    <h2 class="text-lg font-bold mb-6"></h2>

    <ul class="list-none ">
        <li class="mb-2">
            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                class="block py-2 px-4 rounded hover:bg-gray-700">{{ __('Dashboard') }}</a>
        </li>
        <li class="mb-2">
            <a href="{{ route('users') }}" :active="request()->routeIs('users')"
                class="block py-2 px-4 rounded hover:bg-gray-700">{{ __('Users') }}</a>
        </li>
        <li class="mb-2">
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Link 3</a>
        </li>
    </ul>


</div>

<div class="bg-gray-800 text-white w-24 min-h-screen md:hidden sm:hidden">
    <h2 class="text-lg font-bold mb-6"></h2>

    <ul class="list-none ">
        <li class="mb-2">
            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                class="block py-2 px-4 rounded hover:bg-gray-700"><x-icon class="w-8 h-8 text-white-600"
                    name="home" /></a>
        </li>
        <li class="mb-2">
            <a href="{{ route('users') }}" :active="request()->routeIs('users')"
                class="block py-2 px-4 rounded hover:bg-gray-700"><x-icon class="w-8 h-8 text-white-600"
                    name="user" /></a>
        </li>
        <li class="mb-2">
            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700"><x-icon class="w-8 h-8 text-white-600"
                    name="information-circle" /></a>
        </li>
    </ul>


</div>