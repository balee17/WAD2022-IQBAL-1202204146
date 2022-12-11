@extends('layouts.main')
@include('partials.navbar')
@section('container')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-1"></div>
                <div class="col-lg-10">
                <section>
                    <h3 class="text-center fw-bold mb-5">Profile</h3>
                        <form action="/profile/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email <span style="color:red;">*</span></label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="email" value="{{ $post->email }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Name<span style="color:red;">*</span></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $post->name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Handphone<span style="color:red;">*</span></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $post->no_hp }}" >
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password<span style="color:red;">*</span></label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password">
                            </div>
                        </div>
                        @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label ">Konfirmasi Password<span style="color:red;">*</span></label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control  @error('confirmPassword') is-invalid @enderror" id="inputPassword" name="confirmPassword">
                            </div>
                        </div>
                        @error('confirmPassword')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <input type="checkbox" onclick="myFunction()">Tampilkan Password
                            </div>
                        </div>


                        <script>
                            function myFunction() {
                                var x = document.getElementById("inputPassword");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-10">
                            <select name="background_color" class="form-control">
                            </select>
                            </div>
                        </div>

                        <center>
                            <button type="submit" name="update_profile" id="update_profile" class="btn btn-primary w-10  mt-5">Update</button>
                        </center><br>
                        <div class="mt-5">
                            <img src="../assets/images/logo-ead.png" width="10%" alt="ead">
                            <span class="ml-3 text-secondary">Iqbal_1202204146</span>
                        </div>
                    </div>
                    </form>
                </div>
        <div class="col-1"></div>

    </div>
</div>
</section>
@endsection