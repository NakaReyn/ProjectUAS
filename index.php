<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Siakad Online | Kalender Akademik</title>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Kalender Akademik 2024/2025</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <p>Berikut adalah kalender akademik untuk tahun ajaran 2024/2025:</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1 September 2024</td>
                                        <td>
                                            <i class="fas fa-calendar-check"></i> Mulai Semester Gasal<br>
                                            <small>Pengumuman jadwal kuliah dan pembagian kelas.</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15 Oktober 2024</td>
                                        <td>
                                            <i class="fas fa-pencil-alt"></i> UTS Semester Gasal<br>
                                            <small>Ujian Tengah Semester untuk semua mata kuliah.</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20 Desember 2024</td>
                                        <td>
                                            <i class="fas fa-calendar-times"></i> Akhir Semester Gasal<br>
                                            <small>Penutupan semester dan pengumpulan tugas akhir.</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10 Januari 2025</td>
                                        <td>
                                            <i class="fas fa-book-open"></i> Mulai Semester Genap<br>
                                            <small>Pengumuman jadwal kuliah semester genap.</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15 Maret 2025</td>
                                        <td>
                                            <i class="fas fa-pencil-alt"></i> UTS Semester Genap<br>
                                            <small>Ujian Tengah Semester untuk semua mata kuliah.</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30 Mei 2025</td>
                                        <td>
                                            <i class="fas fa-calendar-check"></i> Akhir Semester Genap<br>
                                            <small>Penutupan semester dan pengumpulan tugas akhir.</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5 Juni 2025</td>
                                        <td>
                                            <i class="fas fa-graduation-cap"></i> Wisuda<br>
                                            <small>Upacara wisuda untuk lulusan tahun ini.</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->
            </div>
            <!-- End Content Wrapper -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>
</body>

</html>