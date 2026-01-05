<?php
include 'koneksi.php';

if (isset($_POST['submit_kritik'])) {
    $isi_saran = mysqli_real_escape_string($conn, $_POST['isi_saran']);

    $query = "INSERT INTO kritik_saran (isi_saran) VALUES ('$isi_saran')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Terima kasih atas kritik dan sarannya!');
                window.location.href='kritiksaran.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>