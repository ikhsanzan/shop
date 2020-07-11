<?php
session_start();

require_once '../core/koneksi.php';
require_once '../function/Produk_Function.php';
// include_once '../core/core.php';
// require_once 'core/core.php';

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

    <title>IM Parfum</title>
</head>

<body>
    <!-- Header -->
    <!-- <div class="container"> -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="login.html">Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>

    <!-- Hero -->
    <div class="hero-image">
        <div class="hero-text">
            <h1>I am Parfum</h1>
            <p>Temukan Parfum Terbaik Anda Disini</p>
            <a href="#targetname"><button>Belanja Sekarang</button></a>


        </div>
    </div>

<br>
<h1 class="display-5 text-center">Hello, Ibu <?php echo $_SESSION['username']; ?> Ini Adalah Statistik Berat Badan Bayi Ibu</h1>

    <a name="targetname"></a>
    <!-- Content -->
    <div class="container mt-5">
        <div class="row">
           
            <?php $i = 1; ?>
            <?php foreach ($dataproduk as $produk) : ?>
                <div class="col-md-4">
                    <div class="card pb-2">

                        <img src="../admin/upload/<?= $produk['gambar'] ?>" class="card-img-top p-2" height="300px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produk["nama_produk"]  ?></h5>
                            <p class="card-text"><?=  $produk["harga"]  ?></p>
                            <label for="berat"><?=  $produk["berat"]  ?></label>
                            <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-secondary">Tambah Ke Keranjang</button>
                                </small></p>

                        </div>
                    </div>
                </div>
                <?php $i++; ?>

            <?php endforeach; ?>
            
        </div>
    </div>
    <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>