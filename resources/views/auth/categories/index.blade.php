@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
    <div class="col-md-12">
        <h1>Категории</h1>
        <a class="btn btn-success" type="button"
           href="{{ route('categories.create') }}">Добавить категорию</a>
           <br><br>
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
                    Действия
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            
                                
                            <form class="form-prod" style="display: flex; flex-wrap: wrap;" action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('categories.show', $category) }}"><img src="{{asset('img/view.png')}}" alt=""></a>
                                
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('categories.edit', $category) }}"><img src="{{asset('img/edit.png')}}" alt=""></a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger btn-del" type="submit" value=""></form>
                        </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
        </div>
@endsection
