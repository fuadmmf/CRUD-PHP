<?php include 'header.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Udah Data Mahasiswa</h5>
    <div class="card-body">
      <h5 class="card-title">Form Edit Mahasiswa</h5>

      <?php
      $id = $_GET['id'];
      $data = mysqli_query($con, "SELECT * FROM data_kursus WHERE id = $id");
      foreach ($data as $row) : ?>

        <form action="halaman_editdata_kursus.php" method="POST">
          <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
          <div class="form-group">
            <label for="">Nama Kursus</label>
            <input type="text" name="nama_kursus" class="form-control" value="<?= $row['nama_kursus'] ?>">
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $row['keterangan'] ?>">
          </div>
          <div class="form-group">
            <label for="">Jadwal Mulai</label>
            <input type="date" name="jadwal_mulai" class="form-control" value="<?= $row['jadwal_mulai'] ?>">
          </div>
          <div class="form-group">
            <label for="">Jadwal Selesai</label>
            <input type="date" name="jadwal_selesai" class="form-control" value="<?= $row['jadwal_selesai'] ?>">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-danger ">Close</button>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<!-- ./content -->
<?php include 'footer.php'; ?>