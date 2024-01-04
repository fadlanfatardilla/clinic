<?php

require_once "./config/db.php";

unset($_SESSION['user']);
echo "<script>window.location='" . base_url('login.php') . "';</script>";
