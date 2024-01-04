<?php

include_once('../header.php');



?>

<div class="box">
    <h1>Dokter</h1>
    <h4>
        <small>Edit Data Dokter</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>
                Kembali</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <?php

            $id = @$_GET['id'];
            $sql_obat = mysqli_query($conn, "SELECT * FROM tb_dokter WHERE id_dokter='$id'") or die(mysqli_error($conn));
            $data = mysqli_fetch_array($sql_obat);

            ?>


            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Dokter</label>
                    <input type="hidden" name="id" value="<?= $data['id_dokter']; ?>">
                    <input type="text" name="nama_dokter" id="nama_dokter" class="form-control"
                        value="<?= $data['nama_dokter']; ?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" name="spesialis" id="spesialis" class="form-control"
                        value="<?= $data['spesialis'];?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required><?= $data['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control"
                        value="<?= $data['no_telp'];?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../header.php'); ?>