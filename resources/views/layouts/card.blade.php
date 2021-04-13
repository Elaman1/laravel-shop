

<div class="card-block">
    <div class="thumbnail">
        
    @isset($product->image)
        <img src="{{Storage::url($product->image)}}" alt="{{$product->name}}">
    @else
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 64GB">
    @endisset
    <div class="caption">
        <h3>{{ $product->__('name') }}</h3>
        <p>{{ $product->getPriceAttributes($product->price) }} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</p>
        <p>
            <form action="{{ route('basket-add-main', $product) }}" method="POST">
                <button type="submit" class="btn card-btn" role="button">@lang('main.add_to_basket')</button>
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">@lang('main.more')</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>
