<?php

require_once "../config/db.php";
require "../libs/vendor/autoload.php";

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi - Klinik</title>
    <link rel="stylesheet" href="logo_klinik.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url("/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="<?= base_url("/css/simple-sidebar.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <script src="<? base_url('/js/jquery.js') ?>"></script>
    <script src="<? base_url('/js/bootstrap.min.js') ?>"></script>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="padding-top: 10px; margin-bottom: 20px">
                    <a href="#" style='font-size:30px; font-weight:500;'><i class="fa-solid fa-hospital" style="margin-right: 8px"></i>Siti Azaria</a>
                </li>
                <li>
                    <a href="<?= base_url('buat_jadwal/data.php'); ?>" style='font-size:15px; font-weight:500;'><i class="fa-solid fa-table" style="margin-right: 5px"></i>
                        Buat Jadwal</a>
                </li>
                <li>
                    <a href="<?= base_url('antrian/add.php'); ?>" style='font-size:15px; font-weight:500;'><i class="fa-solid fa-list-check" style="margin-right: 5px"></i>
                        Antrian</a>
                </li>
                <li>
                    <a href="<?= base_url('logout.php'); ?>"><span class="text-danger" style='font-size:15px; font-weight:500;'><i class="fa-solid fa-right-to-bracket" style="margin-right: 5px"></i>Logout</span></a>
                </li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="containter-fluid">
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>