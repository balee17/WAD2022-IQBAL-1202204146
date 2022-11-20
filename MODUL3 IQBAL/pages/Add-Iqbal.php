<?php include '../config/connector.php' ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <title>Home</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary p-3">
         <ul class="navbar-nav ml-5">
            <li class="nav-item">
               <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link ml-3 active" href="#">MyCar</a>
            </li>
         </ul>
      </nav>
      <section>
         <div class="container mt-5">
            <h2 class="fw-bold">Tambah Mobil</h2>
            <p class="text-secondary">Tambah Mobil Baru Anda Ke List Show Room</p>
            <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
               <div class="mb-3 mt-5">
                  <span class="text-secondary fw-bold">Nama Mobil</span>
                  <input type="text" class="form-control mb-3 mt-3" name="nama_mobil" placeholder="BMW z4">
               </div>
               <div class="mb-3">
                  <span class="text-secondary fw-bold">Nama Pemilik</span>
                  <input type="text" class="form-control mb-3 mt-3" name="nama_pemilik" placeholder="Iqbal - 1202204146">
               </div>
               <div class="mb-3">
                  <span class="text-secondary fw-bold">Merk</span>
                  <input type="text" class="form-control mb-3 mt-3" name="merk_mobil" placeholder="BMW">
               </div>
               <div class="mb-3">
                  <span class="text-secondary fw-bold">Tanggal Beli</span>
                  <input type="date" class="form-control mb-3 mt-3" name="tanggal_pembelian" placeholder="Iqbal">
               </div>
               <div class="mb-3">
                  <span class="text-secondary fw-bold">Deskripsi</span>
                  <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Mobil"></textarea>
               </div>
               <div class="mb-3">
                  <span class="text-secondary fw-bold">Foto</span>
                  <input type="file" class="form-control mb-3 mt-3" name="foto_mobil" placeholder="Iqbal">
               </div>
               <span class="text-secondary fw-bold mb-3">Status Pembayaran</span><br>
               <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="status"  value="Lunas">
                  <label class="form-check-label" for="exampleRadios1">
                  Lunas
                  </label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" value="Belum Lunas">
                  <label class="form-check-label" for="exampleRadios2">
                  Belum Lunas
                  </label>
               </div><br>
               <button type="submit" name="simpan" class="btn btn-primary w-10 mb-3 mt-5">Selesai</button>
            </form>
         </div>
      </section>
      <script src="./assets/js/bootstrap.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
   </body>
</html>