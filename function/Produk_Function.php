<?php 

// require_once '../core/koneksi.php';
$conn = mysqli_connect("localhost", "root", "", "barcode");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    
    global $conn;

    $id_barcode = (htmlspecialchars(mysqli_real_escape_string($conn,$data["id_barcode"])));
    // $gambar = (htmlspecialchars(mysqli_real_escape_string($conn,$data["gambar"])));
    //upload gambar
     $gambar = upload();
    if (!$gambar) {
          return false;
    }
    $nama_produk = (htmlspecialchars(mysqli_real_escape_string($conn,$data["nama_produk"])));
    $harga = (htmlspecialchars(mysqli_real_escape_string($conn,$data["harga"])));
    $berat = (htmlspecialchars(mysqli_real_escape_string($conn,$data["berat"])));
    $stok_barang = (htmlspecialchars(mysqli_real_escape_string($conn,$data["stok_barang"])));

    $query = "INSERT INTO `produk` (`id`, `id_barcode`, `gambar`, `nama_produk`, `harga`, `berat`, 
    `stok_barang`) 
    VALUES (NULL, '$id_barcode', '$gambar', '$nama_produk', '$harga', '$berat', '$stok_barang')";

    return mysqli_query($conn, $query);
    //  mysqli_affected_rows($conn);

}

//Upload Gambar Produk
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    //cek
    if ($error === 4) {
        echo "<script> 
                alert('pilih gambar dulu');
        </script>";
        return false;
    }
    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('bukan gambar ini');

        </script>
        ";
        return false;
    }
    //cek jika ukuran nya terlalu besar
    if ($ukuranFile > 100000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');

    </script>
    ";
    }
    //upload
    move_uploaded_file($tmpName, 'upload/' . $namaFile);

    return $namaFile;
}

function ubah($data)
{

    global $conn;
    $id = $data['id'];
    $id_barcode = (htmlspecialchars(mysqli_real_escape_string($conn,$data["id_barcode"])));
    $gambar = (htmlspecialchars(mysqli_real_escape_string($conn,$data["gambar"])));
    //upload gambar
    //  $gambar = upload();
    // if (!$gambar) {
    //       return false;
    // }
    $nama_produk = (htmlspecialchars(mysqli_real_escape_string($conn,$data["nama_produk"])));
    $harga = (htmlspecialchars(mysqli_real_escape_string($conn,$data["harga"])));
    $berat = (htmlspecialchars(mysqli_real_escape_string($conn,$data["berat"])));
    $stok_barang = (htmlspecialchars(mysqli_real_escape_string($conn,$data["stok_barang"])));
     
    $query = "UPDATE `produk` SET `id_barcode` = '$id_barcode',`gambar` = '$gambar',
     `nama_produk` = '$nama_produk',
     `harga` = '$harga',
     `berat` = '$berat',
     `stok_barang` = '$stok_barang'
     WHERE `produk`.`id` = $id";
    return mysqli_query($conn, $query);



}

function hapus($id){

    global $conn;


    $delete ="DELETE FROM `produk` WHERE `produk`.`id` = $id";
    return mysqli_query($conn, $delete);

}

?>