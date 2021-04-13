@extends('layouts.product_full')

@section('title', __('main.amulet'))

@section('style')
    <link rel="stylesheet" href="{{ asset('css/product-full.css') }}">
@endsection

@section('content')

<div class="content">
        
        <div class="banner banner-altar">
            <div class="container">
                @if(!is_null($product->image_banner))
                <img src="{{Storage::url($product->image_banner)}}" style="max-width: 500px;" class="product_full" alt="">
                @else
                <img src="{{Storage::url($product->image)}}" style="max-width: 500px;" class="product_full" alt="">
                @endif
                <div class="social-lent ver1">
                    <span><p class="upper">{{ $product->__('name') }}</p></span>
                    <a href="#"><img src="{{asset('img/instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/twitter.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/telegram.png')}}" alt=""></a>
                    <a href="#"><img style="width: 30px; height: 30px; padding: 1px;" src="{{asset('img/whatsapp.png')}}" alt=""></a>
                </div>
                <div class="content">
                    <div class="center-content">
                        <h2 class="slideInRight wow upper" data-wow-duration="1.2s" data-wow-delay="0.5s" data-wow-offset="10">{{ $product->__('name') }}</h2>
                    </div>
                    
                </div>
                <img src="http://promusic.beget.tech/public/img/main circle.png" class="main-circle" alt="">
            </div>
        </div>
        <div class="resource standart">
            <div class="container">
                <h2 style="text-align: center;margin-bottom: 20px" class="slideInUp wow" data-wow-duration="1.2s" data-wow-delay="0s" data-wow-offset="10">{{ $product->__('name') }}</h2>
                <div>
                    <?php echo html_entity_decode( $product->__('description1')) ?>
                </div>

            </div>
            
        </div>
        
            
        <div class="activate standart">
            
            <div class="container">
                <?php echo html_entity_decode( $product->__('description2')) ?>
                
                <br><br>
                <b style="color: #fff">Цена: {{($product->price)}} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}} </b><br><br>
                <form style="display: inline-block;" action="{{ route('basket-add-full', $product) }}" method="POST">
                    <button type="submit" class="btn card-btn" role="button">@lang('main.buy')</button>
            
                    @csrf
                </form>
                <form style="display: inline-block;" action="{{ route('basket-add-main-full', $product) }}" method="POST">
                    <button type="submit" class="btn card2" role="button">@lang('main.add_to_basket')</button>
            
                    @csrf
                </form>
            </div>
        </div>

        
    </div>

    @endsection