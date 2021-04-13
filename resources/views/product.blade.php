@extends('layouts.master')

@section('title') Продукт@endsection


@section('style') 

<link rel="stylesheet" href="{{asset('css/altar.css')}}">
@endsection

@section('content')
    <!-- <h1>{{ $product->__('name') }}</h1>
    <p>{{ $product->category->__('name') }}</p>
    <p>@lang('basket.price'): <b>{{ $product->getPriceAttributes($product->price) }} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</b></p>
    <img src="{{Storage::url($product->image)}}">
    <p>{{ $product->__('description') }}</p>
    <form action="{{ route('basket-add', $product) }}" method="post">
    @csrf
    <button type="submit" role="button" class="btn btn-success">@lang('main.add_to_basket')</button>
    </form> -->
<div class="content">
        
    <div class="product-only standart">
        <div class="container">
            <img src="{{Storage::url($product->image)}}"  width="300" align="left" vspace="5" hspace="5">
            <p class="prod">
                
                <span class="upper red">{{ $product->__('name') }}</span>
                
                <?php echo html_entity_decode( $product->__('description') ) ?>

            </p>
            <br>
            <b>Цена: {{($product->price)}} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}} </b><br><br>
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <button type="submit" class="btn card-btn" role="button">@lang('main.buy')</button>
        
                @csrf
            </form>
            <form action="{{ route('basket-add-main', $product) }}" method="POST">
                <button type="submit" class="btn card2" role="button">@lang('main.add_to_basket')</button>
        
                @csrf
            </form>
        </div>
    </div>
    <div class="order-product">
        <!-- <div class="container">
            <h3>ВЫБИРАЙТЕ УДОБНУЮ ДЛЯ ВАС СУММУ ВЗНОСА, СТАВЬТЕ ГАЛОЧКУ, <br>
            ЗАПОЛНЯЙТЕ ПОЛЯ ФОРМЫ И НАЖИМАЙТЕ НА КНОПКУ "ОФОРМИТЬ"
            </h3>
            <form action="send.php">
                <div class="form">
                    <div class=" wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" style="width: 100%; display: flex;"><input type="checkbox" name="option1" value="a1" class="left-in" id="rd1"> <label for="rd1"> Алтарь Помощь Рода</label><div class="right"> 999?</div></div>
                    <div class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" style="width: 100%; display: flex;"><input type="checkbox" name="option2" value="a2" class="left-in" id="rd2"> <label for="rd2"> Алтарь Помощь Рода</label><div class="right">1 766?</div></div>
                    <div class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10" style="width: 100%; display: flex;"><input type="checkbox" name="option3" value="a3" class="left-in" id="rd3">  <label for="rd3"> Алтарь Помощь Рода</label><div class="right">1 996?</div></div>
                    
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="10" type="email" placeholder="e-mail">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" data-wow-offset="10" type="text" placeholder="Ф.И.О">
                        <input class="wow bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" data-wow-offset="10" type="tel" placeholder="+7 771 999 99 99">
                        <input class="wow bounceInUp btn buy" data-wow-duration="1.5s" data-wow-delay="0.9s" data-wow-offset="10" type="submit" value="КУПИТЬ">
                    
                </div>
            </form>
        </div> -->
    </div>


</div>
@endsection
