@extends('layouts.master')

@section('title', __('main.amulet'))

@section('content')
<div class="standart">
<div class="container">
    <h1>
        @lang('main.amulet')
    </h1>
    <p>Персональные обереги, обладающие невероятной силой. Защищают своего владельца, не дают просочиться негативу и дают сдачу обидчикам.</p>
<div class="d-fl product-block">
@foreach($amulets as $amulet )
<div class="card-block">
    <div class="thumbnail">
        <img src="{{Storage::url($amulet->image)}}" alt="{{ $amulet->name }}">
        <div class="caption">
            <h3>{{ $amulet->__('name') }}</h3>
            <p>{{ $amulet->getPriceAttributes($amulet->price) }} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</p>
            <p>
                <form action="{{ route('basket-add-main', $amulet) }}" method="POST">
                    <button type="submit" class="btn card-btn" role="button">@lang('main.add_to_basket')</button>
                    <a href="{{ route('product', [isset($category) ? $category->code : $amulet->category->code, $amulet->code]) }}" class="btn btn-default"
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