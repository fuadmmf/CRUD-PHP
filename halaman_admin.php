<!DOCTYPE html>
<html>
<head>
	<title>MyCourse</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	
	<?php include 'header.php'; ?>
	<!-- content -->
	<div class="container mt-5">
  		<?php include 'halaman_utama.php'; ?>
	</div>
	<!-- ./content -->
	<?php include 'footer.php'; ?>

	

	
</body>
</html>