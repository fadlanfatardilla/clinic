if (isset($_POST['cek'])) {
// Mengambil nilai dari form
$nama = $_POST['nama'];

// Pastikan koneksi database sudah terbuat (gantikan 'db.php' sesuai dengan konfigurasi Anda)
require_once('../config/db.php');

// Pastikan variabel $conn terhubung dengan database
if ($conn) {
$query = "SELECT id FROM tb_antrian WHERE nama_pasien = '$nama'";
$result = mysqli_query($conn, $query);

// Pastikan query berhasil dijalankan
if ($result) {
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
echo '<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Notifikasi</div>
    <div class="card-body">
        <h5 class="card-title">Nomor Antrian Anda:</h5>
        <p class="card-text">' . $row['id'] . '</p>
    </div>
</div>'; // Menggunakan $row['id']
} else {
echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <div class="card-header">Notifikasi</div>
    <div class="card-body">
        <p class="card-text">Anda belum mendaftar atau nama pasien tidak ditemukan.</p>
    </div>
</div>';
}
} else {
echo '<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">Notifikasi</div>
    <div class="card-body">
        <p class="card-text">Query gagal dijalankan: ' . mysqli_error($conn) . '</p>
    </div>
</div>';
}
} else {
echo '<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <div class="card-header">Notifikasi</div>
    <div class="card-body">
        <p class="card-text">Koneksi ke database gagal.</p>
    </div>
</div>';
}
}