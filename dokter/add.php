<?php

include_once('../header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4 text-center">Dokter</h1>
                <h4 class="mb-4 text-center">
                    <small><strong class="h3">Tambah Data Dokter</strong></small>
                    <div class="text-right">
                        <a href="data.php" class="btn btn-warning btn-xs btn-lg"><i
                                class="glyphicon glyphicon-chevron-left"></i>
                            Kembali</a>
                    </div>
                </h4>
                <div class="card">
                    <div class="card-header bg-info text-white display-6 text-center">
                        Tambah Dokter
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="nama" class="h5">Nama Dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" required autofocus
                                    style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="spesialis" class="h5">Spesialis</label>
                                <input type="text" name="spesialis" class="form-control" required
                                    style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="h5">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" required
                                    style="font-size: 15px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="h5">No Telepon</label>
                                <input type="number" name="no_telp" class="form-control" required
                                    style="font-size: 15px;">
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

<?php include_once('../header.php'); ?>