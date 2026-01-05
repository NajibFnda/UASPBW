<?php
include 'koneksi.php';

$keyword = "";
if (isset($_GET['q'])) {
    $keyword = mysqli_real_escape_string($conn, $_GET['q']);
}

if ($keyword == "") {
    exit;
}

$query = "SELECT * FROM destinasi WHERE nama_lokasi LIKE '%$keyword%'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div style='background: white; padding: 15px; border-radius: 8px; margin-bottom: 10px; text-align: left; box-shadow: 0 2px 5px rgba(0,0,0,0.1); display: flex; gap: 15px;'>
            <div style='flex: 1;'>
                <h3 style='margin: 0; color: #007bff;'>{$row['nama_lokasi']}</h3>
                <p style='margin: 5px 0;'><b>Jenis Ikan:</b> {$row['jenis_ikan']}</p>
                <p style='margin: 5px 0;'><b>Fasilitas:</b> {$row['fasilitas']}</p>
                <p style='margin: 0; color: green; font-weight: bold;'>Harga: Rp " . number_format($row['harga'], 0, ',', '.') . "</p>
            </div>
        </div>";
    }
} else {
    echo "<p style='color: red;'>Lokasi tidak ditemukan.</p>";
}
?>