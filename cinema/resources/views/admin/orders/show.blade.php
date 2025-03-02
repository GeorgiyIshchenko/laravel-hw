@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <h1 class="mb-4">Order #{{ $order->order_number }}</h1>
        <div class="mb-3">
            <strong>User:</strong> {{ $order->user ? $order->user->name : 'Unknown' }}
        </div>
        <div class="mb-3">
            <strong>Date:</strong> {{ $order->created_at->format('Y-m-d H:i') }}
        </div>

        <h4>Items</h4>
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price (each)</th>
                </tr>
            </thead>
            <tbody>
            @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product ? $item->product->name : 'Deleted product' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>
    </div>
</div>
@endsection