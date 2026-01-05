<?php 
session_start();
if($_SESSION['status'] != "login"){
    header("location:login.php?pesan=belum_login");
}

include 'header.php'; 
include 'koneksi.php';

$query_laporan = "SELECT * FROM laporan ORDER BY tanggal_lapor DESC";
$result_laporan = mysqli_query($conn, $query_laporan);

$query_kontak = "SELECT * FROM kontak ORDER BY tanggal_masuk DESC";
$result_kontak = mysqli_query($conn, $query_kontak);

$query_saran = "SELECT * FROM kritik_saran ORDER BY tanggal_kirim DESC";
$result_saran = mysqli_query($conn, $query_saran);
?>

<?php 
include 'koneksi.php';
include 'header.php'; 
?>

<style>
    .admin-container {
        margin: 50px auto;
        max-width: 95%;
        font-family: Arial, sans-serif;
    }
    .admin-title {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
        text-transform: uppercase;
        border-bottom: 2px solid #007bff;
        display: inline-block;
        padding-bottom: 10px;
    }
    .table-wrapper {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 50px;
        overflow-x: auto;
    }
    .admin-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    .admin-table th, .admin-table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }
    .admin-table th {
        color: white;
        text-transform: uppercase;
        font-size: 14px;
    }
    /* Warna Header Berbeda tiap Tabel */
    .bg-laporan { background-color: #007bff; }
    .bg-kontak { background-color: #e67e22; }
    .bg-saran { background-color: #28a745; }

    .btn-hapus {
        color: #dc3545;
        text-decoration: none;
        font-weight: bold;
    }
    .btn-hapus:hover { text-decoration: underline; }
    
    tr:nth-child(even) { background-color: #f9f9f9; }
    tr:hover { background-color: #f1f1f1; }
</style>

<div class="admin-container">
    <div style="text-align: center;">
        <h1 class="admin-title">Dashboard Admin MancingKing</h1>
    </div>

    <hr>
<h2 style="text-align: center;">Daftar Reservasi / Rencana Mancing</h2>
<table border="1" class="admin-table">
    <tr style="background-color: #6f42c1; color: white;">
        <th>No</th>
        <th>Lokasi Tujuan</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Waktu Input</th>
    </tr>
    <?php 
    $q_booking = mysqli_query($conn, "SELECT * FROM booking ORDER BY tgl_input DESC");
    $no_b = 1;
    while($b = mysqli_fetch_assoc($q_booking)) { 
    ?>
    <tr>
        <td align="center"><?php echo $no_b++; ?></td>
        <td><?php echo $b['lokasi']; ?></td>
        <td align="center"><?php echo $b['tgl_mulai']; ?></td>
        <td align="center"><?php echo $b['tgl_selesai']; ?></td>
        <td align="center"><?php echo $b['tgl_input']; ?></td>
    </tr>
    <?php } ?>
</table>

    <div class="table-wrapper">
        <h2><i class="fas fa-file-alt"></i> Daftar Laporan Kendala</h2>
        <table class="admin-table">
            <thead>
                <tr class="bg-laporan">
                    <th width="50">No</th>
                    <th>Nama Pelapor</th>
                    <th>Judul</th>
                    <th>Isi Laporan</th>
                    <th>Tanggal</th>
                    <th width="80">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while($row = mysqli_fetch_assoc($result_laporan)) { ?>
                <tr>
                    <td align="center"><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['nama']); ?></td>
                    <td><?= htmlspecialchars($row['judul']); ?></td>
                    <td><?= htmlspecialchars($row['pesan']); ?></td>
                    <td><?= $row['tanggal_lapor']; ?></td>
                    <td align="center">
                        <a href="hapus_laporan.php?id=<?= $row['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin hapus laporan ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="table-wrapper">
        <h2><i class="fas fa-envelope"></i> Pesan Masuk (Kontak)</h2>
        <table class="admin-table">
            <thead>
                <tr class="bg-kontak">
                    <th width="50">No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th width="80">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no_k = 1; while($k = mysqli_fetch_assoc($result_kontak)) { ?>
                <tr>
                    <td align="center"><?= $no_k++; ?></td>
                    <td><?= htmlspecialchars($k['nama_lengkap']); ?></td>
                    <td><?= htmlspecialchars($k['email']); ?></td>
                    <td><?= $k['telepon']; ?></td>
                    <td><?= htmlspecialchars($k['pesan']); ?></td>
                    <td><?= $k['tanggal_masuk']; ?></td>
                    <td align="center">
                        <a href="hapus_kontak.php?id=<?= $k['id']; ?>" class="btn-hapus" onclick="return confirm('Hapus pesan ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="table-wrapper">
        <h2><i class="fas fa-comments"></i> Kritik & Saran Pengunjung</h2>
        <table class="admin-table">
            <thead>
                <tr class="bg-saran">
                    <th width="50">No</th>
                    <th>Isi Saran</th>
                    <th width="200">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $no_s = 1; while($s = mysqli_fetch_assoc($result_saran)) { ?>
                <tr>
                    <td align="center"><?= $no_s++; ?></td>
                    <td><?= htmlspecialchars($s['isi_saran']); ?></td>
                    <td><?= $s['tanggal_kirim']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>