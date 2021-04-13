@extends('layouts.master')
@section('title') @lang('main.category') @if(isset($category)) {{$category->__('name')}} @else Страница не найдено @endif @endsection

@section('content')
    <div class="category-only standart">
        
        <div class="container">
            <h1>
                 @if(isset($category)) {{$category->__('name')}} @else Категория не найдено @endif 
            </h1>
            <div class="row">
                <div class="d-fl product-block">
                    <!-- Продукты с 2 типами шаблона (полный и короткий) -->
                    @if(isset($category)) 
                        @foreach($category->products_fulls as $product)
                            @include('layouts.card_full', compact('product'))
                        @endforeach
                        
                        @foreach($category->products as $product)
                            @include('layouts.card', compact('product'))
                        @endforeach
                        
                    @endif
                </div>
                 
            </div>
        </div>
    </div>
@endsection
