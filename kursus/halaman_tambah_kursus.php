<?php
include 'config.php';

$nama_kursus = $_POST['nama_kursus'];
$keterangan = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_selesai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "INSERT INTO data_kursus(nama_kursus, keterangan, jadwal_mulai, jadwal_selesai)VALUES('$nama_kursus','$keterangan','$jadwal_mulai','$jadwal_selesai')";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil ditambahkan!')
    location.href = 'data_kursus.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal ditambahkan!')
    location.href = 'data_kursus.php'
  </script>
<?php } ?>