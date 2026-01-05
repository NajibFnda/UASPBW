<?php
include 'koneksi.php';

if (isset($_POST['submit_lapor'])) {
    
    $nama  = mysqli_real_escape_string($conn, $_POST['nama']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

    $query = "INSERT INTO laporan (nama, judul, pesan) VALUES ('$nama', '$judul', '$pesan')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Laporan berhasil dikirim!');
                window.location.href='lapor.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    header("Location: lapor.php");
}
?>