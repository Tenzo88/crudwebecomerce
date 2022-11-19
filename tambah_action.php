
<?php
    session_start();
    include 'koneksi.php';

    $idtrx = $_POST['idtrx'];
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $no_telp = $_POST['noTelp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO kacamata values(null, '$idtrx', '$barang',  '$harga', '$no_telp', '$email', '$alamat')";
    
    $tambah=mysqli_query($koneksi, $query) or die ("Perintah sql gagal " . mysqli_error($koneksi));

    if ($tambah) {
        $_SESSION['Pesan'] = 'Data Barang Berhasil Di Tambah';
    }else {
        $_SESSION['Pesan'] = 'Data Barang Gagal Di Tambah';
    }
    header('Location: data.php');
?>

