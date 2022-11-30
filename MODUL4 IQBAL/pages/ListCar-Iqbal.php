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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary p-3">
            <ul class="navbar-nav ml-5">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-3 active" href="#">MyCar</a>
                </li>
            </ul>
            <li class=" d-flex text-left align-right" style="position:relative;left:1000px;">
                <a href="Add-Iqbal.php" class="btn btn-light text-primary d-flex">Add Car</a>
            </li>
        </nav>
        <section class="container">
        <div class="row mt-5">
           <h1 class="fw-bold">My Show Room</h1>
           <p class="text-secondary">List Show Room Iqbal - 1202204146</p>
        </div>
        </section>
       
        <!-- Read Data Car -->
        <div class="container-fluid mt-5" style="height:100vh;">
            <div class="row" id="load_data">
            <?php
                include '../config/connector.php';
                $query = "SELECT * FROM showroom_iqbal_table ORDER BY id_mobil ASC";
                $showdata = mysqli_query($conn,$query);
                while ($data = mysqli_fetch_array($shwdata)) {
            ?>
                <div class="col-sm-3 mb-3" style="margin-left:4.5em;">
                    <div class="card shadow bg-white" style="width:400px; margin-left:20px;padding:25px 36px;">
                    <center>
                        <img class="card-img-top bg-light" src="../assets/images/<?php echo $data['foto_mobil'];?>" alt="Card image" style="width:100%;">
                    </center>
                        <div class="card-body shadow" style="padding:25px;">
                        <h4 class="card-title fw-bold"><?php echo $data['nama_mobil'] ?></h4>
                        <p class="card-text p-desc text-secondary">
                            <?php echo $data['deskripsi'] ?></p>
                            <style>
                                .p-desc {
                                    overflow: hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                }
                            </style>
                        <a href="../pages/Detail-Iqbal.php?id_mobil=<?php  echo $data['id_mobil'];?>" class="btn btn-primary">Detail</a>
                        <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>&foto_mobil=<?php echo $data['foto_mobil'];?>" onclick="konfirmasi()" class="btn btn-danger" role="button">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        
            </div>
        </div>
        <?php
        // menampilkan notifikasi
        if (isset($_GET['update'])) {
      
            if ($_GET['update']=='berhasil'){
                echo "
                <div class='container d-flex justify-content-end' style='position:fixed;bottom:0;right:0;'>
                    <div class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                    
                        <svg class='placeholder col-1 rounded me-2 bg-warning' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#007aff'></rect>
                        </svg>
            
                        <strong class='me-auto'>Alert Update !</strong>
                        <small>11 mins ago</small>
                        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                        Data Berhasil Diupdate.
                    </div>
                    </div>
                </div>
                ";
            }else if ($_GET['add']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal diupload!</div>";
            }    
        }

        if (isset($_GET['add'])) {
      
            if ($_GET['add']=='berhasil'){
                echo "
                <div class='container d-flex justify-content-end' style='position:fixed;bottom:0;right:0;'>
                    <div class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
                    <div class='toast-header'>
                    
                        <svg class='bd-placeholder-img rounded me-2' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#007aff'></rect>
                        </svg>
            
                        <strong class='me-auto'>Alert Add Car !</strong>
                        <small>11 mins ago</small>
                        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                        Data Berhasil Ditambahkan.
                    </div>
                    </div>
                </div>
                ";
            }else if ($_GET['add']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal diupload!</div>";
            }    
        }


        if (isset($_GET['hapus'])) {
    
            if ($_GET['hapus']=='berhasil'){
                echo"
                <div class='container d-flex justify-content-end' style='position:fixed;bottom:0;right:0;'>
                    <div class='row'>
                        <div class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
                        <div class='toast-header'>
                        
                            <span class='placeholder col-1 rounded me-2 bg-danger' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#007aff'></rect>
                            </span>
                
                            <strong class='me-auto'>Alert Hapus Data Car !</strong>
                            <small>11 mins ago</small>
                            <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                        </div>
                        <div class='toast-body'>
                            Data Berhasil Dihapus.
                        </div>
                        </div>
                    </div>
                </div>
                ";
            }else if ($_GET['hapus']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal dihapus!</div>";
            }    
        }
        ?>
        <?php
                    $data_mobil = mysqli_query($conn,"SELECT * FROM showroom_iqbal_table");
                    $countmobil = mysqli_num_rows($data_mobil);
        ?>
        <div class="container mt-5">
            <p class="fw-bold opacity-50">
                Jumlah Mobil : <?php echo "$countmobil" ?>
            </p>
        </div>
        <script>
                function konfirmasi(){
                konfirmasi=confirm("Apakah anda yakin ingin menghapus gambar ini?")
                document.writeln(konfirmasi)
            }
        </script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
