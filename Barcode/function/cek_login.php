<?php 
// mengaktifkan session pada php
session_start();
require '../core/core.php';

$conn;

// menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = password_hash($password, PASSWORD_DEFAULT);
// $level    = $_GET['level'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from data_pelanggan where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	//VERIFY
	if(password_verify($_POST['password'],$data['password'])){

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = "admin";

        
        
		// alihkan ke halaman dashboard admin
        header("location: ../index.php");
        // echo "Wellcome  $username,";

	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		// buat session login dan username
        // $_SESSION['username'] = $username;
        $_SESSION['username'] = $data['username'];
        
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pegawai
        header("location:../user/user.php");
        

	// cek jika user login sebagai pengurus
	}else{

		
		echo "
		<script language='javascript'>alert('Gagal Login');window.history.back();</script>
		
		";
	}

}else{
	echo"
	<script language='javascript'>alert('Gagal Login');window.history.back();</script>
	
	";
}
}else{
	echo "
	<script>
	<script language='javascript'>alert('Gagal Login');window.history.back();</script>
	
	// alert('Gagal Login');window.history.back();	

	</script>
	
    
	";

}

?>

	<!-- // <script>
	// swal('Hello world!');
	// window.history.back();
	<script language='javascript'>alert('ts');window.history.back();</script>
	
	// </script> -->

