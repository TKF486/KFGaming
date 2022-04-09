<h1>HomePage</h1>
<h2>123</h2>
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @can('isUser')
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Hello, {{session('name')}}</a>
            <a href="{{ url('logout') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endcan
    </div>
@endif

