@extends('auth.layouts.master')

@section('title', __('main.orders'))

@section('content')
    <div class="col-md-12">
        <h1>@lang('main.orders')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('basket.data.name')
                </th>
                <th>
                    @lang('basket.data.phone')
                </th>
                <th>
                    @lang('basket.when_send')
                </th>
                <th>
                    @lang('basket.cost')
                </th>
                <th>
                    @lang('basket.action')
                </th>
            </tr>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id}}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->created_at->format('H:i d/m/Y ') }}</td>
                <td>{{ $order->getFullPrice() }} {{ App\Models\Currency::byCode(session('currency', 'KZT'))->first()->symbol}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-success" style="border-radius: 5px;" type="button"
                          @admin
                              href="{{route('show', $order)}}"
                          @else
                              href="{{route('person.orders.show', $order)}}"
                          @endadmin
                        >Открыть</a>
                        <form style="float: left; margin-left: 10px;" action="{{ route('orders.destroy', $order) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>
                            
                    </div>
                </td>
            </tr>
            
            @endforeach
            </tbody>
            {{$orders->links()}}
        </table>
        <!-- tadd -->
    </div>

  
@endsection
