<?php
include "header.php";
include "../koneksi.php";

//sql
$sql_siswa = "SELECT * FROM tbl_cis";
$data_siswa = mysqli_query($koneksi, $sql_siswa);
$berhasil = false;
$sql_kategori = "SELECT * FROM tbl_kategori";
$data_kategori = mysqli_query($koneksi, $sql_kategori);

if (isset($_POST['simpan'])) {
  $id_siswa = $_POST['id_siswa'];
  $id_kategory_array = $_POST['id_kategori'];
  $berhasil = false;

  foreach ($id_kategory_array as $id_kat) {
    $query = "INSERT INTO tbl_pelanggaran_siswa(id_siswa, id_kategori) VALUES ('$id_siswa', '$id_kat')";
    if (mysqli_query($koneksi, $query)) {
      $berhasil = true;
    }
  }
  // Kalau berhasil, set flag redirect (biar alert ditampilkan di HTML)
  if ($berhasil) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Pelanggaran berhasil dicatat!',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'catat.php';
                });
            });
        </script>";
  }
  // <!-- Load SweetAlert2 -->



}

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<html>

<head>
  <title>Catat Pelanggaran Siswa</title>
</head>

<body class="p-4">
  <h1>Catat Pelanggaran Siswa</h1>

  <form method="POST">
    <p><strong>Siswa</strong></p>
    <select class="form-control form-control-lg mb-3" name="id_siswa" required>
      <option value="">--Pilih Siswa--</option>
      <?php foreach ($data_siswa as $siswa): ?>
        <option value="<?= $siswa['id_siswa'] ?>">
          <?= $siswa['nama'] ?>   <?= $siswa['kelas'] ?>
        </option>
      <?php endforeach; ?>
    </select>

    <p><strong>Jenis Pelanggaran</strong></p>
    <?php foreach ($data_kategori as $kategori): ?>
      <div class="form-check mb-1">
        <input class="form-check-input" type="checkbox" name="id_kategori[]" value="<?= $kategori['id_kategori'] ?>"
          id="kategori<?= $kategori['id_kategori'] ?>">
        <label class="form-check-label" for="kategori<?= $kategori['id_kategori'] ?>">
          <?= $kategori['nama_pelangaran'] ?> (<?= $kategori['poin'] ?> poin)
        </label>
      </div>
    <?php endforeach; ?>

    <button type="submit" name="simpan" class="btn btn-primary mt-3">Simpan</button>
    <button type="reset" class="btn btn-secondary mt-3">Reset</button>
  </form>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>