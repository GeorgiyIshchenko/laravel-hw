@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <h1 class="mb-4">Edit Product</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control" 
                    value="{{ old('name', $product->name) }}" 
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea 
                    name="description" 
                    class="form-control"
                >{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input 
                    type="number" 
                    step="0.01" 
                    name="price" 
                    class="form-control" 
                    value="{{ old('price', $product->price) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Image URL</label>
                <input 
                    type="text" 
                    name="image_url" 
                    class="form-control" 
                    value="{{ old('image_url', $product->image_url) }}"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $cat)
                        <option 
                            value="{{ $cat->id }}"
                            {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}
                        >
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection