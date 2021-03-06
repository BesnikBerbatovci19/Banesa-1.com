<!DOCTYPE html>

<html>
<head>

    <title>@yield('titulli')|Banesat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7135c7649e.js" crossorigin="anonymous"></script>
    {{--Dropzone--}}
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

    <link href="/css/style.css" rel="stylesheet">
    <style>
        .navbar-nav {
            margin-left: 100px;
        }

        #navbar {
            margin-left: 150px;
        }
    </style>
</head>
</html>
<body id="body">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="/images_theem/logo banesat.png" width="300" height="50">
    <button class="navbar-toggler" type="button" id="button1" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @if(Auth::user() && Auth::user()->is_admin == 1)
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/administrimi">Administrimi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/aprovim">Aprovo Shpalljet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/message">Mesazhat</a>
                </li>

            @endif
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/pronat">Posto
                        Shpallje</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" id="nav" href="/">Ballina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav" href="/shtepia">Shtepit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav" href="/banesa">Banesa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav" href="lokalet">Lokalet</a>
            </li>
                @if(!Auth::user() && Auth::user()->is_admin == 1))
            <li class="nav-item">
                <a class="nav-link" id="nav" href="/about">RrethNesh</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav"
                   href="/contact">Kontakti</a>
            </li>
                    @endif
        </ul>
        <ul class="navbar-nav" id="navbar">
           {{-- @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="accont">Llogaria</a>
                </li>
            @endif--}}
            @guest
                <li class="nav-item"><a class="nav-link" id="nav" href="{{ route('login') }}">Kyqu</a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" id="nav" href="{{ route('register') }}">Regjistrohu</a>
                    </li>
                @endif
            @else

                    <div class="btn-group">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} {{Auth::user()->surname}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" class="dropdown-item" id="nav"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Dil
                            </a>
                            <a class="nav-link" id="nav" href="accont">Llogaria</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </div>
        @endguest
        </ul>

    </div>
</nav>
<section id="section1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>

        </div>
    </div>
</section>

<footer id="footer">
    <div class="row d-flex justify-content-between flex-sm-row flex-column bg-light">
        <div class="col-2">

        </div>
        <div class="col-6 logo-footer">
            <img src="/images_theem/logo banesat.png" width="200" height="50" alt="logo-footer">
            <p class="p-footer">www.Banesat.com</p>
        </div>
        <div class="col-2 span-footer">
            <span>Banesat.com All Right recived</span>
        </div>
        <div class="col-2">

        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#button1").click(function () {
            $("#navbarSupportedContent").toggle();
        });
    });
</script>


</body>
</html>
