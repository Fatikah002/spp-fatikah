<?php
session_start();
if (empty($_SESSION['id_petugas'])){
	echo "<script>
	alert ('Maaf Anda Belum Login');
	window.location.assign('../index2.php');
	</script>";
}
if ($_SESSION['level']!='petugas') {
	echo "<script>
	alert ('Maaf Anda Bukan Sesi Admin');
	window.location.assign('../index2.php');
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 ">
	<title>Petugas - Aplikasi Pembayaran SPP</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body style="background-color: #FFEFD5">
	<div class="container mt-5" >
		<h3>Aplikasi Pembayaran SPP.</h3>
		<div class="alert alert-danger">
			Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> Aplikasi Pembayaran SPP
		</div>
		<div class="col-md-10">
        <a href="petugas.php"class="btn btn-outline-danger"> Petugas</a>
		<a href="petugas.php?url=pembayaran"class="btn btn-outline-danger"> Pembayaran </a>
		<a href="petugas.php?url=logout"class="btn btn-outline-danger"> Logout </a>

     </div>
		<div class="card mt-3 "> 
			<div class="card-body">
				<!-- Ini isi web kita-->
				<?php
				$file = @$_GET['url'];
				if(empty($file)){
					echo "<h4>Selamat Datang di Halaman Petugas</h4>";
					echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi disekolah";
				}
				else{
					include $file.'.php';
				}
				?>
			</div>
		</div>
	</div>


<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>