<?php
include "koneksi.php";

$berhasil = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas = $_POST['Kelas'];
    $berhasil = $_POST['berhasil'];

    $sql = "INSERT INTO tbl_cis(nis, nama, kelas) VALUES ('$nis', '$nama', '$kelas')";
    $simpan = mysqli_query($koneksi, $sql);

    if ($simpan) {
      $berhasil = "true";
    } else {
        
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <h2> from tambah data</h2>
   
    <form action="" method="post">
        <label for="">Nis</label>
        <input type="text" name="nis" required>
        <br><br>
        <label for="">nama</label>
        <input type="text" name="nama" required>
        <br><br>
        <label for="">Kelas</label>
        <input type="text" name="Kelas" required>
        <br><br>
        <button type="submit" name="berhasil">simpan</button>
    </form>

    
    <?php
    if ($berhasil):?>
    <script>   
    swal({
        title: "Good job!",
        text: "selamat data anda telah kami simpan",
        icon: "success",
        button: "mantap men",
      }).then(() => {
        window.location.href = "tambah_siswa.php";
      });
    </script>
    <?php
    endif; 
    ?>

</body>
</html>