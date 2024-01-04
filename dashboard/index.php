<?php include_once('../header.php'); ?>

<div class="row">
    <div class="col-lg-12">
        <h1>Dashboard</h1>
        <marquee behavior="" direction="">
            <p>Selamat Datang <?= $_SESSION['user']; ?> di website klinik</p>
        </marquee>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    </div>
</div>
<?php include_once('../footer.php'); ?>