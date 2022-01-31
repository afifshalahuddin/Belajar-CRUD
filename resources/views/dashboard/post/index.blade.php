@extends('dashboard.layouts.main')
@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi Depan Post</th>
        <th scope="col">Gambar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($post as $p)
        <tr>
        <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $p->title }}</td>
            <td>{{ $p->excerp }}</td>
            <td><div><img style="max-height: 100px" class="img-fluid" src="{{ asset('storage/'.$p->image) }}"></div></td>
            <td>
               <a href="/dashboard/post/{{ $p->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
            </td>
        </tr>  
        @endforeach 
    </tbody>
  </table>
@endsection
