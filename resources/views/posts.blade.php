@extends('layouts.main')
@section('container')
 
 <div class="row">
   @foreach ($posts as $post)
   <div class="col-md-4">
      <div class="card" style="width: 23rem;">
        <div class="card-body mt-2 ">
          <img class="card-img-top" style="max-height: 200px" src="{{ asset('storage/'.$post->image) }}">
          <a href="/posts/{{ $post->id }}" class="card-link h4">{{ $post->title }}</a>
          <p class="card-text">{{ $post->excerp }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  
@endsection