<?php include_once('../header.php'); ?>

<?php include_once('tampil_data.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Informasi Kesehatan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4" style="padding-top: 30px">
            <h1 class="h3 mb-0 text-gray-800" style="font-size: 30px; font-weight: 800">Dashboard</h1>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow-lg h-100 py-3 mb-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-primary text-uppercase mb-2">
                                    Data Pasien
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pasien; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-4x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right mt-3">
                                <a href="../pasien/data.php" class="btn btn-primary btn-lg">Lihat Data Pasien</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card yang baru -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow-lg h-100 py-3 mb-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-success text-uppercase mb-2">
                                    Data Dokter
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_dokter; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-doctor fa-4x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right mt-3">
                                <a href="../dokter/data.php" class="btn btn-success btn-lg">Lihat Data Dokter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow-lg h-100 py-3 mb-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-warning text-uppercase mb-2">
                                    Data Poliklinik
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_poli; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-hospital-user fa-4x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right mt-3">
                                <a href="../poliklinik/data.php" class="btn btn-warning btn-lg">Lihat Data Poli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow-lg h-100 py-3 mt-4 mb-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-danger text-uppercase mb-2">
                                    Data Obat
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_obat; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-capsules fa-4x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right mt-3">
                                <a href="../obat/data.php" class="btn btn-danger btn-lg">Lihat Data Obat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow-lg h-100 py-3 mt-4 mb-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-info text-uppercase mb-2">
                                    Data Antrian
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_antrian; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right mt-3">
                                <a href="../antrian_admin/data.php" class="btn btn-info btn-lg">Lihat Data Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-dark shadow-lg h-100 py-3 mt-4 mb-3">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-lg font-weight-bold text-dark text-uppercase mb-2">
                                    Data Rekam Medis
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_rm; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-user fa-4x text-gray-300"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right mt-3">
                                <a href="../rekamMedis/data.php" class="btn btn-dark btn-lg">Lihat Data Rekam
                                    Medis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>



<?php include_once('../header.php'); ?>