@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>


<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blogs" method="get">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>


@if ($posts->count())
<div class="card mb-3">
        @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="...">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        @endif

    <div class="card-body">
      <h3 class="card-title"><a href="/blogs/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p class="">
        <small class="text-body-secondary">
            By. <a href="/blogs?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>  in <a href="/blogs?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
     </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/blogs/{{ $posts[0]->slug }}" class="text-decor`ation-none btn btn-primary">Read more</a>

    </div>
</div>


<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, .7)"><a href="/blogs?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                
                @if ($post->image)
                <div style="max-height: 300px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="...">
                </div>
                 @else
                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="...">
                @endif

                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="">
                    <small class="text-body-secondary">
                        By. <a href="/blogs?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a>  {{ $post->created_at->diffForHumans() }}
                    </small>
                 </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/blogs/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>



{{-- @foreach ($posts->skip(1) as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/blogs/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>

        <a href="/blogs/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>
@endforeach --}}
    

@endsection