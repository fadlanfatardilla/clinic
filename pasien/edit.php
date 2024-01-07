<?php

include_once('../header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4 text-center">Pasien</h1>
                <h4 class="mb-4 text-center">
                    <small><strong class="h3">Edit Data Pasien</strong></small>
                    <div class="text-right">
                        <a href="data.php" class="btn btn-warning btn-xs btn-lg"><i class="glyphicon glyphicon-chevron-left"></i>
                            Kembali</a>
                    </div>
                </h4>
                <div class="card">
                    <div class="card-header bg-info text-white display-6 text-center">
                        Edit Pasien
                    </div>
                    <div class="card-body">

                        <?php

                        $id = @$_GET['id'];
                        $sql_pasien = mysqli_query($conn, "SELECT * FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($conn));
                        $data = mysqli_fetch_array($sql_pasien);

                        ?>
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="nama" class="h5">Nama Pasien</label>
                                <input type="hidden" name="id" value="<?= $data['id_pasien']; ?>">
                                <input type="text" name="nama_pasien" id="nama_pasien" value="<?= $data['nama_pasien']; ?>" class="form-control" required autofocus style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="telp" class="h5">No Telepon</label>
                                <input type="number" name="no_telp" value="<?= $data['no_telp']; ?>" class="form-control" required autofocus style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="jk" class="h5">Jenis Kelamin</label>
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
                                <label for="alamat" class="h5">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" required style="font-size: 15px;"><?= $data['alamat']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="waktu" class="h5">Waktu Jadwal</label>
                                <input type="datetime-local" name="jadwal" id="jadwal" value="<?= $data['jadwal']; ?>" class="form-control" required autofocus style="font-size: 15px;">
                            </div>
                            <div class="text-right">
                                <input type="submit" name="edit" value="Simpan" class="btn btn-success btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../header.php'); ?>