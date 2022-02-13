<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="{{Route::currentRouteName()}}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    AllesBuy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    @auth
                        <ul class="nav-bar-items">
                            <li>
                                <a href="{{ route('dashboard') }}">
                                <i class="zmdi zmdi-view-dashboard"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('catalog') }}">
                                <i class="zmdi zmdi-widgets"></i> Catalog
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('settings') }}">
                                    <i class="zmdi zmdi-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('shoppingCart') }}">
                                    <i class="zmdi zmdi-settings"></i> Cart
                                </a>
                            </li>
                        </ul>
                    @endauth
                    @guest
                        <ul class="nav-bar-items">
                            <li>
                                <a href="{{ route('guestIndex') }}">
                                    <i class="zmdi zmdi-view-dashboard"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guestCatalog') }}">
                                    <i class="zmdi zmdi-widgets"></i> Catalog
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guestShoppingCart') }}">
                                    <i class="zmdi zmdi-settings"></i> Cart
                                </a>
                            </li>
                        </ul>
                     @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
