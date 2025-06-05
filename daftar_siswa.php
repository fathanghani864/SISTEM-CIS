<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Siswa</title>
</head>

<body>
    <h2>Daftar Nama Siswa</h2>
    <a href="tambah_siswa.php">+ Tambah Siswa</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>

        <?php
        // include file koneksi
        include "koneksi.php";

        $no = 1;
        $sql = "SELECT * FROM tbl_cis ORDER BY nama DESC";
        $hasil = mysqli_query($koneksi, $sql);

        // cek apakah query berhasil
        if ($hasil && mysqli_num_rows($hasil) > 0) {
            while ($hsl = mysqli_fetch_assoc($hasil)) {
                echo "<tr>
                        <td>" . $no++ . "</td>
                        <td>" . $hsl['nis'] . "</td>
                        <td>" . $hsl['nama'] . "</td>
                        <td>" . $hsl['kelas'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>
