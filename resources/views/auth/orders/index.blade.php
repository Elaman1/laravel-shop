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
                <td>{{ $order->getFullPrice() }} руб</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-success" type="button"
                                @admin
                                    href="{{route('show', $order)}}"
                                @else
                                    href="{{route('person.orders.show', $order)}}"
                                @endadmin
                            >Открыть</a>
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
