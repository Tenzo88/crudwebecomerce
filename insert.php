<?php
//add dbconnect

include('koneksi.php');

$id = $_POST['id'];

    $idtrx = $_POST['idtrx'];
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $no_telp = $_POST['noTelp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

//query

$query = "INSERT INTO kacamata WHERE(idtrx , barang , harga, noTelp, email, alamat) VALUES('$id','$idtrx', '$barang',  '$harga', '$no_telp', '$email', '$alamat')";

if (mysqli_query($conn , $query)) {
    # code redicet setelah insert ke index
    header("location:data.php");
}
else{
    echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>

