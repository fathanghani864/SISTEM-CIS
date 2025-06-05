<?php
include "../koneksi.php";

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}



// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $id_kategori = $_POST['id_kategori'];

    // Simpan data pelanggaran
    $query = "INSERT INTO tbl_pelanggaran_siswa (nis, id_kategori, tanggal)
              VALUES ('$nis', '$id_kategori', NOW())";

    if (mysqli_query($conn, $query)) {
        echo "<p style='color: green;'>✅ Data pelanggaran berhasil disimpan.</p>";
    } else {
        echo "<p style='color: red;'>❌ Gagal menyimpan data: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!-- Form Input Pelanggaran -->
<h2>Input Pelanggaran Siswa</h2>
<form action="" method="post">
    <label for="nis">NIS Siswa:</label><br>
    <input type="text" name="nis" required><br><br>

    <label for="id_kategori">Pelanggaran:</label><br>
    <select name="id_kategori" required>
        <option value="">-- Pilih Pelanggaran --</option>
        <?php
        // Ambil data kategori pelanggaran
        $kategori = mysqli_query($conn, "SELECT * FROM tbl_kategori ORDER BY id_kategori ASC");
        while ($row = mysqli_fetch_assoc($kategori)) {
            echo "<option value='{$row['id_kategori']}'>{$row['nama_pelanggaran']} ({$row['poin']} poin)</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" value="Simpan">
</form>
