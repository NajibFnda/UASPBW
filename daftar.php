<?php include 'header.php'; ?>
<div style="display: flex; justify-content: center; padding: 50px;">
    <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 350px;">
        <h2 style="text-align: center;">Daftar Akun Baru</h2>
        <form action="proses_daftar.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" style="width: 100%; padding: 10px; margin: 10px 0;" required>
            
            <label>Password</label>
            <input type="password" name="password" style="width: 100%; padding: 10px; margin: 10px 0;" required>
            
            <button type="submit" name="daftar" style="width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">Daftar Sekarang</button>
        </form>
        <p style="text-align: center; margin-top: 15px;">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</div>
<?php include 'footer.php'; ?>