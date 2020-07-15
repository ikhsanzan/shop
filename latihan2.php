<!DOCTYPE html>
<html>
<head>
 <title>maribelajarcoding</title>
</head>
<body>
 <div align="center">
  <h2>Membuat Barcode dengan PHP</h2>
  <h4>www.maribelajarcoding.com</h4>

  <form id="formgenerator" method="POST">
   <input type="text" name="kodeBarcode">
   <input type="submit" name="generate" value="Generate">
  </form>
  <br>
  <?php
   if (isset($_POST['generate'])) {
       //cek jika kodebarcode kosong maka baris selanjutnya tidak akan dikerjakan
       if (empty($_POST['kodeBarcode']))
           exit;
       
       //menampilkan file image barcode
       echo '<img src="php-barcode-master/barcode.php?text=' . $_POST['kodeBarcode'] . '&print=true&size=65" />';
       
       //buat folder untuk simpan file image
       $tempdir = "imagebarcode/";
       if (!file_exists($tempdir))
           mkdir($tempdir, 0755);
       
       
       $target_path = $tempdir . $_POST['kodeBarcode'] . ".png";
       
       //cek apakah server menggunakan http atau https
       $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://';
       
       //url file image barcode 
       $fileImage = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/php-barcode-master/barcode.php?text=" . $_POST['kodeBarcode'] . "&print=true&size=65";
       
       //ambil gambar barcode dari url diatas
       $content = file_get_contents($fileImage);
       
       //simpan gambar
       file_put_contents($target_path, $content);
   }
   ?>
 </div>
</body>
</html>