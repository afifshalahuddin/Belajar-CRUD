@extends('layouts.main')
@section('container')
<div class="row">
    <div class="card col-sm-6">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <h5 class="card-title">{{ $user->email }}</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

@endsection