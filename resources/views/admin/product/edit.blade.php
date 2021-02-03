@extends('admin.layouts.admin')

@section('header_admin')
    <h1>Edit product</h1>
@endsection

@section('content_admin')

    @include('admin.layouts.errorsChecking')

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.product.part.form')
    </form>


@endsection
