<!-- HOME PAGE SSESSION CHECK -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HOME PAGE SSESSION CHECK -->

<!-- AUTH CHECK -->
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
<!-- AUTH CHECK -->

<!-- Departments -->
<div class="nav-panel__departments">
    <!-- .departments -->
    <div class="departments departments--open departments--fixed"
        data-departments-fixed-by=".block-slideshow">
        <div class="departments__body">
            <div class="departments__links-wrapper">
                <div class="departments__submenus-container"></div>
                <ul class="departments__links">
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Power Tools
                            <svg class="departments__item-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                </use>
                            </svg>
                        </a>
                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">
                            <!-- .megamenu -->
                            <div class="megamenu megamenu--departments">
                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                    <div class="row">
                                        <div class="col-3">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Power Tools</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Engravers</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Drills</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Wrenches</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu__item">
                                                    <a href="#">Workbenches</a>
                                                </li>
                                                <li class="megamenu__item">
                                                    <a href="#">Presses</a>
                                                </li>
                                                <li class="megamenu__item">
                                                    <a href="#">Spray Guns</a>
                                                </li>
                                                <li class="megamenu__item">
                                                    <a href="#">Riveters</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Hand Tools</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Screwdrivers</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Handsaws</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Knives</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Garden Equipment</a>
                                                    <ul
                                                        class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Motor Pumps</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Chainsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul
                                                class="megamenu__links megamenu__links--level--0">
                                                <li
                                                    class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Machine Tools</a>
                                                    <ul
                                                        class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Thread Cutting</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Chip Blowers</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-3">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Instruments</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Welding Equipment</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Power Tools</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .megamenu / end -->
                        </div>
                    </li>
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Hand Tools
                            <svg class="departments__item-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                </use>
                            </svg>
                        </a>
                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">
                            <!-- .megamenu -->
                            <div class="megamenu megamenu--departments">
                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-2.jpg');">
                                    <div class="row">
                                        <div class="col-4">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Hand Tools</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Screwdrivers</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Handsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Garden Equipment</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Motor Pumps</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Chainsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Machine Tools</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Thread Cutting</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Chip Blowers</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Instruments</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Welding Equipment</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Power Tools</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .megamenu / end -->
                        </div>
                    </li>
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Machine Tools
                            <svg class="departments__item-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                    </use>
                            </svg>
                        </a>
                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--nl">
                            <!-- .megamenu -->
                            <div class="megamenu megamenu--departments">
                                <div class="megamenu__body" style="background-image: url('images/megamenu/megamenu-3.jpg');">
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Hand Tools</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Screwdrivers</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Handsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Garden Equipment</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Motor Pumps</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Chainsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul
                                                class="megamenu__links megamenu__links--level--0">
                                                <li
                                                    class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Instruments</a>
                                                    <ul
                                                        class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Welding Equipment</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Power Tools</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .megamenu / end -->
                        </div>
                    </li>
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Building Supplies
                            <svg class="departments__item-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                    </use>
                            </svg>
                        </a>
                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">
                            <!-- .megamenu -->
                            <div class="megamenu megamenu--departments">
                                <div class="megamenu__body">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Hand Tools</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Screwdrivers</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Handsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">Garden Equipment</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                        <li class="megamenu__item">
                                                            <a href="#">Motor Pumps</a>
                                                        </li>
                                                        <li class="megamenu__item">
                                                            <a href="#">Chainsaws</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .megamenu / end -->
                        </div>
                    </li>
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Electrical
                            <svg class="departments__item-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                </use>
                            </svg>
                        </a>
                        <div class="departments__submenu departments__submenu--type--menu">
                            <!-- .menu -->
                            <div class="menu menu--layout--classic">
                                <div class="menu__submenus-container"></div>
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                        <div class="menu__item-submenu-offset"></div>
                                        <a class="menu__item-link" href="#">Soldering Equipment
                                            <svg class="menu__item-arrow" width="6px" height="9px">
                                                <use
                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                </use>
                                            </svg>
                                        </a>
                                        <div class="menu__submenu">
                                            <!-- .menu -->
                                            <div class="menu menu--layout--classic">
                                                <div class="menu__submenus-container"></div>
                                                <ul class="menu__list">
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">Soldering Station</a>
                                                    </li>
                                                    <li class="menu__item">
                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                        <div class="menu__item-submenu-offset"></div>
                                                        <a class="menu__item-link" href="#">Soldering Dryers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="menu__item">
                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                        <div class="menu__item-submenu-offset"></div>
                                        <a class="menu__item-link" href="#">Light Bulbs</a>
                                    </li>
                                    <li class="menu__item">
                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                        <div class="menu__item-submenu-offset"></div>
                                        <a class="menu__item-link" href="#">Batteries</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .menu / end -->
                        </div>
                    </li>
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Power Machinery</a>
                    </li>
                    <li class="departments__item">
                        <a class="departments__item-link" href="#">Measurement</a>
                    </li>
                </ul>
            </div>
        </div>
        <button class="departments__button">
            <svg class="departments__button-icon" width="18px" height="14px">
                <use xlink:href="images/sprite.svg#menu-18x14"></use>
            </svg> 
            Shop By Category 
            <svg class="departments__button-arrow" width="9px" height="6px">
                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
            </svg>
        </button>
    </div>
    <!-- .departments / end -->
</div>
<!-- departments -->

<!-- ORIGINAL LAYOUTS -->
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<!-- ORIGINAL LAYOUTS -->