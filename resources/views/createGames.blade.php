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

    <h1>Create Games</h1>
    <form action="createGames" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="gameName">gameName</label>
    <input type="text" name="gameName" placeholder="gameName">
    <br><br>

    <label for="gamePrice">gamePrice</label>
    <input type="text" name="gamePrice" placeholder="gamePrice">
    <br><br>

    <label for="gameDesc">gameDesc</label>
    <input type="text" name="gameDesc" placeholder="gameDesc">
    <br><br>

    <label for="gamePublisher">gamePublisher</label>
    <input type="text" name="gamePublisher" placeholder="gamePublisher">
    <br><br>

    <label for="gameAgeRating">gameAgeRating</label>
    <input type="text" name="gameAgeRating" placeholder="gameAgeRating">
    <br><br>

    <label for="gameGenre">gameGenre</label>
    <input type="text" name="gameGenre" placeholder="gameGenre">
    <br><br>

    <label for="gameName">gameReleaseDate</label>
    <input type="date" name="gameReleaseDate" placeholder="gameReleaseDate">
    <br><br>

    <label for="gameName">gameLanguage</label>
    <input type="text" name="gameLanguage" placeholder="gameLanguage">
    <br><br>

    <label for="gameRequirement">gameRequirement</label>
    <input type="text" name="gameRequirement" placeholder="gameRequirement">
    <br><br>

    <input type="file" name="file" required>
    <br><br>

    <button type="submit">Submit</button>
    </form>
</body>