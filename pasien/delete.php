<?php

require_once "../config/db.php";

mysqli_query($conn, "DELETE FROM tb_pasien WHERE id_pasien = '$_GET[id]'") or die(mysqli_error($conn));
echo "<script>window.location='data.php';</script>";
