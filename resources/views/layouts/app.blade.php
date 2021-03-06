<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lartisan</title>

    <link href="{{ elixir('css/all.css') }}" rel='stylesheet' type='text/css'>
    <link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    @yield('css')
</head>
<body id="app-layout">

<main id="main_panel">
    <nav class="navbar navbar-default navbar-color" id="navbar">
        <div class="container">

            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand animated bounceInLeft toggle-button" data-pjax="no-pjax"
                   href="/">
                    Lartisan
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav animated fadeIn">
                    <li><a href="{{ url('/index') }}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav animated fadeIn">
                    <li><a data-pjax="no-pjax" href="{{ url('/flarum') }}">Interlocution</a></li>
                </ul>


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::check())
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('users.show',Auth::id()) }}"><i class="fa fa-btn fa-gears"></i>Setting</a>
                                </li>
                                <li><a data-pjax="no-pjax" href="{{ url('/logout') }}"><i
                                                class="fa fa-btn fa-sign-out"></i>SignOut</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a class="p-jax" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="p-jax" href="{{ url('/register') }}">Register</a></li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

@yield('content')

<!-- <footer id="footer" class="footer">
        <a href="/html/about.html">About</a>
    </footer> -->
</main>

<div id="up_down">
    <button class="btn btn-info" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false">
        GO <i class="glyphicon glyphicon-eject"></i>
    </button>
</div>

<!-- JavaScripts -->
<script src="{{ elixir('js/all.js') }}"></script>
<script src="{{ elixir('js/qiniu.js') }}"></script>
<script src="http://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
<script src="http://cdn.bootcss.com/slideout/0.1.12/slideout.min.js"></script>
<script src="http://cdn.bootcss.com/marked/0.3.5/marked.min.js"></script>
@yield('js')
<div>{!! Yuansir\Toastr\Facades\Toastr::render() !!}</div>

</body>
</html>
