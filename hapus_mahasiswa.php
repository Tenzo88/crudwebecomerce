<!-- Suruh ketik ini semuaaaaa -->
<?php
    session_start();
    include 'koneksi.php';
    
    $id = $_GET['id'];
    $query = "DELETE FROM kacamata WHERE id='$id'";
    
    $hapus=mysqli_query($koneksi, $query) or die;
    mysqli_error($koneksi);

    if ($hapus) {
        $_SESSION['Pesan'] = 'Data Barang Berhasil Di Hapus';
    }else {
        $_SESSION['Pesan'] = 'Data Barang Gagal Di Tambah';
    }
    header('Location: data.php');
?>

<!-- // -->