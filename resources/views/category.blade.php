@extends('layouts.app')

@section('title-block')Интернет Магазин @endsection

@section('content')

<div class="row">
    <div class="starter-template">
        <h1>
            {{$category->name}} ({{$category->products->count()}})
        </h1>
    <p>
        {{$category->description}}
    </p>
    <div class="row">
        @foreach($category->products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="{{ $product->name }}">
                <div class="caption">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->price }} ₽</p>
                    <form action="/" method="POST">
                        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                        <a href="{{ route('product', [$product->category->code, $product->code ]) }}" class="btn btn-default" role="button">Подробнее</a>
                        
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>

@endsection