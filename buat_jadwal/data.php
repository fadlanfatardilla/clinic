<?php

include_once('../header_user.php');



?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="box">
    <h1>Buat Jadwal</h1>
    <h4>
        <small>Buat Jadwal Berobat</small>
        <div class="pull-right">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        </div>
    </h4>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form method="post" action="../pasien/proses.php">
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="umur">No. Telepon</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="jk" id="jk" value="L" required> Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jk" value="P" required> Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu Jadwal</label>
                    <input type="datetime-local" name="jadwal" id="jadwal" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input type="submit" name="add" value="Daftar Jadwal" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

// Ambil elemen input tanggal
const jadwalInput = document.getElementById('jadwal');

// Buat fungsi untuk memeriksa tanggal yang valid
function checkValidDate() {
    const selectedDate = new Date(jadwalInput.value);
    const currentDate = new Date();

    // Bandingkan tanggal yang dipilih dengan tanggal saat ini
    if (selectedDate < currentDate) {
        // Jika tanggal yang dipilih lebih kecil dari tanggal saat ini, beri pesan kesalahan
        alert('Anda tidak dapat memilih tanggal yang sudah lewat.');
        jadwalInput.value = ''; // Kosongkan nilai input tanggal
    }
}

// Tambahkan event listener untuk memanggil fungsi validasi saat nilai tanggal berubah
jadwalInput.addEventListener('change', checkValidDate);
</script>

<?php include_once('../header_user.php'); ?>