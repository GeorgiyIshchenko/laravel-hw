@extends('layouts.app')

@section('content')

<h1 class="mb-4">Movie Catalogue</h1>

<form action="{{ route('products.index') }}" method="GET" class="mb-4">
    <div class="input-group" style="max-width: 400px;">
        <input type="text"
               name="q"
               class="form-control"
               placeholder="Search movies..."
               value="{{ $q ?? '' }}">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($products as $product)
    <div class="col">
        <div class="card h-100">
            <div class="ratio ratio-16x9">
                @if($product->image_url)
                <img
                    src="{{ $product->image_url }}"
                    class="card-img-top"
                    style="object-fit: cover;"
                    alt="Movie cover">
                @else
                <img
                    src="https://via.placeholder.com/1280x720?text=No+Image"
                    class="card-img-top"
                    style="object-fit: cover;"
                    alt="No image">
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">
                    Category: {{ $product->category ? $product->category->name : '-' }} <br>
                    Price: {{ $product->price }}
                </p>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection