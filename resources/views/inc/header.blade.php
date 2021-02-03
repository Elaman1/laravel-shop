@section('header')
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Все товары</a></li>
                <li><a href="{{ route('categories') }}">Категории</a>
                </li>
                <li><a href="{{route('cart')}}">В корзину</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/login">Войти</a></li>
            </ul>
        </div>
    </div>
</nav>
  </header>