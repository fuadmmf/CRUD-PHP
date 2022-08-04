<?php
include 'config.php';

$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = "UPDATE mahasiswa SET npm='$npm',nama='$nama', kelas='$kelas', alamat='$alamat',nohp='$nohp',email='$email',waktu='$waktu' WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php } ?>