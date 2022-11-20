<?php
    $id_mobil=$_GET["id_mobil"];
    $nama_mobil = $_REQUEST['nama_mobil'];
    $nama_pemilik = $_REQUEST['pemilik_mobil'];
    $merk_mobil = $_REQUEST['merk_mobil'];
    $tanggal_beli = $_REQUEST['tanggal_beli'];
    $deskripsi = $_REQUEST['deskripsi'];
    $status = $_REQUEST['status'];
    if (isset($_POST['update'])) {
        //Include file koneksi, untuk koneksikan ke database
        include 'connector.php';


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

                    $sql="UPDATE showroom_iqbal_table SET nama_mobil = '$nama_mobil', pemilik_mobil = '$nama_pemilik', merk_mobil = '$merk_mobil', tanggal_beli = '$tanggal_beli', deskripsi = '$deskripsi', foto_mobil = '$foto_mobil', status_pembayaran ='$status' WHERE id_mobil = '$id_mobil'";

                    $simpan = mysqli_query($conn, $sql);

                    if ($simpan) {
                        header("Location:../pages/ListCar-Iqbal.php?update=berhasil");
                    }
                    else {
                        header("Location:index.php?update=gagal");
                    }
                    
                }
            }else {
                $gambar="bank_default.png";
            }
        }

    }
?>