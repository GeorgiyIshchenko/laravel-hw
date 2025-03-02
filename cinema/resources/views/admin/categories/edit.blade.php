@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <h1 class="mb-4">Edit Category</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control" 
                    value="{{ old('name', $category->name) }}" 
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea 
                    name="description" 
                    class="form-control"
                >{{ old('description', $category->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Parent Category</label>
                <select name="parent_id" class="form-select">
                    <option value="">No parent</option>
                    @foreach($parentCategories as $pc)
                        <option 
                            value="{{ $pc->id }}" 
                            {{ (old('parent_id', $category->parent_id) == $pc->id) ? 'selected' : '' }}
                        >
                            {{ $pc->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection