<x-header data="Checkout"/>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('css/customised.css') }}">
    <title>Checkout</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"

    />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
@canany(['isUser', 'isAdmin'])
    <div class="body_container">
        <div class="form_container">
            <form action="createOrder" method="POST">
                @csrf
                <input type="hidden" name="game_id" class="form-control" value="<?php echo $_GET['gameID']; ?>">
                <input type="hidden" name="user_id" class="form-control" value="<?php echo $_GET['userID']; ?>">

                <div class="form-group">
                    <label for="creditCard">Credit Card:</label>
                    <input type="text" name="creditCard" class="form-control" placeholder="Enter Credit Card Number" required>
                </div>
                <br>
                <div class="form-group">
                    <div><label for="creditCard">Address:</label></div>
                    <div><textarea name="address" placeholder="Enter your address" rows="5" cols="50" required></textarea></div>
                </div>


                <button type="submit" class="btn btn-green-moon">Submit</button>
            </form>
        </div>
    </div>
@else
    <script type="text/javascript">
        window.location = "../login";
    </script>
@endcanany

</body>


</html>
