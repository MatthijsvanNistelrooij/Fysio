<!DOCTYPE html>
<html>
<head>
    <title>Fysio App</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


<style>
        body {
            font-family: Arial;
            background-image: url('/images/logo4.png');
            /* background-repeat: no-repeat; */
            background-position: -1000% -50%;
            background-attachment: fixed;
            background-size: 1800px auto;
            opacity: 0.9;
        }




        td.top{
            background-color: rgb(79, 79, 79);
            color: wheat;
            border-bottom: none;
        }


        /* Style the tab */
        .tab {
          overflow: hidden;
          border: 1px solid rgb(157, 157, 157);
          background-color: #f1f1f1;
          border-radius: 10px 10px 0 0;
        }

        /* Style the buttons inside the tab */
        .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
        color: rgb(135, 135, 135);
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
          background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
        background-color: rgb(79, 79, 79);
        color: wheat;
        }

        /* Style the tab content */
        .tabcontent {
        background-color: white;
        display: none;
        padding: 6px 12px;
        border: 1px solid rgb(155, 155, 155);
        border-top: none;
        border-radius: 0 0 10px 10px;
        }


        .zoom {
        transition: transform .2s;
        }

        .zoom:hover {
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1);
        }

        </style>

</head>
<body>

    <br><br><br>
    <div class="container">

    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-light" style="border-radius: 10px; border: 1px solid rgb(94, 94, 94, 0.5); color: black">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}" style="margin-top: 5px">
                                Home
                                {{-- <img src="/images/logo.png" alt="" style="width: 155px; margin-left: -15px; margin-top: -15px; margin-bottom: -10px" class="zoom"> --}}
                                </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('horses/index') }}" style="margin-top: 5px">
                                {{-- <i class="fas fa-list"></i> --}}
                                Overzicht</a>
                          </li> &nbsp;
                          <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('horses/create') }}" style="margin-top: 5px">
                                {{-- <i class="fas fa-plus"></i> --}}
                                Nieuwe Invoer</a>
                          </li>
                          {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('horses/create') }}" style="margin-top: 5px">
                                Login</a>
                          </li> --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>
</html>
