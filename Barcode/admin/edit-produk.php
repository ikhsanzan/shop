<?php 

// require_once '../core/koneksi.php';
// require_once '../function/Produk_Function.php';
include_once '../core/core.php';


$id = abs(intval($_GET["id"]));
// var_dump($id);

$dataproduk = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST["edit-data-produk"])) {

    if (ubah($_POST )) {
        # code...
        // echo "data berhasil di tambahkan";  
        echo "
            <script>
                alert('data berhasil di tambahkan!');
                document.location.href = 'admin.php';
            </script>

        ";
    } else {
        // mysqli_error($conn);
        // echo "tes";
        // die();
        echo "data gagal di tambahkan";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Halaman Edit Produk</title>
</head>

<body>
    <!-- Header -->
    <!-- <div class="container"> -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="login.html">Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Daftar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Scan Barcode</a>
        </li>
    </ul>

    <!-- Content -->

    <br>

    <div class="container">
        <div class="card">
            <h5 class="card-header">Halaman Edit Produk</h5>
            <div class="card-body">
                <div class="container">
                    <form method="post" action=""  enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?= $dataproduk["id"] ?>">

                        <div class="form-group">
                            <label for="id_barcode">Kode Barcode Produk	</label>
                            <input type="text" class="form-control" name="id_barcode" id="id_barcode" value="<?= $dataproduk['id_barcode']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Produk	</label><br>
                            <input type="text" id="gambar" name="gambar" value="<?= $dataproduk['gambar']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk		</label>
                            <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="<?= $dataproduk['nama_produk']; ?>" id="nama-produk" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Produk		</label>
                            <input type="text" class="form-control" name="harga" id="harga"  id="harga" value="<?= $dataproduk['harga']; ?>" id="nama" >
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat Produk		</label>
                            <input type="text" class="form-control" name="berat" id="berat"  id="berat" value="<?= $dataproduk['harga']; ?>" id="nama" >
                        </div>

                        <div class="form-group">
                            <label for="stok_barang">Stok Produk	</label>
                            <input type="number" class="form-control" name="stok_barang"  value="<?= $dataproduk['stok_barang']; ?>" id="stok_barang" >
                        </div>

                        <button type="submit" name="edit-data-produk" class="btn btn-primary form-control ">Simpan Produk</button>
                    </form>

                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>