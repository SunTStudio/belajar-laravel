

@extends('layout.main')
@section('container')

<h3 class="mb-5 mt-5">Our Author</h3>

    @foreach ($user as $author )
    <ul>
        <li>
            <h2>
                <a href="/author/{{ $author->username }}" class="text-decoration-none">{{ $author->name }}</a>
            </h2>
        </li>
    </ul>
    
    

        
    @endforeach
    
@endsection