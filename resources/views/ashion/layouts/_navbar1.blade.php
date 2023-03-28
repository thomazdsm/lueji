<section class="navbar">
    <div class="navbar-expand-md navbar-light bg-white shadow-primary" style="width: 100%">
        <div class="container-fluid">
            <div class="col-lg-3">
                <a class="navbar-brand" href="{{ url('/') }}" style="padding: 20px;">
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

            <div class="col-lg-9 collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-lg-9">
                    <nav class="header__menu" style="text-align: center;">
                        <ul class="navbar-nav ms-auto" style="display: inline-block;">
                            <li class="nav-item active"><a href="/ashion">Início</a></li>
                            <li class="nav-item"><a href="#">Skin Care</a></li>
                            <li class="nav-item"><a href="#">Makeup</a></li>
                            <li class="nav-item"><a href="#">Cabelo</a></li>
                            <li class="nav-item"><a href="#">Sobre Nós</a></li>
                            <li class="nav-item"><a href="#">Contato</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3" style="text-align: right">
                    <!-- Right Side Of Navbar -->
                    <ul class="header__right__widget">
                        <li class="nav-item dropdown">
                            <a href="#" style="color: #000;">
                                <i class="fa fa-shopping-cart"></i>
                                <div class="tip">2</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="color: #000;">
                                <i class="fa fa-heart"></i>
                                <div class="tip">0</div>
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-cog"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Route::has('login'))
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-cog"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <span class="dropdown-item" style="font-weight: bold;">{{ Auth::user()->name }}</span>

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
                </div>
            </div>
        </div>
    </div>
</section>
