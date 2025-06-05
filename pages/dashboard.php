<?php
include "header.php";
  include "../koneksi.php";

$current_page = basename($_SERVER['PHP_SELF']);

//  artinya var $saat_ini akan menyimpan nama file php yang seang di buka,misalnya:dashbord_adminphp

// $_SERVER['php_srver'] alan berisi/koneksi.php/pages/dasboard.php

?>


<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="card">
            <span class="mask bg-primary opacity-10 border-radius-lg"></span>
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-8 text-start">
                  <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                    <i class="ni ni-circle-08 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                  <h5 class="text-white font-weight-bolder mb-0 mt-3">
                    1600
                  </h5>
                  <span class="text-white text-sm">Users Active</span>
                </div>
                <div class="col-4">
                  <div class="dropdown text-end mb-6">
                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-h text-white"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                  <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+55%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
          <div class="card">
            <span class="mask bg-dark opacity-10 border-radius-lg"></span>
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-8 text-start">
                  <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                    <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                  <h5 class="text-white font-weight-bolder mb-0 mt-3">
                    357
                  </h5>
                  <span class="text-white text-sm">Click Events</span>
                </div>
                <div class="col-4">
                  <div class="dropstart text-end mb-6">
                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-h text-white"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                  <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+124%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="card">
            <span class="mask bg-dark opacity-10 border-radius-lg"></span>
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-8 text-start">
                  <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                    <i class="ni ni-cart text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                  <h5 class="text-white font-weight-bolder mb-0 mt-3">
                    2300
                  </h5>
                  <span class="text-white text-sm">Purchases</span>
                </div>
                <div class="col-4">
                  <div class="dropdown text-end mb-6">
                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-h text-white"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                  <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+15%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
          <div class="card">
            <span class="mask bg-dark opacity-10 border-radius-lg"></span>
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-8 text-start">
                  <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                    <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                  <h5 class="text-white font-weight-bolder mb-0 mt-3">
                    940
                  </h5>
                  <span class="text-white text-sm">Likes</span>
                </div>
                <div class="col-4">
                  <div class="dropstart text-end mb-6">
                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-h text-white"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                  <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+90%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
      <div class="card shadow h-100">
        <div class="card-header pb-0 p-3">
          <h6 class="mb-0">Top Sekolah</h6>
        </div>
        <?php

        $no = 1;
        $sql = "SELECT tbl_cis.nama, tbl_cis.kelas, SUM(tbl_kategori.poin) AS total
        FROM tbl_pelanggaran_siswa
        JOIN tbl_cis ON tbl_pelanggaran_siswa.id_siswa = tbl_cis.id_siswa
        JOIN tbl_kategori ON tbl_pelanggaran_siswa.id_kategori = tbl_kategori.id_kategori
        GROUP BY tbl_cis.kelas
        ORDER BY total DESC
        LIMIT 2";

        $hasil = mysqli_query($koneksi, $sql);
        ?>

        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>

                          <th class="align-middle text-center">Kelas</th>
                          <th class="text-center">Total Poin</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($hasil as $data): ?>
                          <tr>
                            <td class="align-middle text-center">
                              <?= $no++ ?>
                            </td>

                            <td class="align-middle text-center">
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
      </div>
    </div>
  </div>
</div>
</div>

<?php

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