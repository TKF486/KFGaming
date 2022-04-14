<x-header data="Game Details" />
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
    <h1>Game Listing</h1>
<table border="1">
    <tr>
    <td>ID</td>
    <td>Game Name</td>
    <td>Price</td>
    <td>Description</td>
    <td>Age Rating</td>
    <td>Genre</td>
    <td>Release Date</td>
    <td>Language</td>
    <td>Requirement</td>
    <td>Main Image</td>
    <td>Image 1</td>
    <td>Image 2</td>
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
    <td>{{$game['mainImage']}}</td>
    <td>{{$game['image1']}}</td>
    <td>{{$game['image2']}}</td>
    <td><a href={{"delete/".$game['id']}}>Delete</a></td>
    <td><a href={{"update/".$game['id']}}>Update</a></td>
    </tr>
    @endforeach
</table>

<span>
    {{$games->links()}}
</span>


      
    </body>

    <!-- <style>
.w-5{
display: none
}
</style> -->

</html>
