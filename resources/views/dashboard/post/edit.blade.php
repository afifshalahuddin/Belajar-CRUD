@extends('dashboard.layouts.main')
@section('container')
<div class="col-lg-8 mt-4">
  <h1 class="h2 mb-4">Edit Data Post</h1>
    <form method="post" action="/dashboard/post/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Isi Post Depan</label>
          <input type="text" class="form-control" id="excerp" name="excerp" value="{{$post->excerp}}">
        </div>
        <div style="max-height: 100px overflow: hidden" class="mb-3">
          <label for="image" class="form-label">Gambar</label>
          <img class="img-preview img-fluid mb-2">
          <input class="form-control" type="file" id="image" name="image"  onchange="previewImage()">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Isi Semua Post</label>
          <input type="text" class="form-control" id="body" name="body" value="{{ $post->body }}">
        </div>

        <button type="submit" class="btn btn-primary mt-2 mb-2">Simpan</button>
        <a href="/dashboard/akses" class="btn btn-danger mt-2 mb-2">kembali</a>
      </form>
</div>

<script>
  function previewImage(){
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';
  
  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection

