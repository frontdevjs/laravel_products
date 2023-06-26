@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <div class="d-flex gap-2 justify-content-between mt-3">
            @foreach($category->products as $product)
                <div class="card shadow" style="width: 18rem;">
                    <img src="../../storage/{{ $product->image }}" class="img card-img-top"
                         alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h3 class="card-title">{{ $product->price }}$</h3>
                        <a href="{{ route('index.product', ['id'=>$product->id]) }}"
                           class="btn btn-primary me-3 py-2">More</a>
                        <a href="#" class="btn btn-outline-primary"><span
                                class="material-icons align-baseline">shopping_cart</span></a>
                    </div>
                </div>
            @endforeach
        </div>


        <a href="{{route('index.categories')}}" class="btn btn-warning">Back</a>
    </div>
@endsection
