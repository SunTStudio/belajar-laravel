

@extends('layout.main')
@section('container') 

    <h2 class="mb-5">{{ $tittle }}</h2>

    @if ($post->count())
        <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->tittle }}</a></h3>
        <p>By : <a href="/author/{{ $post[0]->author->username }}" class="text-decoration-none">{{ $post[0]->author->name }}</a> in <a href="/categories/{{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->name }}</a> <small class="text-body-secondary">{{ $post[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $post[0]->excerpt }}</p>
            <a href="/posts/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

        </div>
    </div>
    @else
    <p class="text-center fs-4 fw-medium">No Post Found..</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($post->skip(1) as $post )
            <div class="col-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">
                        {{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->tittle }}</h5>
                    <p>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{!! $post->excerpt !!}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
    
@endsection