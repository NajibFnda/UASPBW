<?php
include 'koneksi.php';

if (isset($_POST['submit_kontak'])) {
    $nama    = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
    $pesan   = mysqli_real_escape_string($conn, $_POST['pesan']);

    $query = "INSERT INTO kontak (nama_lengkap, email, telepon, pesan) 
              VALUES ('$nama', '$email', '$telepon', '$pesan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Pesan Anda berhasil terkirim!');
                window.location.href='kontak.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>