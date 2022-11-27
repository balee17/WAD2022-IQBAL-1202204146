<?php
session_start();


if(!isset($_SESSION['login'])){
    header("Location: function.php");
    exit;
}

require '../config/function.php';

//ketika tombol login ditekan
if(isset($_POST['login'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    //$query = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($query) === 1){
        $data = mysqli_fetch_assoc($query);
        if( password_verify($password, $data["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["email"] = $data["email"];

            if(isset($_POST['remember'])){
                //buat cookie
                setcookie("email", $data["email"], time() + 86400, "/");
                setcookie("password", $data["password"], time() + 86400, "/");
               }
            
            header("location:../index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>LOGIN</title>
    </head>
 <body>
    <section id="login">
        <div class="">
            <div class="row" style="margin-right: 2rem;" class="img-fluid" alt="">
                <div class="col-lg-5 text center">
                <img src="../assets/images/imgRegis.jpeg" width="100%">
                </div>
                <div class="col-lg-7" style="margin-top: 100px;">
                        <h2 class="fw-bold">Login</h2>
                        <?php if(isset($login['error'])) : ?>
                            <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
                        <?php endif; ?>
                        <form action="" method="POST"> 
                        <div class="mb-2 mt-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" autofocus autocomplete="off" required
                            value="
                            <?= isset($_COOKIE["email"]) ? $_COOKIE["email"] : ""; ?>" />
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required 
                            valuue="
                            <?= isset($_COOKIE["password"]) ? $_COOKIE["password"] : ""; ?>" />
                        </div>
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="check" name="check" />
                            <label class="form-check-label" for="check">Remember me</label>
                        </div>
                        <div class="pt-2">
                            <button type="submit" name="login" class="btn btn-primary w-30 mb-2">Login</button>
                            <p>Anda belum mempunyai akun ? <a href="Register-Iqbal.php" class="">Sign Up</a></p>          
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>