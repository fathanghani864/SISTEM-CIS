<?php
include "header.php";
include "../koneksi.php";

$current_page = basename($_SERVER['PHP_SELF']);

?>


<div class="container-fluid py-4">
    <li class="nav-item d-flex align-items-center">
        <a type="button" href="catat.php" class="btn btn-outline-primary btn-sm mb-3 me-3" target="_blank">Tambah
            siswa</a>
    </li>


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">

                    <h6>Data Siswa</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity- text-center">
                                        No</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        kelas</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        tanggal</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        nama pelanggaran</th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        poin</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi</th>

                                </tr>
                            </thead>

                            <?php
                            $no = 1;
                            //sql
                            $sql = "SELECT *
                                FROM tbl_pelanggaran_siswa
                                JOIN tbl_cis ON tbl_pelanggaran_siswa.id_siswa = tbl_cis.id_siswa
                                JOIN tbl_kategori ON tbl_pelanggaran_siswa.id_kategori = tbl_kategori.id_kategori
                                ORDER BY nama, kelas, tanggal, nama_pelangaran, poin DESC";

                            //eksekusi
                            $hasil = mysqli_query($koneksi, $sql);

                            //tampilkan dgn perulangan
                            foreach ($hasil as $data) {
                                ?>

                                <tbody>
                                    <tr>
                                        <td class="align-middle text-center ">
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $data['nama'] ?>
                                        </td>
                                        <td>
                                            <?= $data['kelas'] ?>
                                        </td>
                                        <td>
                                            <?= $data['tanggal'] ?>
                                        </td>
                                        <td class="align-middle text-center ">
                                            <?= $data['nama_pelangaran'] ?>
                                        </td>
                                        <td class="align-middle text-center ">
                                            <?= $data['poin'] ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a type="button"
                                                href="pelaggaransiswa.php?id_kategori=<?= $data['id_kategori'] ?>"
                                                class="btn bg-gradient-success">lihat detail</a>
                                            <button type="button" class="btn bg-gradient-danger">Hapus</button>
                                        </td>


                                    </tr>
                                    <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        Â©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</main>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-primary active" data-color="primary"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger"
                        onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn btn-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                    onclick="sidebarType(this)">Transparent</button>
                <button class="btn btn-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                    onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-3">
                <h6 class="mb-0">Navbar Fixed</h6>
            </div>
            <div class="form-check form-switch ps-0">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                    onclick="navbarFixed(this)">
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free
                Download</a>
            <a class="btn btn-outline-dark w-100"
                href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>

<script>
    // Tunggu hingga seluruh konten halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', function () {

        // Ambil elemen pertama yang memiliki kelas 'btn-hapus' (tombol hapus pertama)
        const hapusButton = document.querySelector('.btn-hapus');

        // Pastikan tombol ditemukan di halaman
        if (hapusButton) {

            // Tambahkan event listener ketika tombol diklik
            hapusButton.addEventListener('click', function (e) {

                // Cegah aksi default dari tombol (misalnya jika tombol adalah link, jangan diarahkan dulu)
                e.preventDefault();

                // Ambil nilai ID siswa dari atribut data-id tombol
                const id = this.getAttribute('data-id');

                // Ambil nama siswa dari atribut data-nama tombol
                const nama = this.getAttribute('data-nama');

                // Tampilkan SweetAlert untuk konfirmasi penghapusan
                swal({
                    title: "Yakin ingin menghapus?", // Judul alert
                    text: `Data siswa dengan nama "${nama}" akan dihapus!`, // Teks yang menampilkan nama siswa yang akan dihapus
                    icon: "warning", // Ikon peringatan
                    buttons: ["Batal", "Hapus"], // Tombol untuk membatalkan atau menghapus
                    dangerMode: true, // Menandakan bahwa ini adalah aksi yang berbahaya (menghapus data)
                }).then((willDelete) => {
                    // Jika pengguna memilih "Hapus"
                    if (willDelete) {
                        // Arahkan pengguna ke halaman hapus.php dengan membawa ID siswa sebagai parameter
                        window.location.href = `hapus.php?id_siswa=${id}`;
                    }
                });
            });
        }
    });
</script>





</body>

</html>