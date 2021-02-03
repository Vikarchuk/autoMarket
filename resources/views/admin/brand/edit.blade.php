@extends('admin.layouts.admin')

@section('header_admin')
    <h1>Edit brand</h1>
@endsection

@section('content_admin')
    @include('admin.layouts.errorsChecking')
    <form method="post" enctype="multipart/form-data"
          action="{{ route('admin.brands.update', ['brand' => $brand->id]) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="name"
                   required maxlength="100" value="{{ old('name') ?? $brand->name }}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="image">
        </div>
        @isset($brand->image)
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="remove" id="remove">

                <label class="form-check-label" for="remove">
                    <img src="{{ asset('/storage/images/brands/'.$brand->image->body) }}" alt="{{}}" class="img-fluid">
                    Delete loading image
                </label>
            </div>
        @endisset
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
