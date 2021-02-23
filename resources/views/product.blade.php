@extends('layouts.master')

@section('title') Продукт@endsection

@section('content')
    <h1>{{ $product->__('name') }}</h1>
    <p>{{ $product->category->__('name') }}</p>
    <p>@lang('basket.price'): <b>{{ $product->price }} руб.</b></p>
    <img src="{{Storage::url($product->image)}}">
    <p>{{ $product->__('description') }}</p>
    <form action="{{ route('basket-add', $product) }}" method="post">
    @csrf
    <button type="submit" role="button" class="btn btn-success">@lang('main.add_to_basket')</button>
    </form>
@endsection
