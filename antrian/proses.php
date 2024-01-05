<?php

require_once('../config/db.php');


if (isset($_POST['add'])) {
    $nama_pasien = trim(mysqli_real_escape_string($conn, $_POST['nama_pasien']));

    mysqli_query($conn, "INSERT INTO tb_antrian (nama_pasien) VALUES ('$nama_pasien')") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
} else {
    echo "Pendaftaran gagal. Silakan coba lagi.";
}
