<?php
require '../config/function.php';

if(isset($_POST["register"])) {

    if(register($_POST) > 0 ) {
        echo "<script>
                alert('User Berhasil Ditambahkan');
              </script>";  
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
            crossorigin="anonymous">
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" />
        <title>Home</title>
    </head>
 <body>
<div class="">
    <div class="row" style="margin-right: 2rem;" class="img-fluid" alt="">
        <div class="col-lg-5 text center">
        <img src="../assets/images/imgRegis.jpeg" style="position: absolute; top: 0; left: 0;">
        </div>
        <div class="col-lg-5" style="margin-top: 100px; margin-left: 150px;">
            <form action="" method="POST">
                <h2 class="fw-bold">Register</h2>
                <div class="mb-2 mt-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-mb-2">
                    <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="password2" name="password2">
                  </div>
                <div class="mb-2">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" >
                </div>
                <div class="pt-2">
                    <button type="submit" name="register" class="btn btn-primary w-30 mb-2">Daftar</button>
                    <p>Anda Sudah punya akun ? <a href="Login-Iqbal.php" class="">Login</a></p>          
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
  </body>
  </html>