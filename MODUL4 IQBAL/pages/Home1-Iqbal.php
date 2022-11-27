<?php 

session_start();

if(!isset($_SESSION["login"])){
    header("Location: Login.php");
    exit;
}



require '../config/function.php';
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

    <?php include ('../config/connector.php');
      $query = mysqli_query($conn, "SELECT * FROM users");
      $row_query = mysqli_fetch_array($query);
    ?>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary p-3">
            <ul class="navbar-nav ml-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
            </ul>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Login-Iqbal.php">Login</a>
        </li>
      </ul>
    </div>
    </nav>
        <section>

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <br><br><br><br>
                    <h1 class="fw-bold text-left" style="font-size:50px;">Selamat Datang Di Show Room Iqbal</h1>
                    <p class="text-secondary">
                         At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus
                    </p>
                    <form action="" method="post">
                        <input type="submit" name="submit" class="btn btn-primary mt-3" style="padding:10px;width:7em;" value="MyCar">
                    </form>
                    <?php
                        $submit = isset($_POST['submit'])? $_POST['submit'] : '';
                        $data_mobil = mysqli_query($conn,"SELECT * FROM showroom_iqbal_table");
                        $countmobil = mysqli_num_rows($data_mobil);
                        // Cek Car
                        if ($submit){
                            if($countmobil == 0){
                            header ('location: pages/Add-Iqbal.php');
                        
                            }
                            else{
                                header ('location: pages/ListCar-Iqbal.php');
                            }
                        }
                        
                    ?>
                    <div class="mt-5">
                        <img src="../assets/images/logo-ead.png" width="10%" alt="ead">
                        <span class="ml-3 text-secondary">Iqbal_1202204146</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="../assets/images/M4.jpg" width="100%" alt="bmw" style="border-radius:10px;">
                </div>
            </div>
        </div>
        </section>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
    </body>
</html>
