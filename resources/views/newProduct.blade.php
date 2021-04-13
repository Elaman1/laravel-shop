@extends('layouts.master')

@section('title', __('main.neww'))

@section('content')
<div class="standart">
<div class="container">
    <h1>
        @lang('main.neww')
    </h1>
    <p>Новинки 2. Текстиль, свечи для чистки, ставы для денег, амулеты, заряженные кошельки, нити на запястье на здоровье и энергии. Всё это может стать волшебной опорой для новой счастливой жизни.</p>
<br><br>
<div class="d-fl product-block">
@foreach($newProducts as $product )
    
    
        <div class="card-block">
            <div class="thumbnail">
                <img src="{{Storage::url($product->image)}}" alt="{{$product->name}}">
                <div class="caption">
                    <h3>{{ $product->__('name') }}</h3>
                    <p>{{ $product->getPriceAttributes($product->price) }} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</p>
                    
                    <p>
                        <form action="{{ route('basket-add-main', $product) }}" method="POST">
                            <button type="submit" class="btn card-btn" role="button">@lang('main.add_to_basket')</button>
                            <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                            role="button">@lang('main.more')</a>
                            @csrf
                        </form>
                    </p>
                </div>
            </div>
        </div>

    

@endforeach
</div>
</div>
</div>
@endsection