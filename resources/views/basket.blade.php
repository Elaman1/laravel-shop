
@extends('layouts.master')

@section('title', __('basket.cart'))

@section('content')
    <div class="basket">
        <div class="container">
            <h1>@lang('basket.cart')</h1>
            <!-- <p>@lang('basket.ordering')</p> -->
            <div class="panel">
                <style>
                    .btn {
                        outline: none!important;
                    }
                </style>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>@lang('basket.name')</th>
                        <th>@lang('basket.count')</th>
                        <th>@lang('basket.price')</th>
                        <th>@lang('basket.cost')</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    @isset($order)
                    <?php 
                        $i = 0;
                    ?>
                    @foreach($order->products as $product)
                    
                    <?php 
                        $i++;
                    ?>
                    
                        <tr class="nth<?php echo $i ?>">
                            <td>
                                <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                    <img height="56px" src="{{Storage::url($product->image)}}">
                                    {{ $product->name }}
                                </a>
                            </td>
                            <td>
                            <span class="badge">{{ $product->pivot->count }}</span>
                                <div class="btn-group form-inline">
                                        <button type="button" class="btn btn-danger btnminus"
                                                href=""><span
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                        @csrf
                                    
                                        <button type="button" class="btn btn-success btnplus"
                                                href=""><span
                                                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                        @csrf
                                    
                                </div>
                            </td>
                            <td><span class="l-price">{{ $product->getPriceAttributes($product->price) }}</span> {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</td>
                            <td><span class="l-fullprice">0</span> {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</td>
                            <script>
                            
                            function pricer<?php echo $i ?>() {
                                var badge = $('tr.nth<?php echo $i ?> .badge').html();
                                var price = $('tr.nth<?php echo $i ?> .l-price').html();
                                $('tr.nth<?php echo $i ?> .l-fullprice').html((Number(price) * Number(badge)).toFixed(2));

                                setTimeout(pricer<?php echo $i ?>, 100);
                            }

                            setTimeout(pricer<?php echo $i ?>, 100);
                        </script>

                        <script>
                        // badge count
                            $('tr.nth<?php echo $i ?> .btnminus').click(function() {
                                var numb = $('tr.nth<?php echo $i ?> .badge').html();
        
                                if (numb < 1) {
                                    return;
                                }
                                $('tr.nth<?php echo $i ?> .badge').html(Number(numb) - 1);
                            })

                            $('tr.nth<?php echo $i ?> .btnplus').click(function() {
                                var numb = $('tr.nth<?php echo $i ?> .badge').html();
                                $('tr.nth<?php echo $i ?> .badge').html(Number(numb) + 1);
                            })
                        </script>

                        <script>
                        
                        // обработка на php
                            $('tr.nth<?php echo $i ?> .btnminus').click(function() {
                
                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('basket-remove', $product) }}", //Путь к обработчику
                                    data: {
                                        'referal': '{{$product}}',
                                        csrf_token: $('meta[name="csrf-token"]').attr('content'),
                                        _token: '{{csrf_token()}}'
                                    },
                                    
                                    response: 'text',
                                    success: function(data){
                                        
                                    }
                                })	
                                
                            })
                            
                            $('tr.nth<?php echo $i ?> .btnplus').click(function() {
                            
                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('basket-add', $product) }}", //Путь к обработчику
                                    data: {
                                        'referal': '{{$product}}',
                                        csrf_token: $('meta[name="csrf-token"]').attr('content'),
                                        _token: '{{csrf_token()}}'
                                    },
                                    
                                    response: 'text',
                                    success: function(data){
                                        
                                    }
                                })	
                                
                            })
                        </script>
                    </tr>
                    @endforeach
                    @foreach($order->products_fulls as $product)
                    
                    <?php 
                        $i++;
                    ?>
                    
                        <tr class="nth<?php echo $i ?>">
                            <td>
                                <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                    <img height="56px" src="{{Storage::url($product->image)}}">
                                    {{ $product->name }}
                                </a>
                            </td>
                            <td>
                            <span class="badge">{{ $product->pivot->count }}</span>
                                <div class="btn-group form-inline">
                                        <button type="button" class="btn btn-danger btnminus"
                                                href=""><span
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                        @csrf
                                    
                                        <button type="button" class="btn btn-success btnplus"
                                                href=""><span
                                                class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                        @csrf
                                    
                                </div>
                            </td>
                            <td><span class="l-price">{{ $product->getPriceAttributes($product->price) }}</span> {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</td>
                            <td><span class="l-fullprice">0</span> {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</td>
                            <script>
                            
                            function pricer<?php echo $i ?>() {
                                var badge = $('tr.nth<?php echo $i ?> .badge').html();
                                var price = $('tr.nth<?php echo $i ?> .l-price').html();
                                $('tr.nth<?php echo $i ?> .l-fullprice').html((Number(price) * Number(badge)).toFixed(2));

                                setTimeout(pricer<?php echo $i ?>, 100);
                            }

                            setTimeout(pricer<?php echo $i ?>, 100);
                        </script>

                        <script>
                        // badge count
                            $('tr.nth<?php echo $i ?> .btnminus').click(function() {
                                var numb = $('tr.nth<?php echo $i ?> .badge').html();
        
                                if (numb < 1) {
                                    return;
                                }
                                $('tr.nth<?php echo $i ?> .badge').html(Number(numb) - 1);
                            })

                            $('tr.nth<?php echo $i ?> .btnplus').click(function() {
                                var numb = $('tr.nth<?php echo $i ?> .badge').html();
                                $('tr.nth<?php echo $i ?> .badge').html(Number(numb) + 1);
                            })
                        </script>

                        <script>
                        
                        // обработка на php
                            $('tr.nth<?php echo $i ?> .btnminus').click(function() {
                
                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('basket-remove-full', $product) }}", //Путь к обработчику
                                    data: {
                                        'referal': '{{$product}}',
                                        csrf_token: $('meta[name="csrf-token"]').attr('content'),
                                        _token: '{{csrf_token()}}'
                                    },
                                    
                                    response: 'text',
                                    success: function(data){
                                        
                                    }
                                })	
                                
                            })
                            
                            $('tr.nth<?php echo $i ?> .btnplus').click(function() {
                            
                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('basket-add-full', $product) }}", //Путь к обработчику
                                    data: {
                                        'referal': '{{$product}}',
                                        csrf_token: $('meta[name="csrf-token"]').attr('content'),
                                        _token: '{{csrf_token()}}'
                                    },
                                    
                                    response: 'text',
                                    success: function(data){
                                        
                                    }
                                })	
                                
                            })
                        </script>
                    </tr>
                    @endforeach
                    <tr>
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                function kola() {
                                    var elems = document.querySelectorAll('.l-fullprice');
                                    var log = 0;
                                    var elem = document.querySelector('.fullend');
                                    for(var i=0; i<elems.length; i++) {
                                        var got = elems[i].innerHTML;
                                        log += Number(got);
                                    }
                                    elem.innerHTML = log.toFixed(2);
                                    setTimeout(kola, 100);
                                }
                                setTimeout(kola, 100);
                            })
                        </script>
                        <td colspan="3">@lang('basket.full_cost'):</td>
                        <td><span class="fullend">0</span> {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</td>
                    </tr>
                    </tbody>
                    @endisset
                </table>
                <br>
                
                <div class="btn-group pull-right" role="group">
                    <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">@lang('basket.place_order')</a>
                </div>
            </div>
        </div>
    </div>
@endsection