@extends('products.layout')

@section('title', 'Detail Product')
  
@section('content')
    <a class="btn btn-primary mb-3" href="{{ route('products.index') }}"> Back</a>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong><br>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection