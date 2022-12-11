@extends('layouts.main')
@section('container')
<section class="container-fluid">
    <form action="/register" method="post">
        @csrf
        <div class="row">
            <div class="col-6" style="height:100vh;"><br><br><br><br><br><br>
                <img src="../assets/images/imgRegis.jpeg" width="100%" alt="bmw" style="border-radius:5px;">
            </div>
            <div class="col-6">
                <br><br><br><br><br>
                <h3 class="fw-bold">REGISTRASI</h3>

                <div class="mb-3 row">
                    <label>Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}">
                    </div>
                </div>
                @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-3 row">
                    <label>Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-3 row">
                    <label>Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" name="no_hp"  value="{{ old('no_hp') }}">
                    </div>
                </div>
                @error('no_hp')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @enderror

                <div class="mb-3 row">
                    <label for="">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" >
                    </div>
                </div>
                @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @enderror

                <div class="mb-3 row">
                    <label for="">Konfirmasi Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror" name="confirmPassword" id="confirmPassword">
                    </div>
                </div>
                @error('confirmPassword')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror

                <p class="mt-3">Anda sudah punya akun?<a href="/login">Login</a></p>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary w-100" value="Registration">
                </div>
            </div>
        </div>
    </form>
</section>
@endsection