@extends('layouts.main')
@include('partials.navbar')
@section('container')

<section>
   <section class="container mt-5">
      <div class="row">
         <div class="col-6">
            <h3 class="fw-bold">{{ $post->name }}</h3>
            <p class="text-secondary">Detail Mobil {{ $post->name }}</p>
               <img src="../../assets/images/{{ $post->image }}" class="form-control" alt="Card image" style="width:100%;">
         </div>
         <div class="col-6">
            <form action="/showrooms/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
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
                  <textarea class="form-control mb-3 mt-3 text-dark" value="" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
               </div>
               <div class="mb-3">
                  @if($post->image)
                  @else
                     <img class="img-preview img-fluid mb-3 col-sm-5">
                     <span class="fw-bold text-primary">Foto</span>
                  @endif
                  <input type="file" class="form-control mb-3 mt-3" name="image" value="{{ $post->name }}" readonly>
               </div>
               <div class="mb-3">
                <span class="fw-bold mb-3">Status Pembayaran</span><br>
                <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="status"value="Lunas">
                    <label class="form-check-label">
                        Lunas
                    </label>
                  </div>
                  <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="status" value="Belum-Lunas">
                    <label class="form-check-label">
                      Belum Lunas
                    </label>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary w-30 mb-3">Simpan</button>
         </div>
         </form>
      </div>
      </div>
   </section>
</section>
@endsection