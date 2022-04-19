<x-header data="Profile: {{session('name')}}" />

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ url('css/customised.css') }}">
            <title>Profile: {{session('name')}}</title>

            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
            </style>
        </head>
        <body class="main_container">
            
            <div class="main_container" style="margin-left: 100px">
                <h1>Personal Details</h1>
                <p><Image
                    className="d-block  w-100"
                    src="https://exploringbits.com/wp-content/uploads/2022/01/Zhongli-PFP-2.jpg?ezimgfmt=rs:352x352/rscb3/ng:webp/ngcb3"
                    fluid /></p>
                <div style="font-weight: bold;">NAME:</div>
                <div style="font-size: 25px">{{session('name')}}</div>
                <div style="font-weight: bold;">EMAIL:</div>
                <div style="font-size: 25px;">{{session('email')}}</div>
                <div>
                    <br>
                <a href="userGameList/{{session('id')}}">
                    <button class="btn-green-moon">
                        Game bought
                    </button></a>
                    <p><br></p>
                </div>
            </div>
            
        </body>
        <script src="/js/app.js"></script>
        <x-footer/>
</html>
