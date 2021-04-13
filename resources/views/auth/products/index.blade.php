@extends('auth.layouts.master')

@section('title', 'Товары')



@section('content')
    <div class="col-md-12">
        <h1>Товары</h1>
        <form method="POST" action="{{route('searchs') }}" style="margin-bottom: 20px; display: inline;">
            <input class="inp-cust" name="text_input" type="text" autocomplete="off" value="{{ old('text_input', isset($_POST['text_input']) ? $_POST['text_input'] : null)}}" maxlength="120" placeholder="Название продукта" value="">
            <input type="submit" class="btn btn-primary" value="Поиск">
            @csrf
        </form>
        <a class="btn btn-success" style="float: right;" type="button" href="{{ route('products.create') }}">Добавить товар</a>
        
        <br>
        <br>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Категория
                </th>
                <th>
                    Цена
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>@isset( $product->category ) {{ $product->category->name }} @else Нету категории @endisset</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            
                            <form class="form-prod" style="display: flex; flex-wrap: wrap;" action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('products.show', $product) }}"><img src="{{asset('img/view.png')}}" alt=""></a>
                                
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('products.edit', $product) }}"><img src="{{asset('img/edit.png')}}" alt=""></a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger btn-del" type="submit" value=""></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
        </div>
@endsection
