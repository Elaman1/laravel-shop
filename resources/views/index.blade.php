@extends('layouts.master')

@section('title', __('main.title'))

@section('content')

<div class="content">
    <div class="banner banner-main">
        <div class="container">
            <img src="{{asset('img/main circle.png')}}" class="main-circle" alt="">
            <div class="social-lent ver1">
                <span><p class="upper">группа карта чуда</p></span>
                <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                <a href="#"><img style="width: 30px; height: 30px; padding: 1px;" src="{{asset('img/whatsapp.png')}}" alt=""></a>
            </div>
            <div class="content">
                <div class="left-content">
                    <h4 class="slideInLeft wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">Группа</h4>
                </div>
                <div class="center-content">
                    <h2>Карта чуда</h2>
                </div>
                <div class="right-content">
                    <h4 class="slideInRight wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">ХФ 2021</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="stih">
        <div class="container">
            <h3 class="wow slideInLeft" data-wow-duration=".5s" data-wow-delay="0s" data-wow-offset="0">Карта чуда чф 2021</h3>
            <h3 class="cursive wow slideInUp"  data-wow-duration=".5s" data-wow-delay="0s" data-wow-offset="0">
            Творим Волшебство своими руками!
        </h3>
        <div class="stih-content">
            <div class="left-content">
                <p class="wow slideInLeft" data-wow-duration=".5s" data-wow-delay="0s" data-wow-offset="0">
                    Пора взрослеть, хватить сочинять сказки!<br>
                    Надо работать, а не ждать чудес!<br>
                    Спустись с небес на землю!
                </p>
                <br>
                <p class="wow slideInLeft" data-wow-duration=".5s" data-wow-delay=".5s" data-wow-offset="0">
                    Слышали в свой адрес подобные фразы?<br>
                    Поздравляем!
                </p>
                <p class="wow slideInLeft" data-wow-duration=".5s" data-wow-delay="1s" data-wow-offset="0">
                    Значить, вы все еще умеете мечтать!
                </p>
            </div>
            <div class="right-content">
                <img class="wow slideInRight" data-wow-duration=".5s" data-wow-delay="0s" data-wow-offset="0" src="{{asset('img/mpdel1.jpg')}}" alt="">
            </div>
        </div>
        <img src="{{asset('img/main circle.png')}}" class="stih-image" alt="">
        
    </div>
    
    <div class="stih2-content">
        <div class="container">
            <div class="left-content">
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                    А ведь это главное - чтобы загадывать желания,<br>
                    Верить в их исполнение и двигаться<br>
                    К своим целям. Все, кто не верит - пусть<br>
                    остаются там, где находится.<br>
                    А мы с вами пойдем ДАЛЬШЕ и возьмем то, чего хотим!
                </p>
                <div>
                    <div class="social-lent ver2">
                        <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('img/whatsapp.png')}}" alt=""></a>
                    </div>
                    <p class="center wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="120">Если вы уже были в группе Hristafarida "Карта Чуда ХФ" в предыдущие годы, вы итак все знаете - просо жмите кнопку</p>
                    <a href="#" class="btn send wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s" data-wow-offset="120">Присоединиться</a>
                </div>
            </div>
        </div>
    </div>
    <div class="starting-february">
        <div class="container">
            <div class="d-fl">
                <div>
                    <img class="logo-red" src="{{asset('img/logo_red.png')}}" alt="">
                </div>
                <div>
                    <p>
                        Впрочем, в этот раз программа будет совершенно новой, так что ознакомьтесь, вам точно понравится.
                        А если вы пришли в группу впервые, то читайте внимательно! Это мощно!
                    </p>
                    <h3 class="red-gradient">Вот что мы запустим 5 ферваля 2021:</h3>
                </div>
            </div>
            <div class="d-fl wow fadeInRight">
                <div class="wow fadeInRight" data-wow-duration=".5s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/magic.png')}}" alt="">
                    <p>
                        <span class="red">СОСТАВЛЕНИЕ КАРТЫ ЧУДА: 12 ЖЕЛАНИЙ 1 ЧУДО</span> - это ТА САМАЯ волшебная карта, которую мы создаем каждый год. И каждый год наши желания исполняются самым лучшим образом! Как? Не думайте об этом! Просто сделайте её так, как будет сказано в инструкции в закрытом канале.<br> 
                        И вскоре вы убедитесь, что возможно аблолютно все!
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/fear.png')}}" alt="">
                    <p>
                        <span class="red">ГИПНОЗ ПО УБИРАНИЮ СОМНЕНИЙ И СТРАХОВ</span> вы все еще живете в чужих границах и боли собственного опыта? Мама запрещала, папа наказывал, а бабушка говорила, что "хорошие дети так себя не ведут"? Освобождаемся раскрепощаемся и начинаем верить в свои возможности!
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/icon.png')}}" alt="">
                    <p>
                        <span class="red">НЛП-ТЕХНИКА "Я ДОСТОЙНА/ДОСТОИН" </span> - кто сказал, что вам можно иметь то, что у вас есть? Берите от жизни больше! Берите от жизни ВСЕ! Разрешите себе это! И вам станут доступны все блага Мира!
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration=".5s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/abundance.png')}}" alt="">
                    <p>
                        <span class="red">ЭГРЕГОВ ИЗОБИЛИЯ И ВОЗМОЖНОСТЕЙ </span> -когда мы все объединяемся с целью реализовать свои намерения, наше поле просто искрит силой мощью! Вселенная дружелюбна и изобильно, и она помагает нам в каждом шаге!
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/icon2.png')}}" alt="">
                    <p>
                        <span class="red">ПРИЗЫВ К РОДУ </span>, чтобы помогали и направляли - магические слова, которые позволяет воссоединиться с самыми сильными и мудрыми предками. Они способны силами Рода укрепить вашу опору. 
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/icon3.png')}}" alt="">
                    <p>
                        <span class="red">АКТИВАЦИЯ ПОМОЩНИК </span> - это ТА САМАЯ волшебная карта, которую мы создаем каждый год. И каждый год наши желания исполняются самым лучшим образом! Как? не думайте об этом! Просто сделайте ее так, как будет сказано в инструкции в закрытом канале<br> И вскоре вы убедитесь, что возможно абсолютно все!
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration=".5s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/icon4.png')}}" alt="">
                    <p>
                        <span class="red">ДЕНЕЖНАЯ СОЛЬ </span> - финансы, всегда пригодятся. И для исполнения желаний, и для личного благополучия. И для того, чтобы просто покупать себе все, что хочется!
                    </p>
                </div>
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s" data-wow-offset="10">
                    <img src="{{asset('img/icon5.png')}}" alt="">
                    <p>
                        <span class="red">ВОЛШЕБНЫЙ ХУАН</span> - для поддеркжки Рода, помощи духов и помощи пространства! Такой ТОТЕМ у вас ВПЕРВЫЕ! И он просто душка! Просите у него все, о чем мечтаете! Он поможет - он НАСТОЯЩИЙ МУЖЧИНА
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="position">
        <div class="lottery">
            <div class="container">
                <h4 class="gold wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                    LUXURY АКТИВАЦИЯ КАРТА ЧУДА ЧЕРЕЗ РИТУАЛА, КОТОРЫЙ ПРОВЕДЕТ САМА HRISTAFARIDA - ПО ФОТО ВАШИХ КАРТ.
                </h4>
                <h3 class="red wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">
                    ТАКОЕ БУДЕТ ВПЕРВЫЕ!
                </h3>
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.7s" data-wow-offset="10">Каждый участник LUXURY-тарифа сможет прислать снимок своей готовой карты ЧУДА - и она будет активирована по фото, а затем сожжена в ритуальной костернице.</p>
                <h3 class="red wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10">
                    АКТИВАЦИЯ 8 ФЕВРАЛЯ 2021 Г. ОДИН РАЗ!!!
                </h3>
                <p class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="1.2s" data-wow-offset="10">
                    К этой дате Карты Чуда создан отдельный канал в телеграм для лакшери, фото отправляется туда
                </p>
            </div>
        </div>
        <div class="lottery-center">
            <div class="container">
                <div class="right-block">
                    <h3 class="gold wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">
                        БУДЕТ РОЗЫГРЫШ НАСТОЯЩЕГО ТРОНА ХФ!
                    </h3>
                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="10.2s" data-wow-offset="10">Каждый участник получит возможность стать его обладателям!</p>
                    <strong><p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s" data-wow-offset="10">Хотите восседать в нем?</p></strong>
                    <div class="w50">
                        <h4 class="red wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.7s" data-wow-offset="10">
                            ГРУППА "КАРТА ЧУДА ХФ21"
                        </h4>
                        <p class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s" data-wow-offset="10">Проводится в закрытом телеграм-канале с 5 февраля 2021г. В течение 4 дней мы будем творить настоящего ВОЛШЕБСТВО! А потом еще 49 дней у каждого участника будет доступ к практикам!</p>
                    </div>
                    <a href="#" class="btn-want wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s" data-wow-offset="10">ХОЧУ КАРТУ ЧУДА</a>
                    <div class="w50">
                        <p class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10">
                            Чтобы создать самую правильную Карту и исполнить все свои намерения, а также получить дополнительные инструменты для своего благополучия - оформляйте заявку на сайте. Вы всегда можете сделать своих близких счастливее - просто подарите им доступ в группу, оплатив заказ (за каждого отдельно).
                        </p>
                    </div>
                </div>
                <div class="left-block">
                    <img class="tron wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.2s" data-wow-offset="10" src="img/women_onchair.png" alt="">
                </div>
            </div>
        </div>
        <div class="lottery-bottom">
            <div class="container">
                
                <p class="wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10">СПЕЦИЛЬНО для мужей и для любых других близких - вы можете создать Карту Чуда самостоятельно! Только LUXURY АКТИВАЦИЯ - и участие мужа оплачивается ОТДЕЛЬНО!</p>
                <h3 class="red wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.7s" data-wow-offset="10">
                    ВСЕ ЕЩЕ МЕЧТАЕТЕ? ПОРА ДЕЙСТВОВАТЬ! ВЕРЬТЕ В ЧУДЕСА, <span class="redd" >С HRISTAFARIDA!</span>
                </h3>
                
                <style>
                    input[type="checkbox"] {
                        width: fit-content!important;
                        display: inline-block!important;
                        margin-right: 5px!important;
                    }
                    
                    
                </style>
                <div class="form">
                    <form action="#">
                    <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><input type="checkbox" name="n5000" id="n1" value="5433" ><label for="n1">Карта Чуда ХФ 2021</label></p><div class="right">5 433₽</div></div>
                    <div class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><input type="checkbox" name="n8000" id="n2" value="8766" ><label for="n2">  Карта Чуда ХФ 2021 (Ваши карты активируются самой Еленой)</label></p><div class="right">8 766₽</div></div>
                    
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" type="email" placeholder="e-mail">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" type="text" placeholder="Ф.И.О">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10" type="tel" placeholder="+7 771 999 99 99">
                        <input class="wow bounceInUp btn buy" data-wow-duration="1.5s" data-wow-delay="0.9s" data-wow-offset="10" type="submit" value="КУПИТЬ">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
