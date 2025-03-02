@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <h1 class="mb-4">Create Product</h1>

        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Image URL</label>
                <input type="text" name="image_url" class="form-control" value="{{ old('image_url') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-select">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection