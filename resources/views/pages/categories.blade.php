@extends('layouts.app')

@section('title')Categories @endsection

@section('content')
        @foreach($data as $el)
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="./storage/{{ $el->image }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">{{ $el->name }}</h1>
                        <p class="lead">{{ $el->description }}</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="{{ route('index.category', ['cat'=>$el->id]) }}" class="btn btn-primary btn-lg px-4 me-md-2">More</a>
{{--                            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>--}}
                        </div>
                    </div>
                </div>

            </div>
        @endforeach

@endsection
