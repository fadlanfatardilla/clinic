<?php
// header("refresh:5");
include_once('../header_user.php');
require_once('../config/db.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4">Antrian Pasien</h1>
                <h4 class="mb-4">
                    <small><strong>Cek Antrian Pasien</strong></small>
                </h4>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama" class="h5">Nama Pasien</label>
                        <input type="text" name="nama" id="nama_pasien" class="form-control form-control-lg flex-grow-1" required autofocus>
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <input type="submit" name="cek" value="Cek Antrian" class="btn btn-primary btn-lg">
                        <a href="add.php" class="btn btn-warning btn-lg ml-auto"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
                    </div>
                    <!-- PHP code for displaying notifications -->
                    <?php
                    if (isset($_POST['cek'])) {
                        // Mengambil nilai dari form
                        $nama = $_POST['nama'];

                        // Pastikan koneksi database sudah terbuat (gantikan 'db.php' sesuai dengan konfigurasi Anda)
                        require_once('../config/db.php');

                        // Pastikan variabel $conn terhubung dengan database
                        if ($conn) {
                            $query = "SELECT id, nama_pasien FROM tb_antrian WHERE nama_pasien = '$nama'";
                            $result = mysqli_query($conn, $query);

                            // Pastikan query berhasil dijalankan
                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    echo '<div class="card text-white bg-success mb-4" style="max-width: 24rem;">
                                              <div class="card-header h5">Notifikasi</div>
                                              <div class="card-body">
                                                  <h4 class="card-title">Nama anda: ' . $row['nama_pasien'] . '</h4>
                                                  <h4 class="card-title">Nomor Antrian Anda: ' . $row['id'] . '</h4>
                                              </div>
                                          </div>'; // Menggunakan $row['id']
                                } else {
                                    echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                              <div class="card-header">Notifikasi</div>
                                              <div class="card-body">
                                                  <p class="card-text">Anda belum mendaftar atau nama pasien tidak ditemukan.</p>
                                              </div>
                                          </div>';
                                }
                            } else {
                                echo '<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                          <div class="card-header">Notifikasi</div>
                                          <div class="card-body">
                                              <p class="card-text">Query gagal dijalankan: ' . mysqli_error($conn) . '</p>
                                          </div>
                                      </div>';
                            }
                        } else {
                            echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                      <div class="card-header">Notifikasi</div>
                                      <div class="card-body">
                                          <p class="card-text">Koneksi ke database gagal.</p>
                                      </div>
                                  </div>';
                        }
                    }

                    ?>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include_once('../header_user.php'); ?>