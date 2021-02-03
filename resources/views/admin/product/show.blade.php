@extends('admin.layouts.admin')

@section('header_admin')
    <h1>Product</h1>
@endsection

@section('content_admin')
    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
        <div class="col-md-6">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Brand:</strong> {{ $product->brand_id }}</p>
            <p><strong>Category:</strong> {{ $product->category_id }}</p>
            <p><strong>Content:</strong>
            @isset($product->content)
                <p>{{ $product->content }}</p>
            @else
                <p>No description</p>
            @endisset
            </p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
        </div>
        <div class="fa-pull-left">
            @isset($product->images)
                @foreach($product->images as $image)
                    <img src="{{ asset('/storage/images/products/'.$image->body) }}" alt="" class="img-fluid">
                @endforeach
            @else
                <p>No description</p>
            @endisset

        </div>
    </div>
@endsection
