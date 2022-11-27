<?php
    include 'connector.php';

    $id_mobil=$_GET["id_mobil"];
    $foto_mobil=$_GET["foto_mobil"];
    $sql="delete from showroom_iqbal_table where id_mobil=$id_mobil";
    $Hapus=mysqli_query($conn,$sql);

    //Menghapus file gambar
    unlink("assets/images/".$foto_mobil);

    if ($Hapus) {
        header("Location:../pages/ListCar-Iqbal.php?hapus=berhasil");
    }
    else {
        header("Location:../pages/ListCar-Iqbal.php?hapus=gagal");

    }
?>