<?php
session_start();

require_once '../core/koneksi.php';
require_once '../function/Produk_Function.php';

// $dataproduk = query("SELECT * FROM `produk`");

$datauser = query("SELECT * FROM `data_pelanggan` where username = '$_SESSION[username]' limit 1");
// print_r($datauser);
var_dump($datauser);

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

    <title>Halaman Profile</title>
</head>

<body>
    <!-- Header -->
    <!-- <div class="container"> -->
    <ul  class="nav justify-content-end">
        <li  class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>

    

    <div class="col-lg-6">
        <div class="card profile">
            <div class="card-header">Profile Pengguna</div>
            <div class="card-body card-block">
            <?php foreach ($datauser as $user) : ?>
                <h1 class="display-5 text-center">Hello, Ibu <?php echo $_SESSION['username']; ?> Ini Adalah Statistik Berat Badan Bayi Ibu</h1>

                <form action="" method="post" class="">
                    <div class="form-group">
                        <label for="username">Nama</label>
                        <input type="text" value="<?= $user["username"] ?>"  class="form-control" name="username"  id="username" placeholder="Masukkan Nama" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="no_hp" class="form-control" id="no_hp" placeholder="Masukkan Nomor HP" >
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-secondary btn-sm form-control">Simpan</button>

                    </div>
                </form>
            <?php endforeach; ?>

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