<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama_dokter = trim(mysqli_real_escape_string($conn, $_POST['nama_dokter']));
    $spesialis = trim(mysqli_real_escape_string($conn, $_POST['spesialis']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "INSERT INTO tb_dokter (id_dokter, nama_dokter, spesialis, alamat, no_telp) VALUES ('$uuid', '$nama_dokter', '$spesialis', '$alamat', '$no_telp')") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_dokter = trim(mysqli_real_escape_string($conn, $_POST['nama_dokter']));
    $spesialis = trim(mysqli_real_escape_string($conn, $_POST['spesialis']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "UPDATE tb_dokter SET nama_dokter = '$nama_dokter', spesialis = '$spesialis', alamat = '$alamat', no_telp = '$no_telp' WHERE id_dokter = '$id'") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
}
