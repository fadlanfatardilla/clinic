<?php

include_once('../header.php');

?>

<div class="box">
    <h1>Pasien</h1>
    <h4>
        <small>Edit Data Pasien</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>
                Kembali</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <?php

            $id = @$_GET['id'];
            $sql_pasien = mysqli_query($conn, "SELECT * FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($conn));
            $data = mysqli_fetch_array($sql_pasien);

            ?>


            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" name="nama_pasien" id="nama_pasien" value="<?= $data['nama_pasien']; ?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="number" name="no_telp" value="<?= $data['no_telp']; ?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="jk" id="jk" value="L" <?= ($data['jenis_kelamin'] == 'L') ? 'selected' : '' ?> required> Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="P" <?= ($data['jenis_kelamin'] == 'P') ? 'selected' : '' ?> required> Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required><?= $data['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu Jadwal</label>
                    <input type="datetime-local" name="jadwal" id="jadwal" value="<?= $data['jadwal']; ?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../header.php'); ?>