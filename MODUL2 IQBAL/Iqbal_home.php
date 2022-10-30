<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/6a8b45a968.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    
  <?php
  $mobil = [
    [
      "mobil" => "Toyota Rush",
      "harga" => "200.000",
      "img" => "img/rush.png"
    ],
    [
      "mobil" => "Toyota Ayla",
      "harga" => "150.000",
      "img" => "img/ayla.png"
    ],
    [
      "mobil" => "Honda Brio",
      "harga" => "150.000",
      "img" => "img/brio.jpeg"
    ],
  ]

  ?>
    <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-md-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="Iqbal_home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="Iqbal_booking.php">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="container text-center">
      <h1>WELCOME TO EAD RENT</h1>
      <p class="text-secondary">Find your best deal, here!</p>
    </section>
    <section class="container d-flex justify-content-center mb-5">
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 18rem">
            <img
              src="img/rush.png"
              class="card-img-top"
              alt="CAR"
            />
            <div class="card-body">
              <h5 class="card-title text-dark">Toyota Rush</h5>
              <p class="card-text text-secondary">Rp. 800.000 / Day</p>
            </div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item text-primary">7 Kursi</li>
              <li class="list-group-item text-primary">1500CC</li>
              <li class="list-group-item text-primary">Manual</li>
            </ul>
            <div class="card-body text-center bg-light">
              <a
                href="Iqbal_booking.php"
                class="btn btn-primary card-link w-100"
                >Book Now</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width: 18rem">
            <img
              src="img/AYLAAA.jpg"
              class="card-img-top"
              alt="CAR"
            />
            <div class="card-body">
              <h5 class="card-title text-dark">Daihatsu Ayla</h5>
              <p class="card-text text-secondary">Rp. 450.000 / Day</p>
            </div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item text-primary">4 Kursi</li>
              <li class="list-group-item text-primary">1200CC</li>
              <li class="list-group-item text-primary">Manual</li>
            </ul>
            <div class="card-body text-center bg-light">
              <a
                href="Iqbal_booking.php"
                class="btn btn-primary card-link w-100"
                >Book Now</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width: 18rem">
            <img
              src="img/BrioO.jpg"
              class="card-img-top"
              alt="CAR"
            />
            <div class="card-body">
              <h5 class="card-title text-dark">Honda Brio 2022</h5>
              <p class="card-text text-secondary">Rp. 500.000 / Day</p>
            </div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item text-primary">4 Kursi</li>
              <li class="list-group-item text-primary">1300CC</li>
              <li class="list-group-item text-primary">Automatic</li>
            </ul>
            <div class="card-body text-center bg-light">
              <a
                href="Iqbal_booking.php"
                class="btn btn-primary card-link w-100"
                >Book Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="d-flex justify-content-center bg-light text-center">
      <p class="text-dark pt-3">Created by IQBAL_1202204146</p>
    </footer>
    <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
  </body>
</html>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
