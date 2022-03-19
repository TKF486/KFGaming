<h2>Game Details</h2>

@foreach($games as $game)
<p>gameName</p> 
<p>{{$game['gameName']}}</p>

<p>gamePrice</p> 
<p>{{$game['gamePrice']}}</p>

<p>gameDesc</p>
<p>{{$game['gameDesc']}}</p>

<p>gamePublisher</p>
<p>{{$game['gamePublisher']}}</p>

<p>gameAgeRating</p>
<p>{{$game['gameAgeRating']}}</p>

<p>gameGenre</p>
<p>{{$game['gameGenre']}}</p>

<p>gameReleaseDate</p>
<p>{{$game['gameReleaseDate']}}</p>

<p>gameLanguage</p>
<p>{{$game['gameLanguage']}}</p>

<p>gameRequirement</p>
<p>{{$game['gameRequirement']}}</p>

@endforeach

<button>Checkout</button>