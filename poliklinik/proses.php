<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama_poli = trim(mysqli_real_escape_string($conn, $_POST['nama_poli']));
    $gedung = trim(mysqli_real_escape_string($conn, $_POST['gedung']));
    mysqli_query($conn, "INSERT INTO tb_poliklinik (id_poli, nama_poli, gedung) VALUES ('$uuid', '$nama_poli', '$gedung')") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_poli = trim(mysqli_real_escape_string($conn, $_POST['nama_poli']));
    $gedung = trim(mysqli_real_escape_string($conn, $_POST['gedung']));
    mysqli_query($conn, "UPDATE tb_poliklinik SET nama_poli = '$nama_poli', gedung = '$gedung' WHERE id_poli = '$id'") or die(mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
}
