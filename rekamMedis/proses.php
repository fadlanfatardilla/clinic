<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $pasien = trim(mysqli_real_escape_string($conn, $_POST['pasien']));
    $keluhan = trim(mysqli_real_escape_string($conn, $_POST['keluhan']));
    $dokter = trim(mysqli_real_escape_string($conn, $_POST['dokter']));
    $diagnosa = trim(mysqli_real_escape_string($conn, $_POST['diagnosa']));
    $poli = trim(mysqli_real_escape_string($conn, $_POST['poli']));
    $tgl = trim(mysqli_real_escape_string($conn, $_POST['tgl']));

    $obat = $_POST['obat'];
    mysqli_query($conn, "INSERT INTO tb_rekammedis (id_rm, id_pasien, keluhan, id_dokter, diagnosa, id_poli, tgl_periksa) VALUES ('$uuid', '$pasien', '$keluhan', '$dokter', '$diagnosa', '$poli', '$tgl')") or die(mysqli_error($conn));

    $obat = $_POST['obat'];
    foreach ($obat as $ob) {
        mysqli_query($conn, "INSERT INTO tb_rm_obat (id_rm, id_obat) VALUES ('$uuid', '$ob')") or die(mysqli_error($conn));
    }
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
