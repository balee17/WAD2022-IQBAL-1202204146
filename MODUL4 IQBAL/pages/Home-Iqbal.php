<?php include './config/connector.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary p-3">
            <ul class="navbar-nav ml-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-3" href="#">MyCar</a>
                </li>
            </ul>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <a href="Add-Iqbal.php"><button type="button" class="btn btn-light" >Add Car</button></a>
            <div class="btn-group"><lu>
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" >
            Nama User
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Profle-Iqbal.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Login-Iqbal.php">Log Out</a></li>
        </ul>
        </div>
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
                        <img src="./assets/images/logo-ead.png" width="10%" alt="ead">
                        <span class="ml-3 text-secondary">Iqbal_1202204146</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="./assets/images/M4.jpg" width="100%" alt="bmw" style="border-radius:10px;">
                </div>
            </div>
        </div>
        </section>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
    </body>
</html>
