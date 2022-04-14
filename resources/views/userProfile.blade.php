<x-header data="Home" />

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/customised.css') }}">
        <title>Profile: {{session('name')}}</title>

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
       <h1>{{session('id')}}</h1>
        <input type='hidden' id='userid' value="{{session('id')}}"/>


<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
    
    <tr>
        <td>{{session('id')}}</td>
        <td>{{session('name')}}</td>
        <td>{{session('email')}}</td>
       
    </tr>
</table>



<style>
.w-5{
    display:none
}
</style>
      
    </body>
    <script src="/js/app.js"></script>
    
</html>