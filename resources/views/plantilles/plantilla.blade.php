<!DOCTYPE html>
<html lang="es">

<head>
    <title>VendingMAchine</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
    }
    </style>
</head>

<body>
    <div class='header'>
        <nav>
            <ul>
                <a href="/home">Home</a>
                <a href="/products">Products</a>
                <a href="/login">Login</a>
                <a href="/register">Register</a>

                @auth
                <a href="/logout">Logout</a>

                @endauth

                @auth
                   <div class = "welcomeUser">
                        Welcome {{ Auth::user()->name }}
                   </div>
                @endauth
            </ul>
        </nav>
    </div>
    <div class='content'>
        @yield('content')
    </div>
</body>

</html>
