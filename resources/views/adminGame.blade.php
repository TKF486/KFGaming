<x-header data="adminGame" />
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>React Posts</title>

        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"
  
/>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    @if (Route::has('login'))
      @can(['isAdmin'])
    <h1>Game Listing</h1>
    <a href="createGames">
    <button>Create Game</button>
    </a>
    <table border="1">
    <tr>
    <td>ID</td>
    <td>Game Name</td>
    <td>Price</td>
    <td>Description</td>
    <td>Publisher</td>
    <td>Age Rating</td>
    <td>Genre</td>
    <td>Release Date</td>
    <td>Language</td>
    <td>Requirement</td>
    <td>Main Image</td>
    <td>Image 1</td>
    <td>Image 2</td>
    <td>Operation 1</td>
    <td>Operation 2</td>
    </tr>

    @foreach($games as $game)
    <tr>
    <td>{{$game['id']}}</td>
    <td>{{$game['gameName']}}</td>
    <td>{{$game['gamePrice']}}</td>
    <td>{{$game['gameDesc']}}</td>
    <td>{{$game['gamePublisher']}}</td>
    <td>{{$game['gameAgeRating']}}</td>
    <td>{{$game['gameGenre']}}</td>
    <td>{{$game['gameReleaseDate']}}</td>
    <td>{{$game['gameLanguage']}}</td>
    <td>{{$game['gameRequirement']}}</td>
    <td>
    <img src={{ asset('storage/game/'.$game['mainImage']) }} alt="game_pic">
    </td>
    <td>
    <img src={{$game['image1']}} alt="img1" class="table_img">
    </td>
    <td>
    <img src={{$game['image2']}} alt="img2" class="table_img">
    </td>
    <td><a href={{"deleteGame/".$game['id']}}>Delete</a></td>
    <td><a href={{"updateGame/".$game['id']}}>Update</a></td>
    </tr>
    @endforeach
</table>

<span>
    {{$games->links()}}
</span>
   @endcanany
@endif
      
    </body>

    <style>
.w-5{
  display: none
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</html>
<x-footer/>