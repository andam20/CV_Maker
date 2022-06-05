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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="color:red;font-weight:bold" class="navbar-brand" href="{{ url('/') }}">
                <h2>CVc</h2>    
                </a>
       
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                <li style="margin-right:15%;margin-left:15%"><h4>Home</h4></li>
                <li style="margin-right:15%">
              
    

                    </ul>

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
                            <a style="color:red;background-color:skyblue;border-radius: 8px;padding:8px;font-weight:bold;align-items: center;" class="dropdown-item" 
                            href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                <!-- <div class="dropdown-menu dropdown-menu-end" style="padding:23px" aria-labelledby="navbarDropdown">
                                    <h1>profile</h1>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block;width:100%">your email :</span> {{ Auth::user()->email }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your gender :</span> {{ Auth::user()->gender }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your phone :</span> {{ Auth::user()->phone }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your uni :</span> {{ Auth::user()->uni }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your living place :</span> {{ Auth::user()->living_place }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your bio :</span> {{ Auth::user()->bio }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your profission :</span> {{ Auth::user()->profission }}</p>
                                    <p>  <span style="background-color: grey;border-radius: 5px;padding: 3px;display:block">your birtdate :</span> {{ Auth::user()->birthdate }}</p>
                                
                                    <a style="color:red;background-color:grey;align-items: center;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> -->
                                
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
