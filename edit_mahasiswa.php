<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Data Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-4 mb-4">
            <h2 class="card-header text-white font-weight-normal" style="background-color: #0bd6f4;">Edit Pesanan Pembelian</h5>
                <div class="card-body">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $query = 'SELECT * FROM kacamata WHERE id=' . $id;

                    $data = mysqli_query($koneksi, $query);

                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" action="edit_action.php">
                            <div class="form-group text-info">
                                <input type="hidden" name="id" value="<?= $a['id']; ?>">
                                <label>NO TRX</label>
                                <input type="text" class="form-control" name="idtrx" placeholder="IDTRX" value="<?= $a['idtrx']; ?>">
                            </div>
                            <div class="form-group text-info">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="barang" placeholder="Nama Barang" value="<?= $a['barang']; ?>">
                            </div>
                            <div class="form-group text-info">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="Harga" value="<?= $a['harga']; ?>">
                            </div>
                            <div class="form-group text-info">
                                <label>NO HP</label>
                                <input type="text" class="form-control" name="noTelp" placeholder="No_Telp" value="<?= $a['no_telp']; ?>">
                            </div>
                            <div class="form-group text-info">
                                <label for="exampleFormControlTextarea1">Emailt</label>
                                <textarea class="form-control" name="email" rows="3" placeholder="Email"><?= $a['email']; ?></textarea>
                            </div>
                            <div class="form-group text-info">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?= $a['alamat']; ?>">
                            </div>
                            <div class="row float-right">
                                <button type="submit" class="btn btn-outline-success mb-3">Submit</button>
                            </div>
                                <a href="data.php" class="btn btn-outline-dark">Kembali</a>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>