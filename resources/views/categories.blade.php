@extends('layouts.main')

@section('container')
<h1 class="mb-4">Post Category</h1>

<article class="mb-5">

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blogs?category={{ $category->slug }}"">
                        <div class="card text-bg-dark mt-3">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, .7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    
</article>
    

@endsection