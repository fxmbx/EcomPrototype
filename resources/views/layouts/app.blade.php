<?php
use App\Http\Controllers\ProductController;
$t = ProductController::cartItem();

?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'S.Spr') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js" integrity="sha512-sOO7yng64iQzv/uLE8sCEhca7yet+D6vPGDEdXCqit1elBUAJD1jYIYqz0ov9HMd/k30e4UVFAovmSG92E995A==" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark  " style="background-color:#1a0a00">
            <div class="container-fluid">
              <a class="navbar-brand" href="/products">{{config('app.name')}}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pending">My Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                  </li>
                </ul>
                            <form class="d-flex" action="/search">
                            <input class="form-control me-2 search-box" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 500px !important;">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                <ul class="navbar-nav ml-auto">
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
                        <li class="nav-item dropdown" style="width:auto;">
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
                    @if (Auth::user())
                        
                    <li class="nav-item">
                        <a class="nav-link" href="/cartlist">Chart({{$t}})</a>
                    </li>
                </ul>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/cartlist">Chart(0)</a>
                </li>
            
                @endif

              </div>
            </div>
          </nav>
        </nav>

        <main class="py-4">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>
</body>
<style>
    .slider{
       color: burlywood !important;
    }.slider_img{
        height:20rem ;
    }.image{
        max-width: 18rem;
        max-height: 18rem;
    }.bttn {color:black;
            border:;
            background-color: #c2a3ad;
    }
</style>
</html>
