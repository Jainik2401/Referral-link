<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LOGO</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/mail">Mail</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ session('username') }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if (session()->has('username'))
                                <li>
                                    <a class="dropdown-item" href="/logout">
                                        <span class="glyphicon glyphicon-log-in"></span>
                                        logout
                                    </a>
                                    <a class="dropdown-item" href="/profile">
                                        <span class="glyphicon glyphicon-user"></span>profile
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item" href="/signin">
                                        <span class="glyphicon glyphicon-log-in"></span> login
                                    </a>
                                </li>
                            @endif

                            {{-- <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a> --}}
                        </div>
                    </div>


                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>

</html>
