@extends('layouts.master')

@section('title', __('basket.place_order'))

@section('content')
<div class="order standart">
    <div class="container">
        <h1>@lang('basket.ordering')</h1>

        <ul class="nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Наличные</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Оплата картой</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active">
                <div class="justify-content-center">
                    <p>@lang('basket.full_cost'): {{  $order->getFullPrice() }} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</b></p>
                    <form action="{{ route('basket-confirm') }}" method="POST" style=" margin-bottom: 20px;">
                        <div style="margin-top: 20px;">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-2">@lang('basket.data.name'): </label>
                                <div class="col-lg-10">
                                    <input required type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-2">@lang('basket.data.phone'): </label>
                                <div class="col-lg-10">
                                    <input type="text" required name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            @guest
                                <div class="form-group">
                                    <label for="name" class="control-label col-lg-2">@lang('basket.data.email'): </label>
                                    <div class="col-lg-10">
                                        <input required type="text" name="email" id="email" value="" class="form-control">
                                    </div>
                                </div>
                            @endguest
                        </div>
                        <br>
                        @csrf
                        <input type="submit" class="btn btn-success" value="@lang('basket.place_order')">
                    </form>
                </div>
            </div>
            <div id="menu1" class="container tab-pane fade">
                <h2>В разработке</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden</p>
            </div>
        </div>
    </div>
</div>
@endsection
