<?php

require_once "../config/db.php";

mysqli_query($conn, "DELETE FROM tb_rekammedis WHERE id_rm = '$_GET[id]'") or die(mysqli_error($conn));
echo "<script>window.location='data.php';</script>";
