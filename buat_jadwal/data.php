<?php

include_once('../header_user.php');



?>

<div class="box">
    <h1>Buat Jadwal</h1>
    <h4>
        <small>Buat Jadwal Berobat</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>
                Kembali</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form method="post" action="">
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" id="umur" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="jk" id="jk" value="L" required> Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="P" required> Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu Jadwal</label>
                    <input type="datetime-local" name="waktu" id="waktu" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input type="submit" name="add" value="Daftar Antrian" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../header_user.php'); ?>