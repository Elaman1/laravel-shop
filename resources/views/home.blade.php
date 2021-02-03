@extends('layouts.app')

@section('title-block')Интернет Магазин @endsection

@section('content')
<div class="row">

	<div>
		<div class="starter-template">
			<h1>Все товары</h1>
			<form method="GET" action="#">
				<div class="filters row">
					<div class="col-sm-6 col-md-3">
						<label for="price_from">Цена от <input type="text" name="price_from" id="price_from" size="6" value="">
						</label>
						<label for="price_to">до <input type="text" name="price_to" id="price_to" size="6" value="">
						</label>
					</div>
					<div class="col-sm-2 col-md-2">
						<label for="hit">
							<input type="checkbox" name="hit" id="hit"> Хит                </label>
					</div>
					<div class="col-sm-2 col-md-2">
						<label for="new">
							<input type="checkbox" name="new" id="new"> Новинка                </label>
					</div>
					<div class="col-sm-2 col-md-2">
						<label for="recommend">
							<input type="checkbox" name="recommend" id="recommend"> Рекомендуем                </label>
					</div>
					<div class="col-sm-6 col-md-3">
						<button type="submit" class="btn btn-primary">Фильтр</button>
						<a href="#" class="btn btn-warning">Сброс</a>
					</div>
				</div>
			</form>
			<div class="row">
			@foreach($products as $product)
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail" style="max-height: 410px;">
						<img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="{{$product->name}}">
						<div class="caption">
							<h3>  {{$product->name}} </h3>
							<p>{{$product->price}} ₽</p>
							<form action="{{ route('cart-add', $product) }} " method="POST">
								<a href="{{ route('product', [$product->category->code, $product->code ]) }}" class="btn btn-default" role="button">Подробнее</a>
								<button type="submit" class="btn btn-success" role="button">В корзину</button>
								@csrf
							</form>
						</div>
					</div>
				</div>
			@endforeach
				
			</div>
			<nav>
				<ul class="pagination">
					<li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
						<span class="page-link" aria-hidden="true">‹</span>
					</li>
					<li class="page-item">
						<a class="page-link" href="#" rel="next" aria-label="pagination.next">›</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
@endsection

@section('aside')
	@parent
	<p>More</p>
@endsection