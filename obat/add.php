<?php

include_once('../header.php');



?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4 text-center">Obat</h1>
                <h4 class="mb-4 text-center">
                    <small><strong class="h3">Tambah Data Obat</strong></small>
                    <div class="text-right">
                        <a href="data.php" class="btn btn-warning btn-xs btn-lg"><i class="glyphicon glyphicon-chevron-left"></i>
                            Kembali</a>
                    </div>
                </h4>
                <div class="card">
                    <div class="card-header bg-info text-white display-6 text-center">
                        Tambah Obat
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="nama" class="h5">Nama Obat</label>
                                <input type="text" name="nama" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="ket" class="h5">Keterangan</label>
                                <textarea name="ket" id="ket" class="form-control" required></textarea>
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