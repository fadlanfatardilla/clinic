<?php

include_once('../config/db.php');


$sql2 = $conn->query("select * from tb_pasien");

while ($tampil2 = $sql2->fetch_assoc()) {
    $jumlah_pasien = $sql2->num_rows;
}

$sql3 = $conn->query("select * from tb_dokter");

while ($tampil3 = $sql3->fetch_assoc()) {
    $jumlah_dokter = $sql3->num_rows;
}

$sql4 = $conn->query("select * from tb_poliklinik");

while ($tampil4 = $sql4->fetch_assoc()) {
    $jumlah_poli = $sql4->num_rows;
}

$sql5 = $conn->query("select * from tb_obat");

while ($tampil5 = $sql5->fetch_assoc()) {
    $jumlah_obat = $sql5->num_rows;
}

$sql6 = $conn->query("select * from tb_antrian");

while ($tampil6 = $sql6->fetch_assoc()) {
    $jumlah_antrian = $sql6->num_rows;
}

$sql7 = $conn->query("select * from tb_rekammedis");

while ($tampil7 = $sql7->fetch_assoc()) {
    $jumlah_rm = $sql7->num_rows;
}
