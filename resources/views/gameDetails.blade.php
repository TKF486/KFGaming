<h2>Game Details</h2>

@foreach($games as $game)
<p>gameName</p> 
<p>{{$game['gameName']}}</p>

<p>gameDesc</p> 
<p>{{$game['gameDesc']}}</p>

<p>gamgamePublishereName</p>
<p>{{$game['gamePublisher']}}</p>

@endforeach
      