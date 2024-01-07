<?php include_once('../header.php'); ?>




<div class="box">
    <h1>Antrian Pasien</h1>
    <h4>
        <small>Data Antrian Pasien</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#menu-toggle" class="btn btn-warning bg-gradient" id="menu-toggle">Toggle Menu</a>
        </div>
    </h4>
    <div style="margin-bottom: 20px;">
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id='antrian'>
            <thead>
                <tr>
                    <th>No Antrian.</th>
                    <th>Nama Pasien</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php

                $no = 1;
                $query = "SELECT * FROM tb_antrian";
                $sql_antrian = mysqli_query($conn, $query) or die(mysqli_error($conn));
                if (mysqli_num_rows($sql_antrian) > 0) {
                    while ($data = mysqli_fetch_array($sql_antrian)) { ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nama_pasien'] ?></td>
                    <td class="text-center">
                        <a href="delete.php?id=<?= $data['id_pasien']; ?>"
                            onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i
                                class="glyphicon glyphicon-trash"></i></a>

                    </td>
                </tr>
                <?php

                    }
                } else {
                    echo "<tr><td colspan=\"3\" align=\"center\">Data tidak ditemukan</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#antrian').DataTable()
});
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>


<?php include_once('../header.php'); ?>