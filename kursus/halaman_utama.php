<?php 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<div class="card im-box">
  <h5 class="card-header">Selamat Datang</h5>
  <div class="card-body">
    <p class="card-text"><p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    
  </div>
</div>


	

	