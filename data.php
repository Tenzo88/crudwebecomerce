<?php
session_start();
//koneksi database
include "koneksi.php";
//lihat data di database
$lihat = mysqli_query($koneksi, "SELECT * FROM kacamata ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Data Pesanan Pembelian</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0d565f;">
  <a class="navbar-brand text-white" href="index.html">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<body>


</nav>
    <?php if(isset($_SESSION['Pesan']) && $_SESSION['Pesan'] <> ''){?>
      <div class="Pesan alert alert-primary" role="alert">
        <?= $_SESSION['Pesan'];?>
        <?php unset($_SESSION['Pesan']);?>
      </div>
    <?php } ?>

    
    <div class="row">
      <div class="ml-auto mr-3">
        <a href="tambah_mahasiswa.php" class="btn btn-outline-info mb-3">Tambah Catatan</a>
      </div>
    </div>


    <!-- // -->

    <table class="table table-striped">
      <thead>
        <tr>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">No</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">No Trx</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">Nama Barang</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">Harga</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">No Telp</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">Email</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">Alamat</th>
          <th class="align-middle text-white text-center" scope="col" style="background-color: #0d565f">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "koneksi.php";
        //lihat data di database
        $data = mysqli_query($koneksi, "SELECT * FROM kacamata");
        $no = 1;
        while ($a = mysqli_fetch_array($data)) {

        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $a['idtrx']; ?></td>
            <td><?= $a['barang']; ?></td>
            <td><?= $a['harga']; ?></td>
            <td><?= $a['no_telp']; ?></td>
            <td><?= $a['email']; ?></td>
            <td><?= $a['alamat']; ?></td>
            <td>
              <a href="detail_mahasiswa.php?id=<?= $a['id']; ?>" type="button" class="btn btn-outline-success">Detail Pesanan</a>
              <a href="edit_mahasiswa.php?id=<?= $a['id']; ?>" type="button" class="btn btn-outline-warning">Edit</a>
              <a href="hapus_mahasiswa.php?id=<?= $a['id']; ?>" type="button" class="btn btn-outline-danger" onclick= "return confirm('Yakin Hapus?')">Hapus</a>
            </td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <script>
  $(document).ready(function(){
    window.setTimeout(function(){
      $('.pesan').fadeTo(500, 0).fadeOut(500, function() {
        $(this).remove();
      });
    }, 5000);
  });
  </script>
</body>

</html>