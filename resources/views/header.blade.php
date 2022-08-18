<div class="header-blue">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="/" style="color: red">AskTV</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Мои вопросы</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Популярные вопросы</a>
                    </li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input
                            class="form-control search-field" type="search" name="search" id="search-field"></div>
                </form>
                @if(Auth::check())
                    <a title="Profile"
                       class="menuBar_item menuBar_item-profile d-flex flex-col flex-items-center justify-end lh-spacy"
                       href="https://ask.fm/totsamiy312">
                        <img class="userAvatar" loading="lazy"
                             src="https://casts.ask.fm/assets/noAvatar-2325eb51f8abe4e4678a25b16cb32a5399e84d9e82b5bc7efcc0b623c2aa12ec.png"/>
                        <p class="username ellipsis">{{ Auth::user()->name }}</p>

                    </a>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" href="#"
                                            style="color: red;font-size: 19px;margin-top: 5px"></a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#" href="{{ route('logout') }}"
                               onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Выход</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <span class="navbar-text"> <a href="{{ route('login') }}" class="login">Вход</a></span>
                    <a class="btn btn-light action-button" role="button" href="{{ route('register') }}">Регистарция </a>
            </div>
            @endif
        </div>

    </nav>
</div>

