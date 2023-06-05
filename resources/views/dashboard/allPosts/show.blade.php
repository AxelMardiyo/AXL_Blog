@extends('dashboard.layouts.main')

@section('container')
  
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By: <span class="fw-medium">{{ $post->author->name }}</span> in <span class="fw-medium">{{ $post->category->name }}</span></a></p>

            <div class="mb-3">
                <a href="./" class="btn btn-success"><span data-feather='arrow-left'></span> Back to all posts</a>
                <form action="/dashboard/allPosts/{{ $post->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are u sure?')"><span data-feather="x-circle" class=""></span> Delete</button>
                </form>
            </div>
            


            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="...">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="...">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection