@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')

    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Название en</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>Описание 1</td>
                <td>{{ $product->description1 }}</td>
            </tr>
            <tr>
                <td>Описание 2</td>
                <td>{{ $product->description1 }}</td>
            </tr>
            <tr>
                <td>Описание 1 en</td>
                <td>{{ $product->description1_en }}</td>
            </tr>
            <tr>
                <td>Описание 2 en</td>
                <td>{{ $product->description2_en }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Картинка баннера</td>
                <td><img src="{{ Storage::url($product->image_banner) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>@isset( $product->category ) {{ $product->category->name }} @else Нету категории @endisset</td>
            </tr>
            

            <tr>
                <td>Разделы</td>
                <td>
                @if($product->isNeww())
                    <span class="badge badge-success">Новинка</span>
                @endif

                @if($product->isAmulet())
                    <span class="badge badge-danger">Новые амулеты</span>
                @endif
                </td>
                
            </tr>
            
            </tbody>
        </table>
    </div>
@endsection
