@extends('frontend.index')
@section('content')


    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{$post->title}}</h2>
                <div class="meta mb-3"><span class="date">Published {{$post->created_at->format('d/m/Y')}}</span><span class="time">{{$post->category->name}}</span><span class="comment"><a href="#">{{$post->subcategory->name}}</a></span></div>
            </header>

            <div class="blog-post-body">
                <figure class="blog-banner">
                    <a href="https://made4dev.com">
                        <img class="img-fluid" src="{{ asset('storage/image/'.$post->image) }}" alt="image">
                    </a>
                </figure>
                <p>{{$post->details}}</p>
            </div>
        </div>
    </article>
@endsection
