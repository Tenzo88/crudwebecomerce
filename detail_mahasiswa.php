<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top" style="background-color: #0bd6f4;>
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <h1 class="my-5 text-center"></h1>
        <div class="card">
            <h5 class="card-header text-center text-white" style="background-color: #0bd6f4;">Detail Pesanan</h5>
            <div class="card-body">
                <?php
                include 'koneksi.php';
                $id = $_GET['id'];

                $query  = 'SELECT * FROM kacamata WHERE id=' . $id;

                $data   = mysqli_query($koneksi, $query);

                while ($a = mysqli_fetch_array($data)) {
                ?>
                    <form action="">
                        <div class="form-group">
                            <td width="20%">ID TRX</td>
                            <td width="1%">:</td>
                            <td><?= $a['idtrx'] ?></td>
                        </div>
                        <div class="form-group">
                            <td width="20%">Nama Barang</td>
                            <td width="1%">:</td>
                            <td><?= $a['barang'] ?></td>
                        </div>
                        <div class="form-group">
                            <td width="20%">Harga</td>
                            <td width="1%">:</td>
                            <td><?= $a['harga'] ?></td>
                        </div>
                        <div class="form-group">
                            <td width="20%">No telp</td>
                            <td width="1%">:</td>
                            <td><?= $a['no_telp'] ?></td>
                        </div>
                        <div class="form-group">
                            <td width="20%">Email</td>
                            <td width="1%">:</td>
                            <td><?= $a['email'] ?></td>
                        </div>
                        <div class="form-group">
                            <td width="20%">Alamat</td>
                            <td width="1%">:</td>
                            <td><?= $a['alamat'] ?></td>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
        <a href="data.php" class="btn btn-outline-dark mb-3">Kembali</a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L48,154.7C96,181,192,235,288,245.3C384,256,480,224,576,186.7C672,149,768,107,864,122.7C960,139,1056,213,1152,229.3C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>