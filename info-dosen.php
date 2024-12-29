<?php
// Get the dosen parameter from the URL
$dosen = isset($_GET['dosen']) ? $_GET['dosen'] : 'A'; // Default to Dosen A if not set

// Define the dosen profiles with detailed information
$dosenProfiles = [
    'A' => [
        'name' => 'Dosen A',
        'nidn' => '1234567890',
        'place_of_birth' => 'Jakarta',
        'date_of_birth' => '1980-01-01',
        'interests' => 'Pengembangan Perangkat Lunak',
        'experience' => '10 tahun di bidang pengembangan perangkat lunak.',
        'status' => 'Aktif',
        'homebase' => 'Teknik Informatika',
        'education' => [
            'sd' => 'SD Negeri Jakarta',
            'smp' => 'SMP Negeri Jakarta',
            'sma' => 'SMA Negeri Jakarta',
            's1' => 'S1 Teknik Informatika',
            's2' => 'S2 Teknik Informatika',
        ],
        'description' => 'Dosen A adalah dosen aktif dengan pengalaman lebih dari 10 tahun di bidang pengembangan perangkat lunak.',
        'photo' => 'images/dosen/dosen_a.png'
    ],
    'B' => [
        'name' => 'Dosen B',
        'nidn' => '0987654321',
        'place_of_birth' => 'Bandung',
        'date_of_birth' => '1985-02-02',
        'interests' => 'Sistem Informasi',
        'experience' => '5 tahun di bidang penelitian.',
        'status' => 'Non-Aktif',
        'homebase' => 'Sistem Informasi',
        'education' => [
            'sd' => 'SD Negeri Bandung',
            'smp' => 'SMP Negeri Bandung',
            'sma' => 'SMA Negeri Bandung',
            's1' => 'S1 Sistem Informasi',
            's2' => 'S2 Sistem Informasi',
        ],
        'description' => 'Dosen B adalah seorang peneliti di bidang Sistem Informasi yang telah menerbitkan banyak karya ilmiah.',
        'photo' => 'images/dosen/dosen_b.png'
    ],
    'C' => [
        'name' => 'Dosen C',
        'nidn' => '1357924680',
        'place_of_birth' => 'Yogyakarta',
        'date_of_birth' => '1990-03-03',
        'interests' => 'Kecerdasan Buatan',
        'experience' => '3 tahun di bidang kecerdasan buatan.',
        'status' => 'Aktif',
        'homebase' => 'Teknik Komputer',
        'education' => [
            'sd' => 'SD Negeri Yogyakarta',
            'smp' => 'SMP Negeri Yogyakarta',
            'sma' => 'SMA Negeri Yogyakarta',
            's1' => 'S1 Teknik Komputer',
            's2' => 'S2 Kecerdasan Buatan',
        ],
        'description' => 'Dosen C memiliki ketertarikan dalam kecerdasan buatan dan aktif dalam konferensi internasional.',
        'photo' => 'images/dosen/dosen_c.png'
    ],
    'D' => [
        'name' => 'Dosen D',
        'nidn' => '2468013579',
        'place_of_birth' => 'Semarang',
        'date_of_birth' => '1982-04-04',
        'interests' => 'Jaringan Komputer',
        'experience' => '8 tahun di bidang jaringan komputer.',
        'status' => 'Aktif',
        'homebase' => 'Teknik Informatika',
        'education' => [
            'sd' => 'SD Negeri Semarang',
            'smp' => 'SMP Negeri Semarang',
            'sma' => 'SMA Negeri Semarang',
            's1' => 'S1 Teknik Komputer',
            's2' => 'S2 Jaringan Komputer',
        ],
        'description' => 'Dosen D adalah ahli jaringan komputer dengan banyak pengalaman di industri.',
        'photo' => 'images/dosen/dosen_d.png'
    ],
    'E' => [
        'name' => 'Dosen E',
        'nidn' => '9876543210',
        'place_of_birth' => 'Medan',
        'date_of_birth' => '1978-05-05',
        'interests' => 'Keamanan Siber',
        'experience' => '12 tahun di bidang keamanan siber.',
        'status' => 'Cuti',
        'homebase' => 'Teknologi Informasi',
        'education' => [
            'sd' => 'SD Negeri Medan',
            'smp' => 'SMP Negeri Medan',
            'sma' => 'SMA Negeri Medan',
            's1' => 'S1 Teknologi Informasi',
            's2' => 'S2 Keamanan Siber',
        ],
        'description' => 'Dosen E saat ini dalam masa cuti tetapi memiliki kontribusi besar dalam penelitian keamanan siber.',
        'photo' => 'images/dosen/dosen_e.png'
    ],
    'F' => [
        'name' => 'Dosen F',
        'nidn' => '1357924681',
        'place_of_birth' => 'Surabaya',
        'date_of_birth' => '1988-06-06',
        'interests' => 'Pengembangan Web',
        'experience' => '7 tahun di bidang pengembangan web.',
        'status' => 'Aktif',
        'homebase' => 'Rekayasa Perangkat Lunak',
        'education' => [
            'sd' => 'SD Negeri Surabaya',
            'smp' => 'SMP Negeri Surabaya',
            'sma' => 'SMA Negeri Surabaya',
            's1' => 'S1 Rekayasa Perangkat Lunak',
            's2' => 'S2 Teknologi Informasi',
        ],
        'description' => 'Dosen F adalah seorang ahli dalam pengembangan web dengan banyak publikasi.',
        'photo' => 'images/dosen/dosen_f.png'
    ],
    'G' => [
        'name' => 'Dosen G',
        'nidn' => '2468013578',
        'place_of_birth' => 'Bali',
        'date_of_birth' => '1992-07-07',
        'interests' => 'Data Science',
        'experience' => '4 tahun di bidang data science.',
        'status' => 'Aktif',
        'homebase' => 'Sistem Informasi',
        'education' => [
            'sd' => 'SD Negeri Bali',
            'smp' => 'SMP Negeri Bali',
            'sma' => 'SMA Negeri Bali',
            's1' => 'S1 Sistem Informasi',
            's2' => 'S2 Data Science',
        ],
        'description' => 'Dosen G aktif dalam proyek-proyek data science dan analisis data.',
        'photo' => 'images/dosen/dosen_g.png'
    ],
    'H' => [
        'name' => 'Dosen H',
        'nidn' => '9876543211',
        'place_of_birth' => 'Jakarta',
        'date_of_birth' => '1989-08-08',
        'interests' => 'Kecerdasan Buatan',
        'experience' => '6 tahun di bidang kecerdasan buatan.',
        'status' => 'Aktif',
        'homebase' => 'Teknik Informatika',
        'education' => [
            'sd' => 'SD Negeri Jakarta',
            'smp' => 'SMP Negeri Jakarta',
            'sma' => 'SMA Negeri Jakarta',
            's1' => 'S1 Teknik Komputer',
            's2' => 'S2 Kecerdasan Buatan',
        ],
        'description' => 'Dosen H memiliki minat besar dalam penelitian kecerdasan buatan.',
        'photo' => 'images/dosen/dosen_h.png'
    ],
    'I' => [
        'name' => 'Dosen I',
        'nidn' => '1357924682',
        'place_of_birth' => 'Bandung',
        'date_of_birth' => '1991-09-09',
        'interests' => 'Sistem Informasi',
        'experience' => '2 tahun di bidang sistem informasi.',
        'status' => 'Aktif',
        'homebase' => 'Sistem Informasi',
        'education' => [
            'sd' => 'SD Negeri Bandung',
            'smp' => 'SMP Negeri Bandung',
            'sma' => 'SMA Negeri Bandung',
            's1' => 'S1 Sistem Informasi',
            's2' => 'S2 sedang berlangsung',
        ],
        'description' => 'Dosen I merupakan dosen muda yang aktif dalam penelitian sistem informasi.',
        'photo' => 'images/dosen/dosen_i.png'
    ],
    'J' => [
        'name' => 'Dosen J',
        'nidn' => '2468013577',
        'place_of_birth' => 'Malang',
        'date_of_birth' => '1987-10-10',
        'interests' => 'Rekayasa Perangkat Lunak',
        'experience' => '9 tahun di bidang rekayasa perangkat lunak.',
        'status' => 'Aktif',
        'homebase' => 'Rekayasa Perangkat Lunak',
        'education' => [
            'sd' => 'SD Negeri Malang',
            'smp' => 'SMP Negeri Malang',
            'sma' => 'SMA Negeri Malang',
            's1' => 'S1 Rekayasa Perangkat Lunak',
            's2' => 'S2 Rekayasa Perangkat Lunak',
        ],
        'description' => 'Dosen J adalah pakar dalam rekayasa perangkat lunak dengan banyak proyek sukses.',
        'photo' => 'images/dosen/dosen_j.png'
    ],
    'K' => [
        'name' => 'Dosen K',
        'nidn' => '9876543212',
        'place_of_birth' => 'Jakarta',
        'date_of_birth' => '1984-11-11',
        'interests' => 'Teknologi Informasi',
        'experience' => '11 tahun di bidang teknologi informasi.',
        'status' => 'Aktif',
        'homebase' => 'Teknologi Informasi',
        'education' => [
            'sd' => 'SD Negeri Jakarta',
            'smp' => 'SMP Negeri Jakarta',
            'sma' => 'SMA Negeri Jakarta',
            's1' => 'S1 Teknologi Informasi',
            's2' => 'S2 Teknologi Informasi',
        ],
        'description' => 'Dosen K memiliki pengalaman luas dalam proyek teknologi informasi.',
        'photo' => 'images/dosen/dosen_k.png'
    ],
];

