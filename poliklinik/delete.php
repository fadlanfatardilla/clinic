<?php

require_once "../config/db.php";

mysqli_query($conn, "DELETE FROM tb_poliklinik WHERE id_poli = '$_GET[id]'") or die(mysqli_error($conn));
echo "<script>window.location='data.php';</script>";
