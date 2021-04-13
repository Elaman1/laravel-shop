@extends('layouts.master')

@section('title', __('main.store'))

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')

<div class="content-shop-m">
        
        <div class="banner-shop banner">
            <div class="container">
                <img src="{{asset('img/main circle.png')}}" class="main-circle" alt="">
                <div class="social-lent ver1">
                    <span><p class="upper">группа карта чуда</p></span>
                    <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                    <a href="#"><img style="width: 30px; height: 30px; padding: 1px;" src="{{asset('img/whatsapp.png')}}" alt=""></a>
                </div>
                <div class="content-shop">
                    <h3 class="slideInLeft wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">ЗАПУСТИТЕ В СВОЮ ЖИЗНЬ</h3>
                    <h1 class="slideInLeft wow" data-wow-duration="1.2s" data-wow-delay="0.5s" data-wow-offset="10">ВОЛШЕБСТВО</h1>
                    <p class="slideInLeft wow" data-wow-duration="1.2s" data-wow-delay="1s" data-wow-offset="10">Свечи для чистки, ставы для денег, амулеты, заряженные кошельки, нити на запястье и энергии</p>
                    <p class="slideInLeft wow" data-wow-duration="1.2s" data-wow-delay="1.5s" data-wow-offset="10">Всё это может стать волшебной опорой для новой счастливой жизни.</p>
                </div>
            </div>
        </div>
        <div class="video">
            <div class="container">
                <p class="slideInUp wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">Друзья ! Делюсь с Вами видео, в котором представлено,как можно самостоятельно рассчитать идеальную
                    матрицу для себя! <br>
                    На основании полученного результата Вы можете подобрать для себя атрибутику из любого раздела магазина. 
                    Проделайте данную диагностику и найдите амулет, подходящий именно Вам!</p>
                    <div class="video-video slideInDown wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8UYF7DFroSg" frameborder="0" allowfullscreen>
</iframe>
                        </div>
            </div>
        </div>
        
            
        <div class="amulet">
            <div class="container">
                <div class="top-content d-fl">
                    <img class="logo-red" src="{{asset('img/logo_red.png')}}" alt="">
                    <h2>НОВЫЕ АМУЛЕТЫ</h2>
                </div>
                <div class="content">
                    <p class="wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                        Эта атрибутика активируется лично Hristafarida через шаманский бубен,
                        специальный алтарь с кровью тотемных животных, при зажженных свечах ХФ
                        с окроплением заряженной водой! <br>
                        В этом таинстве ритуала открывается канал всех 4 стихий, каждая из которых 
                        дает свою силу амулету. Для вашего здоровья, для силы, для денег, для любви, 
                        для счастья, для удачи и личностного роста!
                        <br>
                        <br>
                        В процессе активации происходит контакт с духами, 
                        которые наполняют всю атрибутику энергиями. <br>
                        Владелец будет находиться под особенной защитой в течение срока действия амулета.
                    </p>
                    <div>
                        <div class="social-lent ver4">
                            <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img/whatsapp.png')}}" alt=""></a>
                        </div>
                        <a href="{{route('amulet')}}" class="btn send wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s" data-wow-offset="120">Посмотреть</a>
                    </div>
                </div>
                
            </div>
            <img src="{{asset('img/main circle.png')}}" class="amul-image" alt="">
        </div>
        <div class="categories">
            <div class="container">
                <div class="row">
                    <div class="categor col-sm-6 col-md-4 col-lg-3">
                        <a href="{{route('new_products')}}">
                            <img src="{{asset('img/new-cat.png') }}">
                            <div class="solo">
                                <h4>@lang('main.neww')</h4>
                                
                            </div>
                            
                        </a>
                        
                    </div>
                    @foreach($categories as $category)
                        <div class="categor col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('category', $category->code) }}">
                                <img src="{{ Storage::url($category->image) }}">
                                <div class="solo">
                                    <h4>{{ $category->__('name')}}</h4>
                                    
                                </div>
                                
                            </a>
                            
                        </div>
                    @endforeach
                </div>

                
            </div>
        </div>
</div>


    
    

@endsection