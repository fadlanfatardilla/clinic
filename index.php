<?php
require_once "./config/db.php";
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('dashboard') . "';</script>";
} else {
    echo "<script>window.location='" . base_url('login.php') . "';</script>";
}
