@extends('layouts.main')
@include('partials.navbar')
@section('container')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <br><br><br><br>
                <h1 class="fw-bold text-left" style="font-size:50px;">Selamat Datang Di Show Room Iqbal</h1>
                <p class="text-secondary">
                    At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus
                </p>
                @auth
                <a href="/showrooms-car" >
                  <input type="submit" name="submit" class="btn btn-primary mt-3" style="padding:10px;width:7em;" value="MyCar" readonly>
                </a>
                @else
                @endauth
                <div class="mt-5">
                    <img src="../assets/images/logo-ead.png" width="10%" alt="ead">
                    <span class="ml-3 text-secondary">Iqbal_1202204146</span>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <img src="../assets/images/M4.jpg" width="100%" alt="bmw" style="border-radius:10px;">
            </div>
        </div>
    </div>
</section>
@endsection