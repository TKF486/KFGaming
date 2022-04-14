<x-header data="Create Games" />
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>Create Games</title>

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
        <h1>Create Games</h1>
        <form action="createGames" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="gameName">Game Name: </label>
        <input type="text" name="gameName" placeholder="Name" class="@error('gameName') is-invalid @enderror" required autocomplete="gameName">
        @error('gameName')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gamePrice">Game Price: </label>
        <input type="number" name="gamePrice" placeholder="Price" class="@error('gamePrice') is-invalid @enderror" required autocomplete="gamePrice">
        @error('gamePrice')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameDesc">Game Description: </label>
        <input type="text" name="gameDesc" placeholder="Description" class="@error('gameDesc') is-invalid @enderror" required>
        @error('gameDesc')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gamePublisher">Game Publisher: </label>
        <input type="text" name="gamePublisher" placeholder="Publisher" class="@error('gamePublisher') is-invalid @enderror" required>
        @error('gamePublisher')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameAgeRating">Age Rating: </label>
        <input type="number" name="gameAgeRating" placeholder="Age Rating" class="@error('gameAgeRating') is-invalid @enderror" required>
        @error('gameAgeRating')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameGenre">Game Genre: </label>
        <input type="text" name="gameGenre" placeholder="Genre" class="@error('gameGenre') is-invalid @enderror" required>
        @error('gameGenre')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameReleaseDate">Release Date: </label>
        <input type="date" name="gameReleaseDate" placeholder="Release Date" class="@error('gameReleaseDate') is-invalid @enderror" required>
        @error('gameReleaseDate')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameLanguage">Game Language: </label>
        <input type="text" name="gameLanguage" placeholder="Language" class="@error('gameLanguage') is-invalid @enderror" required>
        @error('gameLanguage')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="gameRequirement">Requirement: </label>
        <input type="text" name="gameRequirement" placeholder="Requirement" class="@error('gameRequirement') is-invalid @enderror" required>
        @error('gameRequirement')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <br><br>

        <label for="mainImage">Main Image: </label>
        <input type="file" name="file" required>
        <br><br>

        <label for="image1">Image 1: </label>
        <input type="text" name="image1" placeholder="URL for image 1" >
        <br><br>

        <label for="image2">Image 2: </label>
        <input type="text" name="image2" placeholder="URL for image 2" >
        <br><br>

        <button type="submit" class="btn btn-green-moon">Submit</button>
        </form>
    </div>
    </div>
</body>
<x-footer/>