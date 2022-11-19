
<?php
    session_start();
    include 'koneksi.php';
    
    $id = $_POST['id'];
    $idtrx = $_POST['idtrx'];
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $no_telp = $_POST['noTelp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE kacamata SET idtrx = '$idtrx', barang = '$barang', harga ='$harga',
    no_telp = '$no_telp', email = '$email', alamat ='$alamat' 
    WHERE id ='$id'";
    
    $ubah=mysqli_query($koneksi, $query) or die ("Perintah sql gagal " . mysqli_error($koneksi));

    if ($ubah) {
        $_SESSION['Pesan'] = 'Data Barang Berhasil Di Ubah';
    }else {
        $_SESSION['Pesan'] = 'Data Barang Gagal Di Ubah';
    }
    header('Location: data.php');
?>

