<?php include 'header.php'; ?>
        <style>
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
        .profil-container {
            margin: auto;
            max-width: 100%;
            padding: 10px;
            color: rgb(58, 58, 58);
            padding-right: 16%;
            padding-left: 16%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profil-container h2 {
            text-align: center;
            color: #333;
            margin-top: 50px;
            margin-bottom: 10px;
            font-size: 1.8rem; 
            border-bottom: 3px solid #007bff;
            display: inline-block;
            padding-bottom: 5px;
        }

    </style>
  <!-- PROFIL -->
    <div class="image">
        <div class="images" id="img1">
            <img src="pict/profil.png" alt="Slide 1">
       </div>
    </div>
    <div class="profil-container">
        <div class="content">
            <h2>MANCING</h2>
            <p>Mancing adalah aktivitas menangkap ikan yang dilakukan dengan menggunakan peralatan khusus seperti joran (tongkat pancing), tali pancing, kail, dan umpan. Umpan yang digunakan bisa berupa umpan alami seperti cacing, udang, atau ikan kecil, maupun umpan buatan yang dirancang menyerupai makanan alami ikan. Mancing dapat dilakukan di berbagai tempat seperti sungai, danau, waduk, kolam, atau laut, tergantung pada jenis ikan yang ingin ditangkap dan preferensi pemancing.</p>
            <p>Kegiatan mancing tidak hanya sekadar menangkap ikan, tetapi juga sering dianggap sebagai salah satu cara untuk melepas penat, menikmati alam, dan menghabiskan waktu bersama keluarga atau teman. Ada dua jenis utama mancing, yaitu mancing rekreasi dan mancing komersial. Mancing rekreasi biasanya dilakukan untuk hiburan atau olahraga, sementara mancing komersial lebih fokus pada tangkapan untuk dijual atau kebutuhan ekonomi.</p>
            <p>Selain itu, mancing juga bisa menjadi tantangan tersendiri karena membutuhkan kesabaran, konsentrasi, dan keterampilan dalam membaca kondisi air dan perilaku ikan. Beberapa orang bahkan menganggap mancing sebagai bentuk meditasi karena suasananya yang tenang dan relaksasi yang dirasakan saat berada di dekat air.</p>
            <p>Dalam konteks modern, mancing juga telah berkembang menjadi aktivitas yang lebih kompleks dengan adanya teknik-teknik seperti fly fishing, casting, trolling, atau jigging. Peralatan pancing pun semakin canggih, menggunakan teknologi terkini untuk meningkatkan peluang keberhasilan.</p>
            
            <!-- TUJUAN -->
            <h2>TUJUAN</h2>
            <p>Blog ini dibuat dengan tujuan untuk:</p>
            <ul>
                <li>Berbagi Pengetahuan</li>
                <p>Memberikan informasi dan panduan kepada siapa saja yang ingin belajar atau memperdalam pengetahuan tentang mancing, mulai dari teknik dasar hingga strategi lanjutan.</p>
                <li>Membangun Komunitas</li>
                <p>Menjadi tempat berkumpulnya para pecinta mancing untuk berbagi pengalaman, cerita, dan tips agar saling menginspirasi dan belajar satu sama lain.</p>
                <li>Meningkatkan Kesadaran Akan Alam</li>
                <p>Mengajak pembaca untuk lebih menghargai dan menjaga kelestarian lingkungan alam yang menjadi tempat kita menikmati kegiatan mancing.</p>
                <li>Menginspirasi Hobi Baru</li>
                <p>Mancing adalah kegiatan yang bermanfaat untuk relaksasi, melatih kesabaran, dan menghilangkan stres. Melalui blog ini, saya berharap dapat menginspirasi orang lain untuk mencoba hobi yang menyenangkan ini.</p>
            </ul>
        </div>
    </div>
        <!-- button up  -->
        <a href="#top" class="btn-up" >
            <img src="pict/btn-up.png" width="35" height="35" class="pp"/>
        </a>

<?php include 'footer.php'; ?>