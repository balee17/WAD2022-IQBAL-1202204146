<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking</title>
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
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Iqbal_home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="Iqbal_booking.php">Booking</a>
                </li>
            </ul>
        </nav>
        <section class="container text-center">
            <h3 class="mb-3">Rent your car now!</h3>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-6">
                    <img src="img/rush.png" id="hide" width="100%" alt="rush">
                </div>
                <div class="col-6">
                    <form action="Iqbal_mybooking.php" method="GET">
                        <div class="form-control mb-3">
                            <span class="text-secondary">Name</span>
                            <input type="username" class="form-control mb-3" value="IQBAL_1202204146" id="name" name="name" readonly>
                            <span class="text-secondary">Book Date</span>
                            <input type="date" class="form-control mb-3" id="date" name="date" required>   
                            <span class="text-secondary">Start Time</span>
                            <input type="time" class="form-control mb-3" id="time" name="time" required>  
                            <span class="text-secondary">Duration (Days)</span>
                            <input type="text" class="form-control mb-3" id="time" name="duration" required>
                            <span class="text-secondary">Car Type</span>
                            <select class="form-select mb-3" aria-label="Default select example" id="typeCar" name="typeCar" required>
                                <option>Toyota Rush</option>
                                <option>Toyota Ayla</option>
                                <option>Honda Brio</option>
                            </select>
                            <span class="text-secondary">Phone Number</span>
                            <input type="text" class="form-control mb-3" id="phoneNumber" name="phoneNumber" required>
                            <span class="text-secondary">Add Service(s)</span><br>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"   id="services" name="service[0]" value="Health Protocol">
                                <label class="form-check-label" for="flexCheckDefault">
                                Health Protocol / Rp 35.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="services" name="service[1]" value="Driver">
                                <label class="form-check-label" for="flexCheckChecked">
                                Driver / Rp 150.000
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox"  id="services" name="service[2]" value="Full Filled">
                                <label class="form-check-label" for="flexCheckChecked">
                                Full Filled / Rp 300.000
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mb-3">Book</button>
                    </form>
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