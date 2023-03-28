<nav class="navbar navbar-expand-md navbar-light bg-white shadow-primary ">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" style="width: 100%; display: flex;">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a class="navbar-brand" href="{{ url('/') }}" style="padding: 10px;">
                        <img src="{{ URL::asset('img/lueji.png') }}" style="height: 50px;">
                    </a>
                    <button class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}"
                            style="margin: 10px;"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 text-center">
                <nav class="header__menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"><a href="/ashion">Início</a></li>
                        <li class="nav-item"><a href="#">Skin Care</a></li>
                        <li class="nav-item"><a href="#">Makeup</a></li>
                        <li class="nav-item"><a href="#">Cabelo</a></li>
                        <li class="nav-item"><a href="#">sobre Nós</a></li>
                        <li class="nav-item"><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <!-- Authentication Links -->
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            @endif--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        @endguest--}}
                    </div>
                    <ul class="header__right__widget">
                        <li>
                            <i class="fa fa-user"></i>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <div class="tip">2</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-heart"></i>
                                <div class="tip">0</div>
                            </a>
                        </li>
                    </ul>
                </div>
{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                 document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</nav>
