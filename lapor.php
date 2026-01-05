<?php include 'header.php'; ?>

<style>
      body {
        margin: 0;
        padding: 0;
        background-color: #f4f7f6; 
      }

      .main-content {
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 0;
      }

      .container {
        background-color: #fff;
        padding: 20px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }

      .form-group {
        margin-bottom: 15px;
      }

      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
      }

      input[type="text"],
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        color: #333;
        box-sizing: border-box;
      }

      textarea {
        resize: vertical;
      }

      input:focus, 
      textarea:focus {
        background-color: #f0f8ff;
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        transition: all 0.3s ease-in-out;
      }
        
      .btn-submit {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
      }

      .btn-submit:hover {
        background-color: #b30000;
      }
</style>

<div class="main-content">
    <div class="container">
        <h1>Sampaikan Laporan Anda</h1>
        <form action="proses_lapor.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Ketik Nama Anda" required />
            </div>
            <div class="form-group">
                <label for="judul">Judul Laporan</label>
                <input type="text" id="judul" name="judul" placeholder="Ketik Judul Laporan Anda" required />
            </div>
            <div class="form-group">
                <label for="pesan">Isi Laporan</label>
                <textarea id="pesan" name="pesan" rows="5" placeholder="Ketik Isi Laporan Anda" required></textarea>
            </div>
            <button type="submit" name="submit_lapor" class="btn-submit">Kirim Laporan</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>