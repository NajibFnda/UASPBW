<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['status'] = "login";
        $_SESSION['username'] = $username;
        header("location:admin.php");
    } else {
        echo "<script>alert('Login Gagal! Username atau Password salah.'); window.location.href='login.php';</script>";
    }
}
?>