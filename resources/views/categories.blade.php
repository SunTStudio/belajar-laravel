

@extends('layout.main')
@section('container')

<h3 class="mb-5 mt-5">Post Categories</h3>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-4">
                <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-white ">
                <div class="card text-bg-dark border border-0">
                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                </div>
                </div>
                </a>
            </div>
             @endforeach
        </div>
    </div>
    
@endsection