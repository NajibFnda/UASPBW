<?php
include 'koneksi.php';

if (isset($_POST['submit_booking'])) {
    $lokasi  = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $mulai   = $_POST['tgl_mulai'];
    $selesai = $_POST['tgl_selesai'];

    $query = "INSERT INTO booking (lokasi, tgl_mulai, tgl_selesai) 
              VALUES ('$lokasi', '$mulai', '$selesai')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Berhasil! Rencana mancing Anda telah tersimpan.');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($conn);
    }
}
?>