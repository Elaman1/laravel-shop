@extends('layouts.master')

@section('title') @lang('main.category') {{$category->__('name')}}@endsection

@section('content')
    <h1>
        {{$category->__('name')}} {{$category->products->count()}}
    </h1>
    <p>
        {{ $category->__('description') }}
    </p>
    <img src="{{Storage::url($category->image)}}" alt="">
    <div class="row">
        @foreach($category->products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
@endsection
