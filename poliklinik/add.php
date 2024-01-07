<?php

include_once('../header.php');



?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4 text-center">Poliklinik</h1>
                <h4 class="mb-4 text-center">
                    <small><strong class="h3">Tambah Data Poli</strong></small>
                    <div class="text-right">
                        <a href="data.php" class="btn btn-warning btn-xs btn-lg"><i class="glyphicon glyphicon-chevron-left"></i>
                            Kembali</a>
                    </div>
                </h4>
                <div class="card">
                    <div class="card-header bg-info text-white display-6 text-center">
                        Tambah Poli
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="nama" class="h5">Nama Poliklinik</label>
                                <input type="text" name="nama_poli" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="ket" class="h5">Gedung</label>
                                <textarea name="gedung" id="gedung" class="form-control" required></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" name="add" value="Simpan" class="btn btn-success btn-lg">
                            </div>
                        </form>
                    </div>
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

<?php include_once('../header.php'); ?>