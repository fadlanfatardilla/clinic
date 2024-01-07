<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama_pasien = trim(mysqli_real_escape_string($conn, $_POST['nama_pasien']));
    $no_telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    $jk = trim(mysqli_real_escape_string($conn, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $jadwal = trim(mysqli_real_escape_string($conn, $_POST['jadwal']));
    mysqli_query($conn, "INSERT INTO tb_pasien (id_pasien, nama_pasien, no_telp, jenis_kelamin, alamat, jadwal) VALUES ('$uuid', '$nama_pasien', '$no_telp', '$jk', '$alamat', '$jadwal')") or die(mysqli_error($conn));
    // echo ('<script>alert("Berhasil Mendaftar")</script>');
    header('Location:../antrian/add.php');
} else if (isset($_POST['edit'])) {
    $id_pasien = $_POST['id'];
    $nama_pasien = trim(mysqli_real_escape_string($conn, $_POST['nama_pasien']));
    $no_telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    $jk = trim(mysqli_real_escape_string($conn, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $jadwal = trim(mysqli_real_escape_string($conn, $_POST['jadwal']));
    mysqli_query($conn, "UPDATE tb_pasien SET nama_pasien = '$nama_pasien', no_telp= '$no_telp', jenis_kelamin = '$jk', alamat = '$alamat', jadwal = '$jadwal' WHERE id_pasien = '$id_pasien'") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
}
