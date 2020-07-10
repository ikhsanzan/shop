<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="asset/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Halaman Utama</title>
</head>

<body>
    <!-- Header -->
    <!-- <div class="container"> -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="login.html">Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registrasi.html">Daftar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Scan Barcode</a>
        </li>
    </ul>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <form action="">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Detail Belanja</span>
                </h4>
                <ul class="list-group mb-3">
                    
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Nama Produk</h6>
                        </div>
                        <span class="text-muted">Quantity</span>
                        <span class="text-muted">Harga</span>
                        <span class="text-muted">Total</span>



                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Parfum </span>
                        <span>1</span>
                        <span>2000</span>

                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total Belanja (Rupiah)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
                </form>
               


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Detail Pengguna</h4>
                <form class="needs-validation" >
                    <div class="row">
                        <div class="col-md-12 mb-6">
                            <label for="firstName">Nama Lengkap</label>
                            <input type="text" placeholder="Nama Lengkap" class="form-control" id="firstName" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" id="address" placeholder="Jalan Paguyuban No.12" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>


                    <hr class="mb-4">

                    <h4 class="mb-3">Pembayaran</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">Cash</label>
                        </div>
                    </div>


                    <button class="btn btn-primary btn-lg btn-block" type="submit">Lanjutkan Pembayaran </button>
                </form>
            </div>
        </div>
    </div>


    <!-- Content -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
</body>

</html>