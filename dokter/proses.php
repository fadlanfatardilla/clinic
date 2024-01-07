<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


class DokterManager
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function tambahDokter($nama_dokter, $spesialis, $alamat, $no_telp)
    {
        $uuid = Uuid::uuid4()->toString();
        $nama_dokter = trim(mysqli_real_escape_string($this->conn, $nama_dokter));
        $spesialis = trim(mysqli_real_escape_string($this->conn, $spesialis));
        $alamat = trim(mysqli_real_escape_string($this->conn, $alamat));
        $no_telp = trim(mysqli_real_escape_string($this->conn, $no_telp));

        mysqli_query($this->conn, "INSERT INTO tb_dokter (id_dokter, nama_dokter, spesialis, alamat, no_telp) VALUES ('$uuid', '$nama_dokter', '$spesialis', '$alamat', '$no_telp')") or die(mysqli_error($this->conn));
        echo "<script>window.location='data.php';</script>";
    }

    public function editDokter($id, $nama_dokter, $spesialis, $alamat, $no_telp)
    {
        $id = trim(mysqli_real_escape_string($this->conn, $id));
        $nama_dokter = trim(mysqli_real_escape_string($this->conn, $nama_dokter));
        $spesialis = trim(mysqli_real_escape_string($this->conn, $spesialis));
        $alamat = trim(mysqli_real_escape_string($this->conn, $alamat));
        $no_telp = trim(mysqli_real_escape_string($this->conn, $no_telp));

        mysqli_query($this->conn, "UPDATE tb_dokter SET nama_dokter = '$nama_dokter', spesialis = '$spesialis', alamat = '$alamat', no_telp = '$no_telp' WHERE id_dokter = '$id'") or die(mysqli_error($this->conn));
        echo "<script>window.location='data.php';</script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $manager = new DokterManager($conn);

    if (isset($_POST['add'])) {
        $manager->tambahDokter($_POST['nama_dokter'], $_POST['spesialis'], $_POST['alamat'], $_POST['no_telp']);
    } else if (isset($_POST['edit'])) {
        $manager->editDokter($_POST['id'], $_POST['nama_dokter'], $_POST['spesialis'], $_POST['alamat'], $_POST['no_telp']);
    }
}
