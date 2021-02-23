

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <div class="labels">
    @if($product->isNew())
        <span class="badge badge-success">@lang('main.properties.new')</span>
    @endif

    @if($product->isRecommend())
        <span class="badge badge-warning">@lang('main.properties.recommend')</span>
    @endif

    @if($product->isHit())
        <span class="badge badge-danger">@lang('main.properties.hit')</span>
    @endif
    </div>
    @isset($product->image)
        <img src="{{Storage::url($product->image)}}" alt="iPhone X 64GB">
    @else
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 64GB">
    @endisset
    <div class="caption">
        <h3>{{ $product->__('name') }}</h3>
        <p>{{ $product->getPriceAttributes($product->price) }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}.</p>
        <p>
            <form action="{{ route('basket-add-main', $product) }}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">@lang('main.add_to_basket')</button>
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">@lang('main.more')</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>