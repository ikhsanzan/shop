<?php 

// $ds = DIRECTORY_SEPARATOR;
// $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
// require_once("{$base_dir}core{$ds}core.php");

// require_once(__DIR__."core/core.php");
// require_once $_SERVER['DOCUMENT_ROOT'].'core/core.php';



// include_once 'core/core.php';

include_once 'function/register.php';

if(isset ($_POST["register"])){

    if(registrasi($_POST)> 0){
        echo "<script>
            alert('user baru berhasil di tambahkan');
            </script>";
    }else{
        echo mysqli_error($conn);
    }

}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="asset/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Halaman Daftar</title>
</head>

<body>

    <!-- Header -->
    <!-- <div class="container"> -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="login.html">Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
        </li>
    </ul>

    <div class="col-lg-6">
        <div class="card profile">
            <div class="card-header">Form Registrasi</div>
            <div class="card-body card-block">

                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Nama (Username)</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Nama" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email" >
                    </div>
          
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="no_hp" name="no_hp" class="form-control" id="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" >
                    </div>
                    <input type="hidden" name="level" value="user">
                    <button type="submit" name="register" class="btn btn-primary form-control">Daftar</button>
                </form>

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