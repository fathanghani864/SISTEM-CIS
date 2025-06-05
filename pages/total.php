<?php
include "header.php";
include "../koneksi.php";

$no = 1;
$sql = "SELECT tbl_cis.nama, tbl_cis.kelas, SUM(tbl_kategori.poin) AS total
        FROM tbl_pelanggaran_siswa
        JOIN tbl_cis ON tbl_pelanggaran_siswa.id_siswa = tbl_cis.id_siswa
        JOIN tbl_kategori ON tbl_pelanggaran_siswa.id_kategori = tbl_kategori.id_kategori
        GROUP BY tbl_cis.nama, tbl_cis.kelas
        ORDER BY total DESC
        LIMIT 2";

$hasil = mysqli_query($koneksi, $sql);
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="mb-0">Perolehan Poin Kelas X </h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th class="text-center">Total Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hasil as $data): ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $data['nama'] ?>
                                        </td>
                                        <td>
                                            <?= $data['kelas'] ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <?= $data['total'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>