@extends('layouts.master')

@section('title', __('main.amulet'))

@section('style')
    <link rel="stylesheet" href="css/altar.css">
@endsection

@section('content')

<div class="content">
        
        <div class="banner banner-altar">
            <div class="container">
                <img src="{{asset('img/main circle.png')}}" class="main-circle" alt="">
                <div class="social-lent ver1">
                    <span><p class="upper">Алтарь помощь рода</p></span>
                    <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                    <a href="#"><img style="width: 30px; height: 30px; padding: 1px;" src="{{asset('img/whatsapp.png')}}" alt=""></a>
                </div>
                <div class="content">
                    <div class="left-content">
                        <h4 class="slideInLeft wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">АЛТАРЬ</h4>
                    </div>
                    <div class="center-content">
                        <h2 class="slideInRight wow" data-wow-duration="1.2s" data-wow-delay="0.5s" data-wow-offset="10">ПОМОЩЬ РОДА</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="resource">
            <div class="container">
                <h2 class="slideInUp wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">АЛТАРЬ ПОМОЩЬ РОДА</h2>
                <h4 class="red slideInUp wow" data-wow-duration="1.2s" data-wow-delay="0.3s" data-wow-offset="10">РЕСУРСЫ, КОТОРЫЕ ВАШИ ПО ПРАВУ РОЖДЕНИЯ.</h4>
                <br>
                <p class="slideInUp wow" data-wow-duration="1.2s" data-wow-delay="0.6s" data-wow-offset="10">Даже если мама говорит, что вы живете неправильно.<br>
                    Даже если папа ушел из семьи и перестал быть папой. <br>
                    Даже если вы вообще не видели никогда своих родителей.. 
                </p>
                <br>
                <p class="red slideInUp wow" data-wow-duration="1.2s" data-wow-delay="0.9s" data-wow-offset="10">А может быть, вы всех знаете. И может быть вас все искренне любят. <br>
                    И вы даже, чувствуете это каждый клеточкой своего тело и сердца!
                </p>
                <br>
                <p class="slideInUp wow" data-wow-duration="1.2s" data-wow-delay="1.2s" data-wow-offset="10">Помощь Рода - эо сильнейший Алтарь Hristafarida, <br>
                    который подключить вас к семейному древу жизни, наполнит силами <br>
                    и подскажет ответы на все вопросы.
                </p>

            </div>
            
        </div>
        
            
        <div class="activate">
            <img src="{{asset('img/main circle.png')}}" class="main-circle" alt="">
            <div class="container">
                <p style="font-size: 18px;" class="gold center wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">ГДЕ ТО СРЕДИ ВАШИХ ПРЕДКОВ УЖЕ БЫЛИ ТЕ, НА КОГО ВЫ ПОХОЖИ. <br>
                ТЕ, КТО ПЕРЕДАЛ ВАМ ТАЛАНТЫ И ЧЕРТЫ ХАРАКТЕРА. <br>
                ТЕ, КТО СТОИТ ЗА ВАС ГОРОЙ, ЕСЛИ ВЫ ПОПРОСИТЕ О ПОМОЩИ.
                </p>
                <div class="center wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
                    <img height="80px" src="img/logo_red.png" alt="">
                
                </div>
                <p style="font-size: 16px; padding-bottom: 15px;"  class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">Активируйте это Алтарь для себя и членов своей семьи, чтобы:</p>
                <ul style="padding-left: 15px;">
                    <li  class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">наладить отношение в родовом эгрегоре</li>
                    <li class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10">привлечь общее благополучие</li>
                    <li class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10">очистить поле от негатива</li>
                    <li class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.9s" data-wow-offset="10">наполниться энергиями и знаниями</li>
                    <li class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="1.2s" data-wow-offset="10">использовать мудрость предков для движения вперед и достижения целей</li>
                </ul>

                <br>
                <br>
                <p class="center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">Каждый участник оплачивается отдельно. Алтарь "Помощь Рода" <br>
                    можно делать с рождения и в любом возрасте. <br>
                    Его активация действует 147 дней, после чего уточняйте возможность повторной покупки на сайте.
                </p>
                <br>
                <br>
                <p class="center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">Семья - наша опора и поддержка во всем. <br>
                    Это любовь и сила духа. <br>
                        Это защита от нападок извне и барьер для любого зла.
                    </p>
            </div>
        </div>

        <div class="format">
            <div class="container">
                <p class="red center wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">ПОПРОСИТЕ ПОМОЩИ У ТЕХ, КТО ЖИЛ ДО ВАС, <br>
                    КТО ЗНАЕТ ВАШЕ ПРОШЛОЕ, НАСТОЯЩЕЕ И БУДУЩЕЕ, <br>
                    С АЛТАРЕМ HRISTAFARIDA ВАША СВЯЗЬ ВОССТАНОВИТЬСЯ И ОКРЕПНЕТ!
                </p>
                <div class="form">
                    <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><span class="circle"></span>  Алтарь Помощь Рода</p><div class="right"> 999₽</div></div>
                    <div class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><span class="circle"></span>  Алтарь Помощь Рода</p><div class="right">1 766₽</div></div>
                    <div class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><span class="circle"></span>  Алтарь Помощь Рода</p><div class="right">1 996₽</div></div>
                    <form action="send.php">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" type="email" placeholder="e-mail">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" type="text" placeholder="Ф.И.О">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10" type="tel" placeholder="+7 771 999 99 99">
                        <input class="wow bounceInUp btn buy" data-wow-duration="1.5s" data-wow-delay="0.9s" data-wow-offset="10" type="submit" value="КУПИТЬ">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection