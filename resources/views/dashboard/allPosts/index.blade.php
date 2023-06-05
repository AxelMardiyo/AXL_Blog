@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Post</h1>
</div>

<div class="table-responsive col-lg-12">

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
  @endif

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Author</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($allPosts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->author->username }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/allPosts/id?id={{ $post->id }}" class="badge bg-info"><span data-feather="eye" class=""></span></a>
                <form action="/dashboard/allPosts/{{ $post->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are u sure?')"><span data-feather="x-circle" class=""></button>
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  


@endsection