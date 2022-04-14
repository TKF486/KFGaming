<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>{{$headerTitle}}</title>

        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"/>
<style>


body {
                font-family: 'Nunito', sans-serif;
            }
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="/home">KFGaming</a>

@if (Route::has('login'))
    <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
        @canany(['isUser', 'isAdmin'])
        <div class="topnav-right">
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Hello, {{session('name')}}</a>
            <a href="{{ url('logout') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
        </div>
        @else
            <div class="topnav-right">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            </div>
            @if (Route::has('register'))
                <div class="topnav-right">
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                </div>
            @endif
        @endcanany
    
@endif

<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</body>
</html>