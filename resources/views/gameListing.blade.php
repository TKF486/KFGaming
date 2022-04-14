<!-- <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<div class="upper">
<h1>Game Listing</h1>


</div>
<div id="gameListing"></div>
</body>
<script src="/js/app.js"></script>
</head> -->

<x-header data="Game Listing" />
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>Game Listing</title>

        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"/>
<style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <!-- <p>{{session('id')}}</p> -->
        <input type='hidden' id='userid' value="{{session('id')}}"/>
        <div id="gameListing"></div>
      
    </body>
    <script src="/js/app.js"></script>
    
</html>
