<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<div id="app" style="padding-top: 30px;">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel navbar-fixed-top">
        <div class="container">
            <a href="{{route('index')}}" class="navbar-brand">@lang('basket.return')</a> 
            <div id="navbar" class="collapse navbar-collapse">

                @auth
                <ul class="nav navbar-nav">
                    @admin
                        <li @routeactive('categories.index') class="nav-item">
                            <a class="nav-link" href="{{route('categories.index')}}">Категории</a>
                        </li>
                        <li  @routeactive('products.index') class="nav-item">
                            <a class="nav-link" href="{{route('products.index')}}">Товары</a>
                        </li>
                        <li @routeactive('home') class="nav-item">
                            <a  class="nav-link" href="{{route('home')}}">Заказы</a>
                        </li>
                    @endadmin
                </ul> 

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        @admin
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('main.admin')<span class="caret"></span></a>
                        @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('main.my_room')<span class="caret"></span></a>
                         @endadmin
                        <ul class="dropdown-menu">
                            <li><a href="{{route('logout')}}">@lang('main.logout')</a></li>
                        </ul>
                    </li>
                </ul>
                @endauth

                @guest
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">@lang('main.login')</a>
                    </li> 
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">@lang('main.registrize')</a>
                    </li>
                </ul>
                @endguest
                


            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
