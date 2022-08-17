<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">aMioParere</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Parma <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Pareri</a></li

                        <li><a href="#">Eventi</a></li>



                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" action="/search.php" method="get" role="search">
                <div class="form-group">
                    <input type="text" name="find_desc" placeholder="cosa cerchi ..." class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="find_loc" placeholder="dove (localit&agrave; o cap)" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger">Cerca</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/signup.php"><span class="glyphicon glyphicon-user"></span> Iscriviti ora!</a></li>
                <li><a href="/login.php"><span class="glyphicon glyphicon-log-in"></span> Entra</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


<!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            &lt;!&ndash; Left Side Of Navbar &ndash;&gt;
            <ul class="navbar-nav mr-auto">

            </ul>

            &lt;!&ndash; Right Side Of Navbar &ndash;&gt;
            <ul class="navbar-nav ml-auto">
                &lt;!&ndash; Authentication Links &ndash;&gt;
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>-->
