<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('name', 'FoodHelper') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <livewire:styles />
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-toggleable bg-orange shadow-sm">
            <div class="container">
                <a class="navbar-brand mr-5" href="{{ url('/') }}">
                    <img src="/images/logo.png" alt="{{ config('name', 'FoodHelper') }} logo" height="auto" class="img-responsive" width="120px">
                </a>
                <button class="navbar-toggler" id="nav-toggle-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navebarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-2 ml-auto mb-3 mt-2 mt-sm-0 mb-sm-0">
                        <livewire:places-search />
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if(Route::has('restaurants'))
                        <li class="nav-item">
                            <a class="btn btn-light mr-sm-4 mt-2 mt-sm-0" href="{{ route('restaurants') }}">{{ __('Забронировать') }}</a>
                        </li>
                        @endif
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-primary mr-sm-1 mt-2 mt-sm-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-primary mr-sm-1 mt-2 mt-sm-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle btn btn-primary mt-2 mt-sm-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                                    @if (Auth::user()->hasRole('admin'))
                                        <a class="dropdown-item" href="{{ route('homeAdmin') }}">
                                            {{ __('Админ Панель') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log Out') }}
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
    <!-- Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <livewire:scripts />
</body>
</html>
