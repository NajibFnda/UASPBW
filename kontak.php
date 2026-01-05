<?php include 'header.php'; ?>

<style>
    /* 1. Pastikan body tidak memiliki flex agar elemen menumpuk ke bawah */
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f7f6;
    }

        .image {
            display: flex;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 300px;
        }
        
        .images {
            width: 100%;
            flex-shrink: 0;
        }
        .images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    .container {
        margin: 40px auto;
        max-width: 1200px;
        padding: 30px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: center;
    }

    .contact-form, .map-box {
        flex: 1; 
        min-width: 300px;
    }

    h2 {
        color: #333;
        border-bottom: 3px solid #007bff;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 25px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 20px;
        font-family: inherit;
    }

    textarea {
        height: 120px;
        resize: vertical;
    }

    input:focus, textarea:focus {
        border-color: #007bff;
        background-color: #f0f8ff;
        outline: none;
    }

    button {
        background-color: #203eff;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: 0.3s;
    }

    button:hover {
        background-color: #0026b3;
    }

    iframe {
        border-radius: 10px;
        width: 100%; 
    }

    body.dark-mode .container {
        background-color: #2d2d2d;
        color: #f4f4f4;
    }
    body.dark-mode h2 {
        color: #fff;
    }
</style>

<div class="image">
    <div class="images">
        <img src="pict/kontak.png" alt="Kontak MancingKing">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="contact-form">
            <h2>Hubungi Kami</h2>
            <form action="proses_kontak.php" method="POST">
                <label for="name">Nama Depan</label>
                <input type="text" id="name" name="nama_lengkap" placeholder="Masukkan nama Anda" required> 
                
                <label for="last_name">Nama Belakang</label>
                <input type="text" id="last_name" name="nama_belakang" placeholder="Masukkan nama belakang Anda" required>
                    
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" name="telepon" placeholder="+62" required>
                
                <label for="message">Pesan</label>
                <textarea id="message" name="pesan" placeholder="Ketik pesan Anda" required></textarea>
                
                <button type="submit" name="submit_kontak">Kirim Pesan</button>
            </form>
        </div>

        <div class="map-box">
            <h2>Lokasi</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d110.370529!3d-7.005145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4a3c2f9d8d%3A0x3027a7635292020!2sSemarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1700000000000" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>