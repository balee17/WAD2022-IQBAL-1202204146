<?php
    
    if (isset($_POST['simpan'])) {
        //Include file koneksi, untuk koneksikan ke database
        include 'connector.php';
        $nama_mobil = $_REQUEST['nama_mobil'];
		$nama_pemilik = $_REQUEST['nama_pemilik'];
		$merk_mobil = $_REQUEST['merk_mobil'];
		$tanggal_beli = $_REQUEST['tanggal_pembelian'];
		$deskripsi = $_REQUEST['deskripsi'];
		$status = $_REQUEST['status'];
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $extentionFile	= array('png','jpg');
            $foto_mobil = $_FILES['foto_mobil']['name'];
            $x = explode('.', $foto_mobil);
            $extention = strtolower(end($x));
            $uploadDirectory = '../assets/images/';
            $uploadFile = $uploadDirectory . basename($_FILES['foto_mobil']['name']);

            if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $uploadFile)){
                if (in_array($extention, $extentionFile) === true){

                    $sql="insert into showroom_iqbal_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) values ('$nama_mobil', '$nama_pemilik', '$merk_mobil','$tanggal_beli','$deskripsi','$foto_mobil','$status')";

                    $simpan=mysqli_query($conn,$sql);

                    if ($simpan) {
                        header("Location:../pages/ListCar-Iqbal.php?add=berhasil");
                    }
                    else {
                        header("Location:index.php?add=gagal");
                    }
                    
                }
            }else {
                $gambar="bank_default.png";
            }
        }

    }
?>