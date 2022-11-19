<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input data Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-4 mb-4">
            <h2 class="card-header text-white font-weight-normal" style="background-color: #0d565f;">Data Pesanan Barang</h5>
                <div class="card-body">
                    <!-- suruh tambahin method="post" action="tambah_action.php" kaya di bawah -->
                    <form method="post" action="tambah_action.php">
                    <!-- // -->
                    <!-- Suruh tambahin name nya di setiap inputan kaya di bawah -->
                        <div class="form-group text-info">
                            <label>ID TRX</label>
                            <input type="text" class="form-control" name="idtrx" placeholder="ID transaksi : 12345 (maximal 5 digit)">
                        </div>
                        <div class="form-group text-info">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="barang" placeholder="Nama Barang">
                        </div>
                        <div class="form-group text-info">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Contoh : 15000">
                        </div>
                        <div class="form-group text-info">
                            <label>NO HP</label>
                            <input type="number" class="form-control" name="noTelp" placeholder="Contoh : 082133337777">
                        </div>
                        <div class="form-group text-info">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="emailname@gmail.com">
                        </div>
                        <div class="form-group text-info">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" placeholder="Contoh: Jl. raden intan 2, RT 08 RW 04"></textarea>
                        </div>
                        
                        <div class="row float-right">
                            <button type="submit" class="btn btn-outline-success mb-3">Submit</button>
                        </div>
                            <a href="data.php" class="btn btn-outline-dark">Kembali</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>