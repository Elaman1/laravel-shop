<!doctype html>
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
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li  @routeactive('index') >
                <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
                </li>
            </ul>
            
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.all_categories')</a>
                </li>
                <li @routeactive('basket') ><a href="{{ route('basket') }}">@lang('basket.cart')</a></li>
                <li><a href="{{route('locale', __('main.set_lang'))}}">@lang('main.set_lang') </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}<span class="caret"></span></a>
                    
                    <ul class="dropdown-menu">
                    @foreach (App\Models\Currency::get() as $currency)
                        <li><a href="{{route('currency', $currency->code)}}">{{$currency->symbol}}</a></li>
                    @endforeach
                        
                    </ul>
                </li>
            </ul>

            

            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{route('login')}}">@lang('main.login')</a></li>
                @endguest

                @admin
                    <li><a href="{{route('get-logout')}}">@lang('main.logout')</a></li>
                    <li><a href="{{route('home')}}">@lang('main.admin_panel')</a></li>
                @else

                    @auth
                        <li><a href="{{route('get-logout')}}">@lang('main.logout')</a></li>
                        <li><a href="{{route('person.orders.index')}}">@lang('main.my_orders')</a></li>
                    @endauth

                @endadmin

                
     
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>


</body>
</html>
