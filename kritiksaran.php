<?php include 'header.php'; ?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f7f6;
    }

    .main-wrapper {
        min-height: 80vh; 
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 500px;
    }

    h1 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    textarea {
        width: 100%;
        height: 200px;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        color: #333;
        resize: vertical;
        box-sizing: border-box; 
    }

    textarea:focus {
        background-color: #f0f8ff;
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        transition: all 0.3s ease-in-out;
    }
        
    .btn-submit {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>

<div class="main-wrapper">
    <div class="container">
        <form action="proses_kritik.php" method="POST" id="messageForm">
            <h1>Kritik & Saran</h1>
            <textarea 
                id="shortMessage" 
                name="isi_saran" 
                placeholder="Tuliskan Kritik & saran Anda di sini..." 
                required></textarea>
            <button type="submit" name="submit_kritik" class="btn-submit">Kirim Sekarang</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>