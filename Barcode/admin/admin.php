<?php 
    // require_once '../core/koneksi.php';
    // require_once '../function/Produk_Function.php';

    include_once '../core/core.php';

    $dataproduk = query("SELECT * FROM `produk`");
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

    <title>Halaman Admin</title>
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
            <h5 class="card-header">Kelola Produk</h5>
            <div class="card-body">
                <div class="container">
                    <div class="card-title">
                        <a href="tambah-produk.php">

                            <button type="button" class="btn btn-primary ">
                                Tambah Produk</button>
                        </a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Barcode Produk</th>
                                    <th scope="col">Gambar Produk</th>

                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga Produk</th>
                                    <th scope="col">Berat Produk</th>
                                    <th scope="col">Stok Produk</th>

                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                             <?php foreach ($dataproduk as $produk) : ?>
                                <tr>
                                    <th><?= $i ?></th>
                                    <td><?=  $produk["id_barcode"]  ?></td>
                                    <!-- <td><?=  $produk["gambar"]  ?></td> -->
                                    <td><img class="card-img-top img"  src="<?= $base_url ?>admin/upload/<?= $produk['gambar'] ?>"  height="300px" width="300px"></td>
                                    <td><?=  $produk["nama_produk"]  ?></td>
                                    <td><?=  $produk["harga"]  ?></td>
                                    <td><?=  $produk["berat"]  ?></td>
                                    <td><?=  $produk["stok_barang"]  ?></td>
                                   
                                    <td style="text-align: center;">
                                        <a href="edit-produk.php?id=<?= $produk["id"] ?>" class="mr-4">Ubah</a>
                                        <a href="hapus-produk.php?id=<?= $produk["id"] ?> "onclick="return confirm('yakin');">Hapus</a>

                                    </td>


                                </tr>
                                
                                <?php $i++; ?>
                                 <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

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

