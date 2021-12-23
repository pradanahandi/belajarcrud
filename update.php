<?php
// koneksi database
include 'conn.php';
// menangkap data yang di kirim dari form
	$id = $_POST['id'];
    
    $name=$_POST['nama'];
    $alamat = $_POST['alamat'];
        
    // update user data
    $result = mysqli_query($query, "UPDATE tbl_karyawan SET namakaryawan='$name',alamat='$alamat'WHERE idkaryawan=$id");
    
    header("Location: index.php");
?>