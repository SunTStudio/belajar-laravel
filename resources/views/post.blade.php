@extends('layout.main')

@section('container')

<div class="container mb-5">
    <div class="row justify-content-center">
            <div class="col-8">
            
            <h2 class="mb-3">{{ $post->tittle }}</h2>
            <p>By : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-5 fs-5">
            {!! $post->body !!}
            </article>

            <a href="/blog" class="text-decoration-none btn btn-primary">Back to Blog</a>
        </div>
    </div>
</div>



@endsection


