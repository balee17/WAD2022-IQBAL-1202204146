<?php 
    $Host = "localhost:3315";
    $Username = "root";
    $Password = "";
    $dbName = "wad_modul4";

    $conn = mysqli_connect($Host, $Username, $Password, $dbName);
 
 function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}



function register($data){
    global $conn;

    $email = htmlspecialchars($data['email']);
    $nama = htmlspecialchars($data['nama']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $password = mysqli_real_escape_string($conn, $data['password'] );
    $password2 = mysqli_real_escape_string($conn, $data['password2'] );

    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('Email sudah terdaftar!')
		      </script>";
		return false;
	}

    // cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert(' Password tidak sesuai!');
		      </script>";
		return false;
	}

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    

    // tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email','$password','$no_hp')");

	return mysqli_affected_rows($conn);    
    


}

function login($data){
    $email = htmlspecialchars($data['email']);
    $password = mysqli_real_escape_string($conn, $data['password'] );

    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
}
?>