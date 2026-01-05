    <?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM laporan WHERE id = '$id'";
    $hapus = mysqli_query($conn, $query);

    if ($hapus) {
        echo "<script>
                alert('Laporan berhasil dihapus!');
                window.location.href='admin.php';
              </script>";
    } else {
        echo "Gagal menghapus: " . mysqli_error($conn);
    }
} else {
    // Jika mencoba akses langsung tanpa ID, kembalikan ke admin
    header("Location: admin.php");
}
?>