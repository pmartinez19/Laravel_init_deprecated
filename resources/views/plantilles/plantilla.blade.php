<!DOCTYPE html>
<html lang="es">

<head>
    <title>VendingMAchine</title>
    <meta charset="UTF-8">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand">MAchine</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div>
            <div class="navbar-collapse inline">
                <ul class="navbar-nav mr-3 mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-item nav-link" href="/home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="/products">Products</a>
                    </li>
                    @if (!isset(Auth::user()->email))
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="/register">Register</a>
                    </li>
                    @endif
                    @auth
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="/logout">Logout</a>
                    </li>
                    @endauth
                </ul>
                <div class="text-success">
                    @auth
                    Welcome {{ Auth::user()->name }}
                        @endauth
                    @if (!isset(Auth::user()->email))
                        Guest
                    @endif
                </div>


            </div>
        </div>
    </nav>

    <div class='content'>
        @yield('content')
    </div>
</body>

</html>
