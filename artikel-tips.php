<?php include 'header.php'; ?>
    <style>
        .container {
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

        .header {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
        }

        .main-content {
            display: flex;
            flex: 1;
            padding: 20px;
            gap: 20px;
        }
        .article {
            flex: 3;
            margin-right: 20px;
        }

        .article-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .article-meta {
            color: gray;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .sidebar {
            flex: 1;
            background-color: #ffffff;
            padding: 20px;
            margin-top: 20px;
            position: sticky;
            top: 10px;    
            right: 16%; 
            width: 200px;
            align-self: flex-start;
        }

        .sidebar-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .sidebar-list li {
            margin-bottom: 15px;
        }

        .sidebar-list li a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
        }
        
        .sidebar-list li a:hover{
            color: #007bff;
        }

        .sidebar-list li span {
            display: block;
            font-size: 0.8em;
            color: gray;
        }


        .sidebar-nav {
            border-bottom: 1px solid grey;
            list-style: none;
            margin-top: 60px;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            margin-bottom: 20px;
        }
            
        .sidebar-nav li a {
            border-bottom: 2px solid #007bff;
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            transition: color 0.3s;
        }

        .sidebar-nav li a:hover {
            color: #007bff;
        }
    </style>
    <div class="container">
            <div class="main-content">
                <div class="article">
                    <h1 style="font-size: 40px;">Tips Memancing Ikan Bagi Pemula</h1>
                    <img src="artikel/tips.jpg" alt="mancing king" class="article-image">
                    <p class="article-meta">12 Juli 2022 &nbsp;|&nbsp; Artikel</p>
                    <p>Melakukan hobi memancing menghabiskan waktu di tepi danau atau  sungai sambil menunggu gigitan ikan, bisa menjadi momen yang menyenangkan bagi yang punya hobi memancing. </p>
                    <p>Tetapi bagi mereka yang baru terjun ke dalam aktivitas ini, memancing bisa menjadi tantangan dan membingungkan. Mulai dari memilih lokasi yang tepat, pemilihan peralatan, hingga memahami kebiasaan ikan dan umpan yang sesuai, ada banyak hal yang perlu dipelajari.</p>
                    <p>Melansir dari laman Decathlon,ada lima tips utama yang dapat membantu untuk memulai perjalanan memancing agar lebih percaya diri. Dari memilih lokasi yang strategis hingga mengetahui waktu terbaik untuk memancing. Tips berikut  ini dirancang untuk membantu meningkatkan peluang sukses untuk mendapatkan ikan, di antara nya :</p>
                    <h4>1. Penyelidikan Lokasi yang Tepat</h4>
                    <p>Pemilihan lokasi memancing adalah langkah awal yang krusial. Pemula disarankan memilih lokasi memancing selain di laut seperti danau, waduk, kolam atau sungai karena memiliki tingkat kesulitan yang lebih kecil, sehingga lebih cocok untuk anda yang baru mulai memancing. Tidak hanya itu, mengetahui aturan dan perizinan yang diperlukan juga penting untuk memastikan keamanan dan kenyamanan. Memilih tempat yang ramah bagi pemula dapat meningkatkan kesempatan mendapatkan hasil yang memuaskan dan mengurangi tingkat kesulitan dalam memulai hobi memancing.</p>
                    <h4>2. Pahami Ikan dan Umpan yang Tepat</h4>
                    <p>Riset mengenai jenis ikan yang ada di lokasi memancing sangatlah penting. Berbeda ikan, berbeda pula preferensi makanannya. Menggunakan umpan yang sesuai dengan preferensi ikan, seperti cacing tanah atau jangkrik digunakan untuk memancing ikan lele dan gabus, sedangkan pelet lebih umum digunakan untuk memancing ikan nilai, gurame, mujaer, atau patin. Pemilihan umpan yang tepat dapat meningkatkan peluang tangkapan ikan Anda.</p>
                    <h4>3. Pilih Waktu yang Tepat</h4>
                    <p>Ikan memiliki pola makan yang khas. Memancing pada pagi atau sore hari seringkali memberikan hasil yang lebih baik karena itulah saat ikan aktif mencari makan. Selain itu, cuaca pada waktu tersebut cenderung lebih nyaman bagi pemancing.</p>
                    <h4>4. Gunakan Peralatan yang Sesuai</h4>
                    <p>Memilih peralatan yang sesuai dengan kondisi dan jenis ikan di lokasi memancing adalah kunci keberhasilan. Joran, senar, dan kail yang tepat akan memudahkan Anda dalam menangkap ikan. Pastikan untuk memilih alat pancing yang sesuai dengan ukuran dan jenis ikan yang ditargetkan.</p>
                    <h4>5. Kesabaran dan Keterampilan Teknis</h4>
                    <p>Menciptakan kesabaran adalah hal penting dalam memancing. Tunggulah dengan sabar setelah melemparkan umpan Anda dan fokuslah pada gerakan pelampung atau tanda-tanda bahwa ikan sedang mendekati umpan. Saat merasakan gigitan ikan, berikan waktu sebentar sebelum menghentakkan joran untuk meningkatkan kesempatan kail terkait di mulut ikan.</p>
                </div>
    
                <div class="sidebar">
                    <ul class="sidebar-nav">
                        <li><a href="#">Artikel</a></li>
                    </ul>
                
                    <ul class="sidebar-list">
                        <li><a href="artikel-tips.php">Tips Memancing Ikan Bagi Pemula</a> <span>12-07-2022 15:48:06</span></li>
                        <li><a href="artikel-ulasan.php">4 Rekomendasi Tempat Pemancingan di Semarang yang Murah dan Populer</a> <span>8-07-2022 15:31:51</span></li>
                    </ul>
                </div>  
            </div>
        </div>

            <!-- button up  -->
    <a href="#top" class="btn-up" >
        <img src="pict/btn-up.png" width="35" height="35" class="pp"/>
    </a>

    <?php include 'footer.php'; ?>