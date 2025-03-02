@extends('layouts.app')

@section('content')
<h1 class="mb-4">My Orders</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@foreach($orders as $order)
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Order #{{ $order->order_number }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Date: {{ $order->created_at->format('Y-m-d H:i') }}
            </h6>
            @if($order->items->count())
            <ul class="list-group list-group-flush mt-2">
                @foreach($order->items as $item)
                    <li class="list-group-item">
                        <strong>{{ $item->product ? $item->product->name : 'Deleted product' }}</strong> 
                        &times; {{ $item->quantity }}
                        (price: {{ $item->price }})
                    </li>
                @endforeach
            </ul>
            @else
                <p class="text-danger">No items found in this order.</p>
            @endif
        </div>
    </div>
@endforeach
@endsection