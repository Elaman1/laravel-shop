<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>
    <link rel="icon" href="{{asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/starter-template.css')}}" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="{{asset('js/shop.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>

    @yield('style')

</head>
<body>

    <header>
        <div class="d-fl container">
            <nav class="menu-top menu2">
                <ul class="d-fl topmenu">
                    <li class="desc"><a class="down submenu-link" href="{{route('store')}}">@lang('main.store') </a>
                        <ul class="submenu" style="width: 200px;">
                          <li><a href="{{route('new_products')}}">@lang('main.neww')</a></li>
                          
                          @foreach(App\Models\Category::get() as $categor) 
                          
                              <li><a href='{{route("category", $categor->code)}}'>{{$categor->__('name') }}</a></li>
                          @endforeach
                        </ul>
                    </li>
                    <li class="mob"><a class="down submenu-link" href="#">@lang('main.store') </a>
                        <ul class="submenu" style="width: 200px;">
                          <li><a href="{{route('store')}}">@lang('main.store')</a></li>
                          <li><a href="{{route('new_products')}}">@lang('main.neww')</a></li>
                          @foreach(App\Models\Category::get() as $categor) 
                          
                              <li><a href='{{route("category", $categor->code)}}'>{{$categor->__('name') }}</a></li>
                          @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('free_tech')}}">@lang('main.free')</a></li>
                    <li><a href="{{route('new_products')}}">@lang('main.neww')</a></li>
                    <li><a href="{{route('amulet')}}">@lang('main.amulet')</a></li>
                    <li><a href="{{ route('transportation') }}">Доставка</a></li>
                    <li><a href="{{ route('reviews')}}">Отзывы</a></li>

                    
                    
                    @auth 
                        @admin
                            <li><a href="{{route('home')}}">@lang('main.my_orders')</a></li>
                        @else
                            <li><a href="{{route('person.orders.index')}}">@lang('main.my_orders')</a></li>
                        @endadmin
                    @else
                    <li><a href="{{route('login')}}">@lang('main.my_orders')</a></li>
                    @endauth
                    <li><a href="{{route('contact')}}">@lang('main.contact')</a></li>
                </ul>
                
                <a href="{{route('locale', __('main.set_lang'))}}" class="lang mob">
                    @lang('main.set_lang')
                </a>
                
                <div class="topmenu mob">
                    <!-- {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}} -->
                    <li class="curren">
                        <a href="#" class="down submenu-link" style="font-size: 16px;">$</a>
                        <ul class="submenu">
                            @foreach (App\Models\Currency::get() as $currency)
                            <li>
                                <a @if( session('currency', 'KZT')  == $currency->code  )
                                    class="active"
                                    @endif
                                href="{{route('currency', $currency->code)}}">{{$currency->symbol}}</a>
                               </li>
                            @endforeach
                        </ul>
                    </li>
                </div>
    
               
            </nav>

            <a class="lang desc" style="font-size: 14px;" href="{{route('locale', __('main.set_lang'))}}">@lang('main.set_lang') </a>
                
            <div class="topmenu desc">
                <!-- {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}} -->
                <li class="curren">
                    <a href="#" class="down submenu-link" style="font-size: 16px;">$</a>
                    <ul class="submenu">
                        @foreach (App\Models\Currency::get() as $currency)
                        <li>
                            <a @if( session('currency', 'KZT')  == $currency->code  )
                                class="active"
                                @endif
                            href="{{route('currency', $currency->code)}}">{{$currency->symbol}}</a>
                           </li>
                        @endforeach
                    </ul>
                </li>
            </div>

            <a href="{{ route('basket') }}"><img class="basket" src="{{asset('img/basket.png')}}" alt="basket"></a>

            <button class="hamburger2">Главное меню &#9776;</button>
            <button class="cross2">&#735;</button>
        </div>
        <div class="d-fl container">
            <a class="logo" href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt="Miracle logo"></a>
            <nav class="menu">
                <ul class="d-fl" style="justify-content: space-around; align-items: center;">
                    <?php $i = 0 ?>
                    @foreach( App\Models\ProductFull::query()->orderBy('id', 'desc')->where('menu', 1)->get() as $prod)
                        <?php
                            
                            $i++;
                        	if($i > 9) {
                        		break;
                        	}
                          ?>
                        <li><a href="{{route('product_fulls', [$prod->category->code, $prod->code])}}">{{$prod->name}}</a> </li>
                    @endforeach
                </ul>
            </nav>
            <!--  -->
            <button class="hamburger">Категории &#9776;</button>
            <button class="cross">&#735;</button>
        </div>
    </header>
    
    <div class="container">
        <div class="starter-template">
            @if(session()->has('success'))
                <p style="padding: 20px 0px" class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('warning'))
                <p style="padding: 20px 0px" class="alert alert-warning">{{ session()->get('warning') }}</p>
            @endif
        </div>
    </div>
    
    @yield('content')
    
    
    <div class="helper">
        
        <img src="{{asset('img/main circle.png')}}" alt="" class="helper-image">
        <div class="container">
            <div class="social-lent ver3">
            
                <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/whatsapp.png')}}" alt=""></a>
                    <p>Группа Карта Чуда</p>
            </div>
            <h3 class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                НАПИСАТЬ ПОМОЩНИЦАМ
            </h3>
            <p  class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10">Нажмите для связи через WhatApp на одну из ссылок ниже</p>
            <br>
            <strong>
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10"><a href="#">Офис HF Управляющая</a></p>
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10"><a href="#">СВЯЗАТЬСЯ С ОЛЕСЕЙ</a></p>
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10"><a href="#">ТЕХНИЧЕСКАЯ ПОДДЕРЖКА С 9:00 ДО 20:00 ПО МСК</a></p>
            </strong>
            <div class="karma">
                <h4 class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s" data-wow-offset="10">
                    ПОЛУЧИТЕ ЗНАНИЯ И ХОРОШУЮ КАРМУ ОТ HRISTAFARIDA
                </h4>
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.8s" data-wow-offset="10">Подписывайтесь на блог Елены и не пропускайте анонсы важных событий!<br> Следите за постами в Инстаграмме и оставляйте свои вопросы в сториз, Елена отвечает лично.</p>
            </div>
            <div class="fast-links">
                <h4 class="gold wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                    БЫСТРЫЕ ССЫЛКИ
                </h4>
                <nav  class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
                    <ul>
                        <li><a class="upper" href="#">НОВОСТИ</a></li>
                        <li><a class="upper" href="{{ route('reviews')}}">ОТЗЫВЫ</a></li>
                        <li><a class="upper" href="{{route('store')}}">@lang('main.store')</a></li>
                        <li><a class="upper" href="{{route('contact')}}">@lang('main.contact')</a></li>
                        <li><a class="upper" href="{{route('new_products')}}">@lang('main.neww')</a></li>
                        <li><a class="upper" href="{{route('free_tech')}}">@lang('main.free')</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="confedence">
        <div class="container">
            <div class="d-fl">
                <div class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                    <p>ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ И ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ ПОЛЬЗОВАТЕЛЬКОЕ СОГЛАШЕНИЕ ДОГОВОР ПУБЛИЧНОЙ ОФЕРТЫ</p>
                </div>
                <div>
                    <img src="{{asset('img/main circle.png')}}" alt="">
                </div>
                <div class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                    <p>ТОО «HRISTAFARIDA» (ХРИСТАФАРИДА) <br>
                        ИИН 820721400821<br>
                        БИН 190940019634<br>
                        Крюкова Е.А.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright © 2019-2021 Hristafarida</p>
    </footer>
    <script>
        var widt = $('.banner').css('height');
        $('.social-lent.ver1').css('width', widt);
        
        var widt2 = $('.helper').css('height');
        $('.social-lent.ver3').css('width', widt2);
    </script>
</body>
</html>