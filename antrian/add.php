<?php include_once('../header_user.php');
if (isset($_GET['success']) && $_GET['success'] === 'true') {
    echo '<script>alert("Berhasil Mendaftar")</script>';
}
?>

<div class="box">
    <h1 class="mb-3">Antrian Pasien</h1>
    <h2>
        <small>Buat Antrian Pasien</small>
        <div class="pull-right">
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Toggle Menu</a>
        </div>
    </h2>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form method="post" action="proses.php">
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input type="submit" name="add" value="Daftar Antrian" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="pull-right">
            <a href="data.php" class="btn btn-success">Cek Antrian</a>
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