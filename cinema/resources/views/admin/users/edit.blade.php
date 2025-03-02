@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6 offset-3">
        <h1 class="mb-4">Edit User: {{ $user->name }}</h1>

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="buyer" {{ $user->role=='buyer' ? 'selected' : '' }}>Buyer</option>
                    <option value="admin" {{ $user->role=='admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection