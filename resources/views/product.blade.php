@extends('layouts.app')

@section('title-block')Продукт @endsection

@section('content')
<div class="row">
    <div class="starter-template">
        <h1>{{ $products }}</h1>
        <h2></h2>
        <p>Цена: <b>71990 ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>

    </div>

</div>
@endsection