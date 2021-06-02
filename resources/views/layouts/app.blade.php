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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.css">

{{-- <style>

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
color: rgb(223, 223, 223);
font-weight: bold;
}

/* Change background color of buttons on hover */
.tab button:hover {
    color: rgb(36, 172, 193);
    }

/* Style the tab content */
.tabcontent {
background-color:  rgb(255, 255, 255);
display: none;
padding: 6px 12px;

}

.tab .tab_1 {
    border-right: none;
}

.tab .tab_1:hover {
    background-color: white;
    cursor: default;

}

.tab button.active {
background-color:rgb(255, 255, 255);
font-weight: bold;
color: rgb(0, 151, 174);

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

        </style> --}}

</head>
<body>

    <br><br><br>
    <div class="container" style="background-color: transparent">
        <br>
    <div id="app">
            </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>
</html>

<script>
    function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
