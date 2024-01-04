<?php include_once('../header.php'); ?>

<div class="box">
    <h1>Pasien</h1>
    <h4>
        <small style='font-size: 14px;'>Data Pasien</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Pasien</a>
        </div>
    </h4>
    <div style="margin-bottom: 20px;">
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="myTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nomor Identitas</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = 'SELECT * FROM tb_pasien';
                $sql_pasien = mysqli_query($conn, $query) or die(mysqli_error($conn));
                if (mysqli_num_rows($sql_pasien) > 0) {
                    while ($data = mysqli_fetch_assoc($sql_pasien)) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nomor_identitas'] ?></td>
                            <td><?= $data['nama_pasien'] ?></td>
                            <td><?= $data['jenis_kelamin'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['no_telp'] ?></td>
                            <td align="center">
                                <a href="edit.php?id=<?= $data['id_pasien']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="delete.php?id=<?= $data['id_pasien']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                <?php

                    }
                } else {
                    echo "<tr><td colspan=\"6\" align=\"center\">Data tidak ditemukan</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>


</div>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



<?php include_once('../header.php'); ?>