@extends('layouts.main')
@include('partials.navbar')
@section('container')
<section class="container">
   <div class="row mt-5">
   <h1 class="fw-bold">My Show Room</h1>
   <p class="text-secondary">List Show Room Iqbal - 1202204146</p>
</section>

       <!-- Read Data Car -->
   <div class="container-fluid mt-5" style="height:75vh;">
      <div class="row" id="load_data">
         @if (count($show)>0)
         @foreach($show as $tampilkan)

         <div class="col-lg-3 mb-3 ml-3" style="margin-left:4.5em;">
            <div class="card shadow bg-white">
               <center>
                  <img class="card-img-top bg-light" src="assets/images/{{ $tampilkan->image }}" alt="Card image" style="width:100%">
               </center>
               <div class="card-body shadow" style="padding:25px;">
                  <h4 class="card-title fw-bold">{{ $tampilkan->name }}</h4>
                  <p class="card-text p-desc text-secondary">
                     {{ $tampilkan->description }}
                  </p>
                  <style>
                     .p-desc {
                     overflow: hidden;
                     display: -webkit-box;
                     -webkit-line-clamp: 2;
                     -webkit-box-orient: vertical;
                     }
                  </style>

                  <form action="{{ route('deleteCar') }}" method="post">
                     @csrf
                     <!-- Update Button -->

                     <a href="/showrooms/detail/{{ $tampilkan->id }}" type="submit"
                     class="btn btn-primary mr-3" style="border-radius:10px"><i></i>&nbsp;Detail&nbsp;</a>
                     <input type="hidden" value="{{ $tampilkan->id }}" name='id'>
                     <!-- Delete Button -->
                     <button class="btn btn-danger ml-2" style="border-radius:10px" type="submit"
                           onclick="return confirm('Apakah Anda Ingin Menghapus {{ $tampilkan->name }} dari List?')"><i></i>&nbsp;Delete&nbsp;</button>
                  </form>
               </div>
            </div>
         </div>
         @endforeach
         @else
         <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
          <strong>Data Not Found</strong> You should Add in on some of car fields below.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif
         <div class="container mt-5">
            <p class="fw-bold opacity-50">
               Jumlah Mobil : {{ $count }}
            </p>
         </div>
@endsection