@extends('admin.layouts.admin')

@section('header_admin')
    <h1>Edit category</h1>
@endsection

@section('content_admin')
    <form method="post" enctype="multipart/form-data"
          action="{{ route('admin.categories.update', ['category' => $category->id]) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="name"
                   required maxlength="100" value="{{ old('name') ?? $category->name }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