// Get the selected dosen's information
$dosenInfo = $dosenProfiles[$dosen] ?? $dosenProfiles['A']; // Default to Dosen A if not found
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

    <!-- Custom fonts for this template -->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f8f9fc;
        }
        .card {
            border: 1px solid #e3e6f0;
            border-radius: 15px;
            margin-bottom: 20px; /* Space between cards */
        }
        .profile-photo-container img {
            width: 100%;
            max-width: 150px; /* Maximum width of the photo */
            height: auto; /* Keeps the aspect ratio */
            border-radius: 50%; /* Circular photo */
            border: 3px solid #4e73df; /* Border properties */
        }
        .education-list p {
            margin-bottom: 0.5rem; /* Adjust spacing between items */
        }
        .education-list {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 10px;
        }
        .card-header {
            background-color: #4e73df;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .container {
            margin-top: 20px;
        }
        .d-flex {
            display: flex;
            align-items: center; /* Center align items vertically */
        }
        .info {
            margin-left: 20px; /* Space between photo and info */
        }
        @media (max-width: 576px) {
            .profile-photo-container img {
                max-width: 100px; /* Smaller max width for mobile */
            }
            .info {
                margin-left: 10px; /* Reduce space on mobile */
            }
        }
    </style>
</head>

<body id="page-top" class="bg-light">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- Card Foto Dosen -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h5><?php echo $dosenInfo['name']; ?></h5>
                                </div>
                                <div class="card-body text-center">
                                    <div class="profile-photo-container">
                                        <img src="<?php echo $dosenInfo['photo']; ?>" alt="<?php echo $dosenInfo['name']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Informasi Dosen -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informasi Dosen</h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>NIDN:</strong> <?php echo $dosenInfo['nidn']; ?></p>
                                    <p><strong>Tempat Lahir:</strong> <?php echo $dosenInfo['place_of_birth']; ?></p>
                                    <p><strong>Tanggal Lahir:</strong> <?php echo date('d F Y', strtotime($dosenInfo['date_of_birth'])); ?></p>
                                    <p><strong>Minat:</strong> <?php echo $dosenInfo['interests']; ?></p>
                                    <p><strong>Pengalaman:</strong> <?php echo $dosenInfo['experience']; ?></p>
                                    <p><strong>Status:</strong> <?php echo $dosenInfo['status']; ?></p>
                                    <p><strong>Homebase:</strong> <?php echo $dosenInfo['homebase']; ?></p>
                                    <p><strong>Jenjang Pendidikan:</strong></p>
                                    <div class="education-list mb-3">
                                        <p><strong>SD:</strong> <?php echo $dosenInfo['education']['sd']; ?></p>
                                        <p><strong>SMP:</strong> <?php echo $dosenInfo['education']['smp']; ?></p>
                                        <p><strong>SMA:</strong> <?php echo $dosenInfo['education']['sma']; ?></p>
                                        <p><strong>S1:</strong> <?php echo $dosenInfo['education']['s1']; ?></p>
                                        <p><strong>S2:</strong> <?php echo $dosenInfo['education']['s2']; ?></p>
                                    </div>
                                    <p><strong>Keterangan:</strong> <?php echo $dosenInfo['description']; ?></p>
                                </div>
                            </div>
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

    <!-- Bootstrap core JavaScript -->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>