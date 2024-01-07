<?php

include_once('../header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box">
                <h1 class="display-4 text-center">Rekam Medis</h1>
                <h4 class="mb-4 text-center">
                    <small><strong class="h3">Tambah Data Rekam Medis</strong></small>
                    <div class="text-right">
                        <a href="data.php" class="btn btn-warning btn-xs btn-lg"><i
                                class="glyphicon glyphicon-chevron-left"></i>
                            Kembali</a>
                    </div>
                </h4>
                <div class="card">
                    <div class="card-header bg-info text-white display-6 text-center">
                        Tambah Rekam Medis
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="nama" class="h5">Pasien</label>
                                <select name="pasien" id="pasien" class="form-control" required
                                    style="font-size: 15px;">
                                    <option value="">- Pilih -</option>
                                    <?php

                                    $sql_pasien = mysqli_query($conn, "SELECT * FROM tb_pasien") or die(mysqli_error($conn));
                                    while ($data_pasien = mysqli_fetch_array($sql_pasien)) {
                                        echo '<option value="' . $data_pasien['id_pasien'] . '">' . $data_pasien['nama_pasien'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keluhan" class="h5">Keluhan</label>
                                <textarea name="keluhan" id="id" class="form-control" required
                                    style="font-size: 15px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="dokter" class="h5">Dokter</label>
                                <select name="dokter" id="dokter" class="form-control" required
                                    style="font-size: 15px;">
                                    <option value="">- Pilih -</option>
                                    <?php

                                    $sql_dokter = mysqli_query($conn, "SELECT * FROM tb_dokter") or die(mysqli_error($conn));
                                    while ($data_dokter = mysqli_fetch_array($sql_dokter)) {
                                        echo '<option value="' . $data_dokter['id_dokter'] . '">' . $data_dokter['nama_dokter'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form_group">
                                <label for="diagnosa" class="h5">Diagnosa</label>
                                <textarea name="diagnosa" id="diagnosa" class="form-control" required
                                    style="font-size: 15px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="poli" class="h5">Poliklinik</label>
                                <select name="poli" id="poli" class="form-control" required style="font-size: 15px;">
                                    <option value="">- Pilih -</option>
                                    <?php

                                    $sql_poli = mysqli_query($conn, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die(mysqli_error($conn));
                                    while ($data_poli = mysqli_fetch_array($sql_poli)) {
                                        echo '<option value="' . $data_poli['id_poli'] . '">' . $data_poli['nama_poli'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="obat" class="h5">Obat</label>
                                <select multiple name="obat[]" id="obat" class="form-control" size="7" required
                                    style="font-size: 15px;">
                                    <option value="">- Pilih -</option>
                                    <?php

                                    $sql_obat = mysqli_query($conn, "SELECT * FROM tb_obat ORDER BY nama_obat ASC") or die(mysqli_error($conn));
                                    while ($data_obat = mysqli_fetch_array($sql_obat)) {
                                        echo '<option value="' . $data_obat['id_obat'] . '">' . $data_obat['nama_obat'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgl" class="h5">Tanggal Periksa</label>
                                <input type="date" name="tgl" id="id" value="<?= date('Y-m-d'); ?>" class="form-control"
                                    required style="font-size: 15px;">
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" name="add" value="Simpan" class="btn btn-success btn-lg">
                                <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../header.php'); ?>