<?php

include_once('../header_user.php');

?>
<div class="box">
    <div class="container">
        <h1 class="text-center display-4">Jadwal</h1>
        <h4 class="text-center text-muted display-6">
            <small>Buat Jadwal Berobat</small>
        </h4>
        <div class="text-right">
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">Toggle Menu</a>
        </div>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white display-6">
                        Buat Jadwal
                    </div>
                    <div class="card-body">
                        <form method="post" action="../pasien/proses.php">
                            <div class="form-group">
                                <label for="nama" class="h5">Nama Pasien</label>
                                <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" required
                                    autofocus style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="no_telp" class="h5">No. Telepon</label>
                                <input type="tel" name="no_telp" id="no_telp" class="form-control" required
                                    style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label class="h5">Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" value="L" required> Laki-Laki
                                    </label>
                                    <label>
                                        <input type="radio" name="jk" value="P" required> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="h5">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" required
                                    style="font-size: 15px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jadwal" class="h5">Waktu Jadwal</label>
                                <input type="datetime-local" name="jadwal" id="jadwal" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="add" value="Daftar Jadwal" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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