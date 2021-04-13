@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать товар ' . $product->name)
@else
    @section('title', 'Создать товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать товар <b>"{{ $product->name }}"</b></h1>
        @else
            <h1>Добавить товар</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products_fulls.update', $product) }}"
              @else
              action="{{ route('products_fulls.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'code'])
                        <input required type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($product) ? $product->code : null)}}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name'])
                        <input required type="text" class="form-control" name="name" id="name"
                               value="{{ old('name', isset($product) ? $product->name : null)}}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'name_en'])
                        <input type="text" class="form-control" name="name_en" id="name_en"
                                value="{{ old('name_en', isset($product) ? $product->name_en : null)}}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'price'])
                        <input required type="text" class="form-control" name="price" id="price"
                               value="{{ old('price', isset($product) ? $product->price : null)}}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'category_id'])
                       
                     
                        <select required name="category_id" id="category_id" class="form-control">
                            
                                @foreach($categories as $category)
                                   
                                    <option value="{{ $category->id }}"
                                            @isset($product)
                                            @if($product->category_id == $category->id)
                                            selected
                                        @endif
                                        @endisset
                                    >{{ $category->name }}</option>
                                    
                                @endforeach
                            
                        </select>
                       
                                
                            
                    </div>
                </div>
                <br>
                
                <div class="input-group row">
                    <label for="description1" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description1'])
                        <textarea class="summernote" rows="5" style="width: 100%" required name="description1" id="description1">{{ old('description1', isset($product) ? $product->description1 : null)}}</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description2" class="col-sm-2 col-form-label">Описание 2: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description2'])
                        <textarea class="summernote" rows="5" style="width: 100%" required name="description2" id="description2">{{ old('description2', isset($product) ? $product->description2 : null)}}</textarea>
                    </div>
                </div>
                
                <br>
                
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description1_en'])
                        <textarea class="summernote" name="description1_en" id="description1_en" style="width: 100%"
                                    rows="7">{{ old('description1_en', isset($product) ? $product->description1_en : null)}}</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание 2 en: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'description2_en'])
                        <textarea class="summernote" name="description2_en" id="description2_en" style="width: 100%"
                                    rows="7">{{ old('description2_en', isset($product) ? $product->description2_en : null)}}</textarea>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                        @isset($product)
                                
                            <p style="margin-top: 20px;"><img src="{{ asset('storage/'.$product->image) }}"
                         height="240px"></p>
                        @else
                             
                     
                        @endisset
                    </div>
                </div>
                
                <br>
                
                <div class="input-group row">
                    <label for="image_banner" class="col-sm-2 col-form-label">Картинка для баннера: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image_banner" id="image_banner">
                        </label>
                        @isset($product)
                                
                            <p style="margin-top: 20px;"><img src="{{ asset('storage/'.$product->image_banner) }}"
                         height="240px"></p>
                        @else
                             
                     
                        @endisset
                    </div>
                </div>
                
                <br>

                
                @foreach ([
                'amulet' => 'Новые Амулеты',
                'neww' => 'Новинка',
                'menu' => 'Добавить в меню (Максимум 9 показывается)'
                ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{ $title }}: </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="{{$field}}" id="{{$field}}"
                            @if(isset($product) && $product->$field === 1)
                                   checked="'checked"
                                @endif
                            >
                        </div>
                    </div>
                    <br>
                @endforeach
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
        
    </div>
@endsection
