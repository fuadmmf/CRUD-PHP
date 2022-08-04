<?php include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama_kursus'];
$ket = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];


$query = "INSERT INTO daftar_kursus(nama_kursus, keterangan, jadwal_mulai, jadwal_selesai)VALUES('$nama','$ket','$jadwal_mulai','$jadwal_selesai')";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'daftar_kursus.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'daftar_kursus.php'
  </script>
<?php } ?>