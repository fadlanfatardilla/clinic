<?php include_once('../header_user.php');
if (isset($_GET['success']) && $_GET['success'] === 'true') {
    echo '<script>alert("Berhasil Mendaftar")</script>';
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4">Antrian Pasien</h1>
                <h4 class="mb-4">
                    <small><strong class="h3">Buat Daftar Antrian</strong></small>
                </h4>
                <div class="text-right">
                    <!-- Tambahkan div untuk mengatur posisi ke kanan -->
                    <a href="#menu-toggle" class="btn btn-warning btn-lg mb-4" id="menu-toggle">Toggle Menu</a>
                </div>
                <div class="card">
                    <div class="card-header bg-info text-white display-6 text-center">
                        <!-- Di sini, saya tambahkan kelas text-center -->
                        Buat Antrian
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses.php">
                            <div class="form-group">
                                <label for="nama" class="h5">Nama Pasien</label>
                                <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" required
                                    autofocus style="font-size: 15px;">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="add" value="Daftar Antrian"
                                    class="btn btn-primary btn-lg bg-gradient">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-left">
                    <a href="data.php" class="btn btn-success btn-lg mt-4 bg-gradient">Cek Antrian</a>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>


<?php include_once('../header_user.php'); ?>