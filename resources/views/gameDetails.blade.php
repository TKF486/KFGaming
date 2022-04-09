<h2>Game Listing</h2>
<table border="1">
    <tr>
        <td>id</td>
        <td>gameName</td>
        <td>gamePrice</td>
        <td>gameDesc</td>
        <td>gamePublisher</td>
        <td>gameAgeRating</td>
        <td>gameGenre</td>
        <td>gameReleaseDate</td>
        <td>gameLanguage</td>
        <td>gameRequirement</td>
        <td>Image</td>
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
        <img src="{{ asset('storage/game/'.$game->file_path) }}" alt="game_image" title="game_image">
        </td>
    </tr>
    @endforeach
</table>

<style>
    .w-5{
        display:none
    }
</style>