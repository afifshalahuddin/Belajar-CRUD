@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
    <main class="form-registration">
        <form action="/register" method="post">
            @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
    
        <div class="form-floating">
            <input type="name" class="form-control rounded-top" id="name" name="name" placeholder="Name">
            <label for="name">Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control rounded-bottom" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
        </form>
        <small class="d-block text-center">Sudah daftar? Silahkan <a href="/login">Login !!</a></small>
    </main>   
    </div>
</div>
@endsection