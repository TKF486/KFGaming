<x-header data="Home" />

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>Home</title>

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>
    </head>
    <body class="antialiased">
       <!-- <p>{{session('id')}}</p> -->
        <input type='hidden' id='userid' value="{{session('id')}}"/>
        <div id="gameListing"></div>

    </body>
    <script src="/js/app.js"></script>
</html>
<x-footer/>
