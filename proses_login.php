<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Ambil data user berdasarkan username
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($query);

    // 1. Cek apakah username ditemukan
    if ($user) {
        // 2. Cek apakah password benar (menggunakan verify hash untuk keamanan)
        if (password_verify($password, $user['password'])) {
            
            // 3. Set SESSION untuk proteksi halaman
            $_SESSION['username'] = $user['username'];
            $_SESSION['role']     = $user['role'];
            $_SESSION['status']   = "login"; // Kunci utama untuk membuka index.php

            // 4. Pengalihan berdasarkan Role
            if ($user['role'] == "admin") {
                header("location:admin.php");
            } else {
                header("location:index.php"); // Member dialihkan ke Home
            }
            exit();

        } else {
            // Jika password salah
            echo "<script>alert('Login Gagal! Password salah.'); window.location.href='login.php';</script>";
        }
    } else {
        // Jika username tidak ditemukan
        echo "<script>alert('Login Gagal! Username tidak terdaftar.'); window.location.href='login.php';</script>";
    }
}
?>