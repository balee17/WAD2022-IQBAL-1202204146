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
                    <a class="nav-link " href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-3 active" href="ListCar-Iqbal.php">MyCar</a>
                </li>
            </ul>
        </nav>
        <section>
        <?php 
            $id_mobil = $_GET['id_mobil'];
            $sql = "SELECT * FROM showroom_iqbal_table where id_mobil ='$id_mobil'";
            $showdata = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($showdata)) {
        ?>
        <section class="container mt-5">
			<div class="row">
				<div class="col-6">
                <a href="ListCar-Iqbal.php"></a>
                <h3 class="fw-bold"><?php echo $data['nama_mobil'] ?></h3>
                <p class="text-secondary">Detail Mobil <?php echo $data['nama_mobil'] ?></p>
					<img src="../assets/images/<?php echo $data['foto_mobil'];?>" class=" shadow rounded" width="80%" alt="rush">
				</div>
				<div class="col-6">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<span class="fw-bold">Nama Mobil</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['nama_mobil']; ?>"  readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Nama Pemilik</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['pemilik_mobil']; ?>" readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Merk</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['merk_mobil']; ?>" readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Tanggal Beli</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['tanggal_beli']; ?>" readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Deskripsi</span>
							<textarea class="form-control" value="" name="" id="" cols="30" rows="10" readonly><?php echo $data['deskripsi']; ?></textarea>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Foto</span>
							<input type="file" class="form-control mb-3 mt-3" value="<?php echo $data['foto_mobil']; ?>" readonly>	
						</div>
                        <span class="fw-bold mb-3 mt-3">Status Pembayaran</span>
                        <div class="form-check mt-3 default">
                            <input class="form-check-input default" type="radio" name="status"  value="Lunas" readonly>
                            <label class="form-check-label default" for="exampleRadios1">
                            <?php echo $data['status_pembayaran'] ?>
                            </label>
                        </div>
                        
						<a href="../pages/Edit-Iqbal.php?id_mobil=<?php  echo $data['id_mobil'];?>"  class="btn btn-primary w-30 mt-5 mb-3">Edit</a>
                        <?php } ?>
				</div>
				</form>

			</div>
			</div>
		</section>
        </section>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
    </body>
</html>
