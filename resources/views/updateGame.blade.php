<x-header data="updateGame" />
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

    <h1>Update Games</h1>
    <form action="updateGame" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="gameName">gameName</label>
    <input type="text" name="gameName" value="{{$data['gameName']}}">
    <br><br>

    <label for="gamePrice">gamePrice</label>
    <input type="text" name="gamePrice" value="{{$data['gamePrice']}}">
    <br><br>

    <label for="gameDesc">gameDesc</label>
    <input type="text" name="gameDesc" value="{{$data['gameDesc']}}">
    <br><br>

    <label for="gamePublisher">gamePublisher</label>
    <input type="text" name="gamePublisher" value="{{$data['gamePublisher']}}">
    <br><br>

    <label for="gameAgeRating">gameAgeRating</label>
    <input type="text" name="gameAgeRating" value="{{$data['gameAgeRating']}}">
    <br><br>

    <label for="gameGenre">gameGenre</label>
    <input type="text" name="gameGenre" value="{{$data['gameGenre']}}">
    <br><br>

    <label for="gameName">gameReleaseDate</label>
    <input type="date" name="gameReleaseDate" value="{{$data['gameReleaseDate']}}">
    <br><br>

    <label for="gameName">gameLanguage</label>
    <input type="text" name="gameLanguage" value="{{$data['gameLanguage']}}">
    <br><br>

    <label for="gameRequirement">gameRequirement</label>
    <input type="text" name="gameRequirement" value="{{$data['gameRequirement']}}">
    <br><br>

    <label for="mainImage">main Image</label>
    <input type="file" name="file" value="{{$data['file']}}">
    <br><br>

    <label for="image1">image1</label>
    <input type="text" name="image1" value="{{$data['image1']}}">
    <br><br>

    <label for="image2">image2</label>
    <input type="text" name="image2" value="{{$data['image2']}}">
    <br><br>

    <button type="submit">Submit</button>
    </form>
</body>
<x-footer/>