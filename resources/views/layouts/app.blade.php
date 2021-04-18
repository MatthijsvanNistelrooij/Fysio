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
    background-color: rgb(77, 77, 77);
    color: rgb(208, 208, 208);
    border-radius: 10px 10px 0 0;
    border: none;
}


/* Style the tab */
.tab {
    overflow: hidden;
    border-bottom: none;
    background-color: transparent;
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
color: rgb(46, 114, 187, 0.8);
border-bottom: 1px solid rgb(206, 206, 206);
font-weight: bold;
}

/* Change background color of buttons on hover */
.tab button:hover {
    color:gray;
    }

/* Style the tab content */
.tabcontent {
background-color:  rgb(255, 255, 255);
display: none;
padding: 6px 12px;
border: 1px solid rgb(209, 209, 209);
border-radius: 0 0 8px 8px;
border-top: none;
}

.tab .tab_1 {
    border-right: none;
}

.tab .tab_1:hover {
    background-color: white;
    cursor: default;

}

/* Create an active/current tablink class */
.tab button.active {
background-color:  rgb(255, 255, 255);
color: rgb(145, 145, 145);
border: 1px solid rgb(206, 206, 206);
border-bottom: white;
font-weight: bold;
border-radius: 8px 8px 0 0;
}


        .zoom {
        transition: transform .25s;
        }

        .zoom_no_image {
        transition: transform .3s;
        }

        .zoom_no_image:hover {
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.06);
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

        <nav class="navbar navbar-expand-md navbar-light bg-light" style="border-radius: 5px; height: 72px; border: 1.5px solid rgb(155, 155, 155, 0.5); color: rgb(233, 246, 247)">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}" style="margin-top: 5px">
                                 <img src="/images/logo.png" alt="" style="width: 155px; margin-left: -15px; margin-top: -15px; margin-bottom: -10px" class="zoom_no_image">
                                </a>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('horses/index') }}" style="margin-top: 5px">
                                <i class="fas fa-home"></i>
                                Home</a>
                          </li> &nbsp;
                          <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('horses/create') }}" style="margin-top: 5px">
                                <i class="fas fa-plus"></i>
                                Nieuwe Invoer</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('animals/index') }}" style="margin-top: 5px">
                                <i class="fas fa-dog"></i>
                                Dieren </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('horses/index') }}" style="margin-top: 5px">
                                <i class="fas fa-gear"></i>
                                Settings </a>
                          </li>
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('horses/twitter') }}" style="margin-top: 5px">
                                    <i class="fab fa-twitter"></i>
                                    Twitter &nbsp;</a>
                              </li>



                    </ul>

                    <!-- Right Side Of Navbar -->


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
