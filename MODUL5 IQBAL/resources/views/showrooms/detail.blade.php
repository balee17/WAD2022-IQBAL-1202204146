@extends('layouts.main')
@include('partials.navbar')
@section('container')

<section>
   <section class="container mt-5">
      <div class="row">
         <div class="col-6">
            <h3 class="fw-bold">{{ $post->name }}</h3>
            <p class="text-secondary">Detail Mobil {{ $post->name }}</p>
               <img src="../../assets/images/{{ $post->image }}" class="form-control" style="width:100%;">
         </div>
         <div class="col-6">
            <form action="" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                  <span class="fw-bold">Nama Mobil</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" value="{{ $post->name }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Nama Pemilik</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="owner" value="{{ $post->owner }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Tanggal Beli</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="purchase_date" value="{{ $post->purchase_date }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Deskripsi</span>
                  <textarea class="form-control mb-3 mt-3 text-dark" value="" name="description" id="" cols="30" rows="10" readonly>{{ $post->description }}</textarea>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Foto</span>
                  @if($post->image)
                  @else
                     <img class="img-preview img-fluid mb-3 col-sm-5">
                     <span class="fw-bold text-primary">Foto</span>
                  @endif
                  <input type="file" class="form-control mb-3 mt-3" name="image" value="{{ $post->image }}" readonly>
               </div>
               @if($post->status=="Lunas")
                  <div class="mb-3">
                     <span class="fw-bold d-block mb-3">Status Pembayaran</span>
                     <div class="alert alert-dark w-100 fw-bold" role="alert">
                        {{ $post->status }}
                     </div>
                  </div>
               @else
               <div class="mb-3">
                  <span class="fw-bold text-primary d-block mb-3">Status</span>
                  <div class="alert alert-danger w-100 fw-bold" role="alert">
                     {{ $post->status }}
                   </div>
               </div>
               @endif

               <a href="/showrooms/edit/{{ $post->id }}"  class="btn btn-warning w-30 mb-3 mt-5">Edit</a>
         </div>
         </form>
      </div>
      </div>
   </section>
</section>
@endsection