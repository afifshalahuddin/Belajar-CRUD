@extends('dashboard.layouts.main')
@section('container')
<div class="container-fluid">
    <div class="mb-3 mt-4">
        <a href="/dashboard/akses" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
        @can('admin')
        <a href="/dashboard/post/{{ $post->id }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a>
        @endcan
    </div>
    <div>
        <img style="max-height: 250px" src="{{ asset('storage/'.$post->image) }}">
    </div>
    <div>
        <article>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </article>
    </div>
</div>

@endsection