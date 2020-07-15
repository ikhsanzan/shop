<?php
session_start();

require_once '../core/koneksi.php';
// require '../core/core.php';
require_once '../function/edit_profile.php';
// $id = abs(intval($_GET['id']));

$id = abs(intval($_GET['id']));

$datauser = query("SELECT * FROM `data_pelanggan` where  id=$id ");

if (isset($_POST["submit"])) {
    // print_r($_FILES);
    // echo $_FILES["gambar"]["name"];
    //cek apakahdata berhasil di ubah atau tidak 
    // mysqli_error($conn);
        // die();
    if (ubahprofile($_POST) > 0) {
        # code...
        // echo "data berhasil di tambahkan";  
        mysqli_error($conn);
        // die();
        echo "
            <script>
                alert('data berhasil di ubah!');
                document.location.href = 'profile.php';
            </script>

        ";
    } else {
        # code...
        echo "tse";
        mysqli_error($conn);
die();
        echo "data gagal di ubah";
        // die();
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

            <div class="card-header">
                <div class="row">

                <div class="col-sm-6 d-flex justify-content-between ">Profile Pengguna</div>
                <div class="col-sm-6 d-flex justify-content-end">
                <a href="edit-profile.php?id=<?= $user["id"] ?>">
                <!-- <button type="button" class="btn btn-primary  btn-sm">Edit Data</button> -->
                </a>
                </div>
            
                </div>
                <!-- <div class="d-flex justify-content-between">Profile Pengguna</div> -->

            </div>
            <div class="card-body card-block">
            <!-- <?php foreach ($datauser as $user) : ?> -->

                <form action="" method="POST" class="" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user["id"] ?>">

                    <div class="form-group">
                        <label for="username">Nama</label>
                        <input type="text" value="<?= $user['username'] ?>"  class="form-control" name="username"  id="username" placeholder="Masukkan Nama" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="<?= $user['email'] ?>" name="email" id="email" placeholder="Masukkan Email" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" value="<?= $user['password'] ?>" name="password" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" class="form-control" value="<?= $user['alamat'] ?>" name="alamat" id="alamat" placeholder="Masukkan Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="no_hp" class="form-control" value="<?= $user['no_hp'] ?>" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" >
                    </div>
                    <input type="hidden" name="level" value="<?= $user['user'] ?>">

                    <div class="form-actions form-group">
                        <button type="submit" name="submit" class="btn btn-secondary btn-sm form-control">Simpan</button>

                    </div>
                </form>
            <!-- <?php endforeach; ?> -->

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