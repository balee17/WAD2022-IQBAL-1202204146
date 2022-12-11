@extends('layouts.main')
@include('partials.navbar')
@section('container')
<section>


    <div class="container mt-5">
    <form method="post"  action="/create-car" enctype="multipart/form-data">
       <h2 class="fw-bold">Tambah Mobil</h2>
       <p class="text-secondary">Tambah Mobil Baru Kamu Ke List Show Room</p>
         </div>

          @csrf
          <div class="form-group">
            <label for="user_option">User</label>
            <select class="form-control" id="user_option" name="user_option">
               <option value="" select>Pilih User</option>
               @foreach ($userid as $tampilkan)

                  <option value="{{ $tampilkan->id }}">{{ $tampilkan->name }}</option>
               @endforeach
            </select>
         </div>
           <div class="mb-3 mt-5">
             <span class="text-secondary fw-bold">Nama Mobil</span>
             <input type="text" class="form-control mb-3 mt-3" name="name" placeholder="BMW z4">
          </div>
          <div class="mb-3">
             <span class="text-secondary fw-bold">Nama Pemilik</span>
             <input type="text" class="form-control mb-3 mt-3" name="owner" placeholder="Iqbal - 1202204146">
          </div>
          <div class="mb-3">
             <span class="text-secondary fw-bold">Merk</span>
             <input type="text" class="form-control mb-3 mt-3" name="brand" placeholder="BMW">
          </div>
          <div class="mb-3">
             <span class="text-secondary fw-bold">Tanggal Beli</span>
             <input type="date" class="form-control mb-3 mt-3" name="purchase_date" placeholder="Iqbal">
          </div>
          <div class="mb-3">
             <span class="text-secondary fw-bold">Deskripsi</span>
             <textarea class="form-control" name="description" placeholder="Deskripsi mobil"></textarea>
          </div>
          <div class="mb-3">
             <span class="text-secondary fw-bold">Foto</span>
             <input type="file" class="form-control mb-3 mt-3" name="image" placeholder="Iqbal">
          </div>
          <span class="text-secondary fw-bold mb-3">Status Pembayaran</span><br>
          <div class="form-check form-check-inline mt-3">
             <input class="form-check-input" type="radio" name="status"  value="Lunas">
             <label class="form-check-label" for="exampleRadios1">
               Lunas
             </label>
          </div>
          <div class="form-check form-check-inline mt-3">
            <input class="form-check-input" type="radio" name="status"  value="Belum-Lunas">
            <label class="form-check-label" for="exampleRadios1">
               Belum-Lunas
            </label>
         </div><br>
          <button type="submit" class="btn btn-primary w-10 mb-3 mt-5">Selesai</button>
       </form>
      
       
    </div>
 </section>
@endsection