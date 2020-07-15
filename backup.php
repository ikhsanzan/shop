<?php 

include 'core/base_url.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IM Parfum </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Logo IM Parfum</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 
        <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>



<!-- Content -->
<!-- <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
    <?php $i = 1; ?>

        <?php 
            include 'config.php';
            $stmt = $conn->prepare("select * from product");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) :
            
        ?>
    <div class="col-md-6 col-sm-4 col-lg-3 mb-2">
        <div class="card-deck">
            <div class="card p-2 boreder-secondary mb-2">
                <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
                <div class="card-body p-1">
                    <h4 class="card-title text-center text-info">
                        <?= $row['product_name']; ?>
                    </h4>
                    <h5 class="card-text text-center text-danger">Rp 
                        <?=  number_format($row['product_price'],2) ?>/-
                    </h5>
                </div>
                <div class="card-footer p-1">
                    <form action="" method="post" class="form-submit">
                        <input type="hidden" class="pid" name="" value="<?= $row['id'] ?>">
                        <input type="hidden" class="pname" name="" value="<?= $row['product_name'] ?>">
                        <input type="hidden" class="pprice" name="" value="<?= $row['product_price'] ?>">
                        <input type="hidden" class="pimage" name="" value="<?= $row['product_image'] ?>">
                        <input type="hidden" class="pcode" name="" value="<?= $row['product_code'] ?>">

                        <button class="btn btn-info btn-block addItemBtn">
                        <i class="fas fa-cart-plus"></i> &nbsp;
                    Tambah Ke Keranjang
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php endwhile; ?>

    </div>
    
    </div>
</div> -->


<div class="container pt-4">
    <div id="message"></div>

    <div class="row">
    <?php $i = 1; ?>
        <?php 
            include 'config.php';
            $stmt = $conn->prepare("select * from product");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) :
        ?>
        <div class="col-md-4">
            <div class="card pb-2">
            <img src="<?= $base_url ?>admin/upload/<?= $row['product_image'] ?>" class="card-img-top p-2" height="300px" width="300px">
                <div class="card-body">
                <h4 class="card-title text-center text-info">
                        <?= $row['product_name']; ?>
                    </h4>
                    <h5 class="card-text text-center text-danger">Rp 
                        <?=  number_format($row['product_price'],2) ?>/-
                    </h5>
                </div>
                <div class="card-footer p-1">
                    <form action="" method="post" class="form-submit">
                        <input type="hidden" class="pid" name="" value="<?= $row['id'] ?>">
                        <input type="hidden" class="pname" name="" value="<?= $row['product_name'] ?>">
                        <input type="hidden" class="pprice" name="" value="<?= $row['product_price'] ?>">
                        <input type="hidden" class="pimage" name="" value="<?= $row['product_image'] ?>">
                        <input type="hidden" class="pcode" name="" value="<?= $row['product_code'] ?>">

                        <button class="btn btn-info btn-block addItemBtn">
                        <i class="fas fa-cart-plus"></i> &nbsp;
                    Tambah Ke Keranjang
                        </button>
                    </form>
                    <!-- <a href="action.php?id=<?= $row['id'] ?>"  ></a> -->
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <?php endwhile; ?>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script  type="text/javascript">
    $(document).ready(function(){
        $(".addItemBtn").click(function(e){
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var pprice = $form.find(".pprice").val();
            var pimage = $form.find(".pimage").val();
            var pcode = $form.find(".pcode").val();


            $.ajax({
                url : 'action.php',
                method: 'post',
                data : {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
                success:function(response){
                    $("#message").html(response);
                load_cart_item_number();
                    
                }
            });
        });
    
        load_cart_item_number();
        
        function load_cart_item_number() {
                $.ajax({
                    url: 'action.php',
                    method : 'get',
                    data: {
                        cartItem: "cart_item"
                    },
                    success: function(response) {
                        $("#cart-item").html(response);
                    }
                });
        }
    });
    
</script>
</body>
</html>