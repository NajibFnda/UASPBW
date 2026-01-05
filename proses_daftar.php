<?php
include 'koneksi.php';

if (isset($_POST['daftar'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    // Mengenkripsi password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'member')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>