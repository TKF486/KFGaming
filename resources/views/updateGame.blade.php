<x-header data="Update Game" />
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>Update Game</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  
     <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>

<body>
    <div class="main_container">
    <div style="margin-left: 50px">    
        <h1>Update Game</h1>
        <form action="updateGame" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <label for="gameName">Game Name</label>
        <input type="text" name="gameName" value="{{$data['gameName']}}" required>
        @error('gameName')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gamePrice">Game Price</label>
        <input type="text" name="gamePrice" value="{{$data['gamePrice']}}" required>
        @error('gamePrice')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameDesc">Game Description</label>
        <input type="text" name="gameDesc" value="{{$data['gameDesc']}}" required>
        @error('gameDesc')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gamePublisher">Game Publisher</label>
        <input type="text" name="gamePublisher" value="{{$data['gamePublisher']}}" required>
        @error('gamePublisher')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameAgeRating">Age Rating</label>
        <input type="text" name="gameAgeRating" value="{{$data['gameAgeRating']}}" required>
        @error('gameAgeRating')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameGenre">Game Genre</label>
        <input type="text" name="gameGenre" value="{{$data['gameGenre']}}" required>
        @error('gameGenre')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameReleaseDate">Release Date</label>
        <input type="date" name="gameReleaseDate" value="{{$data['gameReleaseDate']}}" required>
        @error('gameReleaseDate')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameLanguage">Game Language</label>
        <input type="text" name="gameLanguage" value="{{$data['gameLanguage']}}" required>
        @error('gameLanguage')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameRequirement">Requirement</label>
        <input type="text" name="gameRequirement" value="{{$data['gameRequirement']}}" required>
        @error('gameRequirement')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="mainImage">Main Image</label>
        <input type="file" name="file" value="{{$data['file']}}" required>
        <br><br>

        <label for="image1">Image 1</label>
        <input type="text" name="image1" value="{{$data['image1']}}">
        <br><br>

        <label for="image2">Image 2</label>
        <input type="text" name="image2" value="{{$data['image2']}}">
        <br><br>

        <button type="submit" class="btn btn-green-moon">Submit</button>
        </form>
    </div>
    </div>
</body>
<x-footer/>