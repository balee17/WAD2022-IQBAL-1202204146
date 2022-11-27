<?php
    $Host = "localhost:3315";
    $Username = "root";
    $Password = "";
    $dbName = "wad_modul4";
    
    $conn = mysqli_connect($Host, $Username, $Password, $dbName);

    if($conn == false){
        die('gagal conect:'.mysqli_connect_error());
    }
?>