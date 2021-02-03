@extends('admin.layouts.admin')

@section('header_admin')
    <h1>Brand</h1>
@endsection

@section('content_admin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $brand->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.brands.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $brand->name }}
            </div>
        </div>
        <div class="fa-pull-left">
            @isset($brand->image)
                <img src="{{ asset('/storage/images/brands/'.$brand->image->body) }}" alt="{{}}" class="img-fluid">
            @else
                <p>No description</p>
            @endisset

        </div>
    </div>

@endsection
