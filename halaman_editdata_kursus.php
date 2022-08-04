<?php include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama_kursus'];
$ket = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "UPDATE data_kursus SET nama_kursus='$nama',keterangan='$ket',jadwal_mulai='$jadwal_mulai',jadwal_selesai='$jadwal_selesai' WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'data_kursus.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'data_kursus.php'
  </script>
<?php } ?>