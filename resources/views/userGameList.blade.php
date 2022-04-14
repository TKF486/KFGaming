<x-header data="Game Bought: {{session('name')}}" />

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ url('css/customised.css') }}">
            <title>Game Bought: {{session('name')}}</title>

            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
            </style>
        </head>
        <body class="main_container">
        <div style="margin-left: 100px">
            <h1 style="display: flex; justify-content: center;">Game Bought by {{session('name')}}</h1>
            <br>
            <!-- <a href="createGames">
            <button>Create Game</button>
            </a> -->
            <div style="display: flex; justify-content: center;">
                <table style="width: 70%; border: 1px solid #23262e; background-color: rgba(103, 193, 245, 0.2); ">
                    <tr style="padding:20px">
                        <th style="padding:20px"><h3>Game Name</h3></th>
                        <th style="padding:20px"><h3>Main Image</h3></th>
                    </tr>

                    @foreach($games as $game)
                    <tr>
                        <td style="padding:20px">{{$game['gameName']}}</td>
                        <td style="padding:20px">
                        <img src={{ asset('storage/game/'.$game['mainImage']) }} alt="game_pic">
                        </td>
                    </tr>
                    @endforeach
                </table>
                
            </div>
            <br><br>
        </div>
        </body>
                <script src="/js/app.js"></script>
                <x-footer/>
</html>
