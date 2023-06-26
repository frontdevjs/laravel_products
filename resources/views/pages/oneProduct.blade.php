@extends('layouts.app')


@section('content')
    <div class="product_wrap mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="../../storage/{{ $product->image }}" alt="{{ $product->name }}" style="width: 400px; height: 320px;">
                </div>
                <div class="col">
                    <h1>{{ $product->name }}</h1>
                    <p class="text-sm-start" style="width: 420px;">{{ $product->desc }}</p>
                    <h3 class="title">Price: {{ $product->price }}$</h3>
                </div>

            </div>
            <div class="mt-5 d-flex justify-content-around">
                <a href="{{ route('index.products') }}" class="btn btn-primary">Back</a>
                <a href="#" class="btn btn-warning">Add to cart</a>
            </div>
            <a href=""></a>
        </div>
    </div>
@endsection
