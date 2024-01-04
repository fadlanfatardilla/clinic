<?php

include_once('../header.php');



?>

<div class="box">
    <h1>Poliklinik</h1>
    <h4>
        <small>Edit Data Poliklinik</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>
                Kembali</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <?php

            $id = @$_GET['id'];
            $sql_obat = mysqli_query($conn, "SELECT * FROM tb_poliklinik WHERE id_poli='$id'") or die(mysqli_error($conn));
            $data = mysqli_fetch_array($sql_obat);

            ?>


            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Poliklinik</label>
                    <input type="hidden" name="id" value="<?= $data['id_poli']; ?>">
                    <input type="text" name="nama_poli" id="nama_poli" value="<?= $data['nama_poli']; ?>"
                        class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="ket">Gedung</label>
                    <textarea name="gedung" id="gedung" class="form-control" required><?= $data['gedung']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../header.php'); ?>