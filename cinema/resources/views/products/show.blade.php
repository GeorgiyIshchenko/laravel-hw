@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        @if($product->image_url)
            <img src="{{ $product->image_url }}" class="img-fluid" alt="Product image">
        @endif
    </div>
    <div class="col-md-6">
        <h1>{{ $product->name }}</h1>
        <p class="text-muted">
            Category: {{ $product->category ? $product->category->name : '-' }}
        </p>
        <h4 class="mb-3">Price: {{ $product->price }}</h4>
        <p>{{ $product->description }}</p>

        @auth
            <form action="{{ route('orders.store') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="mb-3">
                    <label class="form-label">Quantity:</label>
                    <input type="number" name="quantity" min="1" value="1" class="form-control" style="width:100px;">
                </div>
                <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
        @else
            <p class="mt-3">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a> to purchase
            </p>
        @endauth
    </div>
</div>
@endsection