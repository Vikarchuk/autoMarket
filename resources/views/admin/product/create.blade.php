@extends('admin.layouts.admin')

@section('header_admin')
    <h1>Product</h1>
@endsection

@section('content_admin')
    {{--    <p>Welcome</p>--}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    @include('admin.layouts.errorsChecking')

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.product.part.form')
    </form>
@endsection



