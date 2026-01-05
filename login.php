<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - MancingKing</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px; }
        h2 { text-align: center; color: #333; margin-top: 0; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; transition: 0.3s; }
        button:hover { background-color: #0056b3; }
        .alert { color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; text-align: center; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Admin</h2>

        <?php 
        if(isset($_GET['pesan'])){
            echo "<div class='alert'>";
            if($_GET['pesan'] == "gagal"){
                echo "Username atau Password salah!";
            } else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout.";
            } else if($_GET['pesan'] == "belum_login"){
                echo "Silakan login terlebih dahulu.";
            }
            echo "</div>";
        }
        ?>

        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>

        <p style="text-align: center; font-size: 13px; margin-top: 15px;">
            Belum punya akun? <a href="daftar.php" style="text-decoration: none; color: #007bff;">Daftar di sini</a>
        </p>
    </div>
</body>
</html>