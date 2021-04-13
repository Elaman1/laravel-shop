@extends('layouts.master')

@section('title', __('main.free'))

@section('content')
<div class="standart">
    <style>
        form input {
            display: block;
            width: -webkit-fill-available;
            margin: 10px 0px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #000;
            background: transparent;
        }
        
        input[type="checkbox"] {
            width: fit-content!important;
            display: inline-block!important;
            margin-right: 5px!important;
        }
        
        .form {
            width: 60%;
            margin: 0px auto;
            padding-bottom: 50px;
        }
        
        .form input[type="submit"]:hover {
            transform: scale(1.05);
        }
        
        .form .buy {
            width: fit-content;
            background-color: #C10000;
            color: #fff;
            border: none;
            padding: 15px 65px;
            margin: 20px auto!important;
            margin-bottom: 0px;
            cursor: pointer;
            transition: transform .3s;
            display: inherit;
        }
            
        a {
            text-decoration: underline;
        }
        
        .form .left {
            width: calc(100% - 60px);
        }
        
        .form .right {
            width: 60px;
        }
        
        .red {
            color: #8B100F;
        }
    </style>
    <div class="container">
        <h1>
            Доставка
        </h1>
        <p>Внимание!</p>
<br>
<b><p>ОПЛАТА за ВСЕ ПОКУПКИ производится СТРОГО через сайт!</p></b>
<br>
<p>Все реквизиты для оплаты на карты — АННУЛИРОВАНЫ Возврат НЕ осуществляется!</p>
<br>
<p>Если у вас есть вопрос по выбору товара или группы, напишите одной из помощниц в Вотсапе:</p><br>
<ul>
    <li>Марина <a href="tel:+77051140014">+7 705 114 00 14</a></li>
    <li>Олеся <a href="tel:+79514400353">+7 951 440 03 53</a></li>
</ul>

<br>



<p>Если возник вопрос по работе сайта — обратитесь в техподдержку</p>
<br>
<p>При покупке АТРИБУТИКИ через сайт вы присылаете чек ПОМОЩНИЦЕ — с указанием выбранного товара.
</p>
<br>

<p>Расчет стоимости доставки производится следующим образом</p>
<br>
<b><p>Для товаров со скидкой:</p></b>
<br>
<p>• Казахстан — 700 руб / 4 550 тенге</p>
<p>• РФ — 1000 руб. / 6 500 тенге</p>
<p>• Другие страны Мира — уточняйте у помощниц</p>
<br><br>


<b><p>Для товаров без скидки:</p></b>
<br>
<p>• Казахстан — доставка включена в стоимость</p>
<p>• РФ — доставка включена в стоимость</p>
<p>• Другие страны Мира — уточняйте у помощниц</p>
<br>
<p>При оплате РИТУАЛОВ, чисток и диагностик, которые проводятся лично Hristafarida, вы так же присылаете чек и все данные для проведения ПОМОЩНИЦЕ.
</p><br><br>
<p>Также доступна электронная оплата</p>
<br>
<p>1.Яндекс-кошелек <a href="https://money.yandex.ru/to/410">https://money.yandex.ru/to/410...</a></p>

<p>2.Киви кошелёк <a href="tel:+77084046655">+77084046655</a></p>

<p>3. Картой на сайте</p><br>

<center><h3 class="red">Выбирайте нужный для вас вариант взноса,<br>
ставьте галочку, заполняйте поля формы<br>
и нажимайте на кнопку «ОФОРМИТЬ»!</h3></center>

<br><br>
    <div class="form">
        <form action="#">
        <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><input type="checkbox" name="n700" id="n1" value="700" ><label for="n1">Доставка Казахстан</label></p><div class="right">700₽</div></div>
        <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><input type="checkbox" name="n1000" id="n2" value="1000"><label for="n2">Доставка РФ</label></p><div class="right">1000₽</div></div>
        <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><input type="checkbox" name="n4000" id="n3" value="4000"><label for="n3">Доставка Зона 1</label></p><div class="right">4000₽</div></div>
        <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><p class="left"><input type="checkbox" name="n7000" id="n4" value="7000"><label for="n4">Доставка Зона 2</label></p><div class="right">7000₽</div></div>
        
            <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" type="email" placeholder="e-mail">
            <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" type="text" placeholder="Ф.И.О">
            <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10" type="tel" placeholder="+7 771 999 99 99">
            <input class="wow bounceInUp btn buy" data-wow-duration="1.5s" data-wow-delay="0.9s" data-wow-offset="10" type="submit" value="ОФОРМИТЬ">
        </form>
    </div>
    </div>
</div>
@endsection