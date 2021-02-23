<p>Имя {{ $name }}</p>

<p>Общая сумма {{ $fullSumm }} р</p>

<table>
    <tbody>
    @foreach($order->products as $product)
    <tr>
        <td>
            <a href="{{route('product', $product) }}">
                <img height="56px"
                        src="{{ Storage::url($product->image) }}">
                {{ $product->name }}
            </a>
        </td>
        <td>
            Описание товара: {!! $product->description !!} 
        </td>
        <td><span class="badge"> {{ $product->pivot->count }}</span></td>
        <td>{{ $product->price }}p </td>
        <td>{{ $product->getPriceForCount() }}p </td>
    </tr>
    @endforeach
    </tbody>
</table>
