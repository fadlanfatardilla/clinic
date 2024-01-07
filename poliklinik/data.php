<?php include_once('../header.php'); ?>

<div class="box">
    <h1>Poliklinik</h1>
    <h4>
        <small>Data Poliklinik</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Toggle Menu</a>
            <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Poli</a>
        </div>
    </h4>
    <div style="margin-bottom: 20px;">
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id='poliklinik'>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Poliklinik</th>
                    <th>Gedung</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php

                $no = 1;
                $query = "SELECT * FROM tb_poliklinik";
                $sql_obat = mysqli_query($conn, $query) or die(mysqli_error($conn));
                if (mysqli_num_rows($sql_obat) > 0) {
                    while ($data = mysqli_fetch_array($sql_obat)) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_poli'] ?></td>
                            <td><?= $data['gedung'] ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?= $data['id_poli']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="delete.php?id=<?= $data['id_poli']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                <?php

                    }
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#poliklinik').DataTable()
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



<?php include_once('../header.php'); ?>