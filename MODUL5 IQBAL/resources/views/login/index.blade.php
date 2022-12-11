@extends('layouts.main')
@section('container')
        <section class="container-fluid">
            <div class="row">
                <div class="col-6" style="height:100vh;"><br><br><br><br><br><br>
                    <img src="../assets/images/imgRegis.jpeg" width="100%" alt="bmw" style="border-radius:10px;">
                </div>
                
                <div class="col-6"><br><br><br><br><br><br>
                <h3 class="fw-bold">LOGIN</h3>
                <form action="/login" method="post">
                    @csrf
                    <!-- Email -->
                    <div class="mb-3"><br><br>
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder=""
                        value="{{ old('email') }}"  required autofocus>
                    </div>
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <!-- Password -->
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder=""
                            required>
                    </div>
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                      </div>
                    @enderror
                    <!-- Remember Me -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="rememberme">
                        <label class="form-check-label" for="rememberme">
                        Remember Me
                        </label>
                    </div>
                    <!-- Button -->
                    <div class="text-center mt-5">
                        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                    </div>
                    <p class="mt-3">Tidak Punya akun? <a href="/register">Daftar</a></p>
                </form>
                </div>
            </div>
@endsection