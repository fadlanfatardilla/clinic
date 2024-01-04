<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nomor_identitas = trim(mysqli_real_escape_string($conn, $_POST['nomor_identitas']));
    $nama_pasien = trim(mysqli_real_escape_string($conn, $_POST['nama_pasien']));
    $jk = trim(mysqli_real_escape_string($conn, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    $sql_cek_identitas = mysqli_query($conn, "SELECT * FROM tb_pasien WHERE nomor_identitas = '$nomor_identitas'") or die(mysqli_error($conn));
    if (mysqli_num_rows($sql_cek_identitas) > 0) {
        echo "<script>alert('Nomor Identitas Sudah Pernah Diinput!') window.location='add.php';</script>";
    } else {
        mysqli_query($conn, "INSERT INTO tb_pasien (id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp) VALUES ('$uuid', '$nomor_identitas', '$nama_pasien', '$jk', '$alamat', '$no_telp')") or die(mysqli_error($conn));
        echo "<script>window.location='data.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nomor_identitas = trim(mysqli_real_escape_string($conn, $_POST['nomor_identitas']));
    $nama_pasien = trim(mysqli_real_escape_string($conn, $_POST['nama_pasien']));
    $jk = trim(mysqli_real_escape_string($conn, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "UPDATE tb_pasien SET nomor_identitas = '$nomor_identitas', nama_pasien = '$nama_pasien', jk = '$jk', alamat = '$alamat', no_telp = '$no_telp' WHERE id_pasien = '$id'") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
}
