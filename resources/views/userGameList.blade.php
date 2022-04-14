<x-header data="Profile: {{session('name')}}" />

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ url('css/customised.css') }}">
            <title>Profile: {{session('name')}}</title>

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
        <body class="main_container">
        <h1>Game Listing</h1>
    <a href="createGames">
    <button>Create Game</button>
    </a>
    <table border="1">
    <tr>
    <td>Game Name</td>
    <td>Main Image</td>
    </tr>

    @foreach($games as $game)
    <tr>
    <td>{{$game['gameName']}}</td>
    <td>
    <img src={{ asset('storage/game/'.$game['mainImage']) }} alt="game_pic">
    </td>
    </tr>
    @endforeach
</table>
        </body>
        <script src="/js/app.js"></script>
        <x-footer/>
</html>