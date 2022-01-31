@extends('layouts.main')

@section('container')
<img style="max-height: 250px" src="{{ asset('storage/'.$post->image) }}">
<article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>

    <a href="/blog">Back To Post</a>
</article>
@endsection