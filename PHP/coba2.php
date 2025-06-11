<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Guru - SPENDAPRA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- Base & Reset --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
            position: relative; /* Untuk background shapes global */
            overflow-x: hidden; /* Mencegah scroll horizontal dari shapes */
        }

        /* Global Background Shapes */
        body::before,
        body::after {
            content: '';
            position: absolute;
            background-color: transparent;
            border: 2px solid rgba(0, 0, 0, 0.05); /* Warna abu-abu transparan untuk outline */
            border-radius: 10px; /* Bentuk kotak dengan sudut membulat */
            z-index: 0; /* Di belakang konten */
            pointer-events: none; /* Tidak bisa diinteraksi */
        }

        body::before {
            top: 200px; /* Posisi atas kiri */
            left: -100px;
            width: 250px;
            height: 250px;
            transform: rotate(-30deg);
            border-radius: 20px;
        }

        body::after {
            bottom: 200px; /* Posisi bawah kanan */
            right: -100px;
            width: 300px;
            height: 300px;
            transform: rotate(20deg);
            border-radius: 30px;
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative; /* Konten di atas background shapes */
            z-index: 1;
        }

        /* --- Header/Navbar --- */
        .main-header {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 100;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-area {
            display: flex;
            align-items: center;
        }

        .logo-area img {
            height: 50px;
            margin-right: 10px;
        }

        .logo-text h1 {
            font-size: 24px;
            color: #2c5aa0; /* Biru Spendapra */
            margin: 0;
        }

        .logo-text p {
            font-size: 12px;
            color: #555;
            margin: 0;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            padding: 5px 0;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #2c5aa0;
            left: 0;
            bottom: -5px;
            transition: width 0.3s ease;
        }

        .nav-links li a:hover {
            color: #2c5aa0;
        }

        .nav-links li.active a {
            color: #2c5aa0;
            font-weight: 600;
        }

        .nav-links li.active a::after {
            width: 100%;
        }

        /* --- Hero Section (Profil Guru SMPN 2 Prambon) --- */
        .hero-section {
            background-color: #2c5aa0; /* Warna biru utama */
            color: #fff;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom-left-radius: 50% 20px;
            border-bottom-right-radius: 50% 20px;
            margin-bottom: 40px; /* Jarak ke konten berikutnya */
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 150px;
            height: 150px;
            background-color: rgba(255, 255, 255, 0.05);
            transform: rotate(45deg);
            border-radius: 20px;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 200px;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.05);
            transform: rotate(-30deg);
            border-radius: 30px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 20px;
            font-weight: 300;
        }

        /* --- Section Styling (Titles) --- */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .section-title h2 {
            font-size: 36px;
            color: #2c5aa0;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .section-subtitle {
            font-size: 16px;
            color: #ff6b6b; /* Merah */
            font-weight: 500;
        }

        /* --- Guru Gallery (3-column) - Sesuai gambar "Profil Guru.jpg" --- */
        .guru-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 60px;
            position: relative; /* Untuk z-index di atas body shapes */
            z-index: 2; /* Di atas body shapes */
            background-color: #fff; /* Latar belakang untuk konten galeri agar terlihat menonjol */
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .gallery-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .gallery-card img {
            width: 100%;
            height: 200px; /* Tinggi gambar galeri */
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .gallery-card h3 {
            font-size: 20px;
            margin: 15px 0 5px;
            color: #2c5aa0;
            font-weight: 600;
        }

        .gallery-card p {
            font-size: 14px;
            color: #777;
            padding-bottom: 15px;
        }

        /* --- Kepala Sekolah Section --- */
        .kepala-sekolah-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 60px;
            position: relative; /* Untuk background bentuk */
            overflow: hidden; /* Untuk background bentuk */
            z-index: 2; /* Di atas body shapes */
        }

        .kepala-sekolah-section::before {
            content: '';
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
            height: 100px;
            border: 2px solid rgba(0, 0, 0, 0.05);
            transform: rotate(15deg);
            border-radius: 10px;
        }

        .kepala-sekolah-section::after {
            content: '';
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 80px;
            height: 80px;
            border: 2px solid rgba(0, 0, 0, 0.05);
            transform: rotate(-10deg);
            border-radius: 5px;
        }

        .principal-card {
            display: inline-block;
            margin-top: 20px;
            background-color: #f0f8ff; /* Warna latar belakang kartu */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e0eaff;
            max-width: 300px;
            width: 100%;
            position: relative; /* Pastikan di atas bentuk */
            z-index: 1; /* Pastikan di atas bentuk */
        }

        .principal-card img {
            width: 180px;
            height: 240px; /* Tinggi foto kepala sekolah */
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .principal-card h3 {
            font-size: 24px;
            color: #2c5aa0;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .principal-card p {
            font-size: 16px;
            color: #666;
        }

        /* --- Teachers Grid (Guru-Guru) --- */
        .teachers-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 60px;
            position: relative; /* Untuk background bentuk */
            overflow: hidden; /* Untuk background bentuk */
            z-index: 2; /* Di atas body shapes */
        }
        
        .teachers-section::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100px;
            height: 100px;
            border: 2px solid rgba(0, 0, 0, 0.05);
            transform: rotate(-10deg);
            border-radius: 10px;
        }

        .teachers-section::after {
            content: '';
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 80px;
            height: 80px;
            border: 2px solid rgba(0, 0, 0, 0.05);
            transform: rotate(20deg);
            border-radius: 5px;
        }

        .teachers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            margin-top: 40px;
            position: relative; /* Pastikan grid di atas bentuk */
            z-index: 1; /* Pastikan grid di atas bentuk */
        }

        .teacher-card {
            background-color: #f7faff; /* Light blue background for cards */
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .teacher-card img {
            width: 150px; /* Lebar gambar guru */
            height: 180px; /* Tinggi gambar guru */
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .teacher-card h3 {
            font-size: 18px;
            color: #2c5aa0;
            margin: 0 0 5px 0;
            font-weight: 600;
        }

        .teacher-card p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        /* --- Footer Styles (Disesuaikan dari input Anda) --- */
        .footer {
            background-color: #4db6ac; /* Warna hijau teal dari input Anda */
            padding: 20px 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            color: white;
            /* Menggunakan max-width dari container halaman utama untuk konsistensi */
            max-width: 1200px; 
            margin: 50px auto 20px; /* Sesuaikan margin agar sesuai dengan layout keseluruhan */
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
            z-index: 2;
        }

        .info-sekolah {
            flex: 1 1 45%; /* Ambil sekitar 45% lebar */
            min-width: 280px; /* Pastikan tidak terlalu kecil di layar sempit */
        }

        .info-sekolah b {
            display: inline-block;
            margin-top: 10px;
        }

        .lokasi {
            flex: 1 1 45%; /* Ambil sekitar 45% lebar */
            min-width: 280px; /* Pastikan tidak terlalu kecil di layar sempit */
        }

        .lokasi iframe {
            width: 100%;
            height: 160px;
            border-radius: 10px;
            border: none;
        }

        .brand {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .brand img {
            width: 60px;
            margin-right: 15px;
            filter: brightness(0) invert(1); /* Untuk logo putih di background hijau */
        }

        .brand-text {
            font-weight: bold;
            font-size: 1.2em;
        }

        .brand-text small {
            display: block;
            font-weight: normal;
            background-color: white;
            color: #2d837a; /* Warna teks kecil yang kontras */
            padding: 3px 8px;
            border-radius: 5px;
            margin-top: 4px;
            font-size: 12px;
        }


        /* --- Responsiveness --- */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 38px;
            }
            .hero-content p {
                font-size: 18px;
            }

            .guru-gallery {
                grid-template-columns: repeat(2, 1fr);
            }
            .principal-card {
                padding: 20px;
            }
            .principal-card img {
                width: 150px;
                height: 200px;
            }
            .teachers-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
            .teacher-card img {
                width: 120px;
                height: 150px;
            }
            /* Footer responsif */
            .footer {
                padding: 20px;
            }
            .info-sekolah, .lokasi {
                flex: 1 1 100%; /* Satu kolom di layar sedang */
            }
        }

        @media (max-width: 768px) {
            .navbar-content {
                flex-direction: column;
                gap: 15px;
            }
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }
            .nav-links li {
                flex-basis: 45%; /* Two items per row */
                text-align: center;
            }
            .nav-links li a {
                padding: 8px 10px;
                border: 1px solid #eee;
                border-radius: 5px;
                display: block;
            }
            .nav-links li a::after {
                display: none; /* Hide underline on mobile nav */
            }

            .hero-content h1 {
                font-size: 32px;
            }
            .hero-content p {
                font-size: 16px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .guru-gallery {
                grid-template-columns: 1fr; /* Single column on small screens */
            }
            .principal-card img {
                width: 120px;
                height: 160px;
            }
            .teachers-grid {
                grid-template-columns: 1fr; /* Single column on small screens */
            }
            .teacher-card img {
                width: 100px;
                height: 120px;
            }
            /* Footer responsif */
            .footer {
                border-radius: 10px;
                margin: 30px auto 10px;
            }
            .brand img {
                width: 50px;
                margin-right: 10px;
            }
            .brand-text {
                font-size: 1.1em;
            }
            .brand-text small {
                font-size: 11px;
            }
            .info-sekolah p, .lokasi p {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .logo-area img {
                height: 40px;
            }
            .logo-text h1 {
                font-size: 20px;
            }
            .logo-text p {
                font-size: 10px;
            }
            .hero-content h1 {
                font-size: 28px;
            }
            .hero-content p {
                font-size: 14px;
            }
            .section-title h2 {
                font-size: 24px;
            }
            .teacher-card {
                padding: 15px;
            }
            .teacher-card img {
                width: 80px;
                height: 100px;
            }
            .teacher-card h3 {
                font-size: 16px;
            }
            .teacher-card p {
                font-size: 12px;
            }
            /* Footer responsif */
            .footer {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <?php include 'koneksi.php'; // Pastikan file koneksi.php ada di direktori yang sama ?>

    <header class="main-header">
        <div class="container navbar-content">
            <div class="logo-area">
                <img src="img/Logo.jpg" alt="Logo Spendapra" />
                <div class="logo-text">
                    <h1>SPENDAPRA</h1>
                    <p>SMPN 2 PRAMBON</p>
                </div>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tentang.php">Tentang Spendapra</a></li>
                    <li><a href="akademik.php">Akademik</a></li>
                    <li class="active"><a href="profil.php">Profil Guru</a></li>
                    <li><a href="pendaftaran.php">Pendaftaran</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signin.php">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Profil Guru</h1>
            <p>SMPN 2 PRAMBON</p>
        </div>
    </section>

    <main>
        <section class="container" style="margin-top: -80px; position: relative; z-index: 50;">
            <div class="guru-gallery">
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300x200?text=Foto+Grup+1" alt="Foto Kegiatan Guru">
                    <h3>Kegiatan Guru</h3>
                    <p>Momen Kebersamaan</p>
                </div>
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300x200?text=Foto+Grup+2" alt="Foto Siswa Guru">
                    <h3>Siswa & Guru</h3>
                    <p>Interaksi di Kelas</p>
                </div>
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300x200?text=Foto+Grup+3" alt="Foto Event Sekolah">
                    <h3>Event Sekolah</h3>
                    <p>Peringatan Hari Besar</p>
                </div>
            </div>
        </section>

        <section class="kepala-sekolah-section container">
            <div class="section-title">
                <h2>Kepala Sekolah</h2>
                <p class="section-subtitle">SMPN 2 Prambon</p>
            </div>
            <div class="principal-card">
                <img src="img/kepala_sekolah.jpg" alt="Foto Kepala Sekolah">
                <h3>Rusan Dahsyawati</h3>
                <p>Wulandari, S.Pd, M.Pd</p>
            </div>
        </section>

        <section class="teachers-section container">
            <div class="section-title">
                <h2>Guru - Guru</h2>
                <p class="section-subtitle">SMPN 2 Prambon</p>
            </div>
            <div class="teachers-grid">
                <?php
                // Periksa koneksi ke database
                if (!$mysqli) {
                    die("Koneksi database gagal: " . mysqli_connect_error());
                }

                $query_guru = "SELECT * FROM guru ORDER BY nama ASC"; // Ambil semua guru, urutkan berdasarkan nama
                $result_guru = mysqli_query($mysqli, $query_guru);

                if ($result_guru && mysqli_num_rows($result_guru) > 0) {
                    while ($data_guru = mysqli_fetch_assoc($result_guru)) {
                        // Ini adalah bagian KRUSIAL: Membangun path foto guru
                        // Asumsi: 'foto' di database HANYA berisi nama file (contoh: 'candra_dewi.jpg')
                        // dan semua foto guru ada di folder 'img/guru/'
                        $foto_path = 'img/guru/' . htmlspecialchars($data_guru['foto']);

                        // Jika kolom 'foto' di database sudah menyimpan PATH LENGKAP (misal: 'folder/subfolder/gambar.jpg'),
                        // maka gunakan baris di bawah ini dan komentari baris di atas:
                        // $foto_path = htmlspecialchars($data_guru['foto']);
                ?>
                        <div class="teacher-card">
                            <img src="<?php echo $foto_path; ?>" alt="Foto <?php echo htmlspecialchars($data_guru['nama']); ?>">
                            <h3><?php echo htmlspecialchars($data_guru['nama']); ?></h3>
                            <p><?php echo htmlspecialchars($data_guru['mapel']); ?></p>
                        </div>
                <?php
                    }
                } else {
                    echo "<p style='text-align: center; grid-column: 1 / -1; color: #888;'>Tidak ada data guru yang ditemukan.</p>";
                }
                ?>
            </div>
        </section>
    </main>

    <div class="footer">
        <div class="info-sekolah">
            <div class="brand">
                <img src="img/Logo.jpg" alt="Logo Sekolah">
                <div class="brand-text">
                    SPENDAPRA
                    <small>SMPN 2 PRAMBON</small>
                </div>
            </div>
            <p><b>Alamat</b>: Jl. Raya Prambon Kajartengguli, Kec. Prambon, Kab Sidoarjo, Jawa Timur.</p>
            <p>WA: 081233518800<br>
            Instagram: @smpn2_prambon<br>
            Email: Spendapra@gmail.com</p>
        </div>
        <div class="lokasi">
            <p><b>Lokasi Sekolah</b></p>
            <iframe 
                src="https://www.google.com/maps/place/SMPN+2+PRAMBON/@-7.4668017,112.5605438,17z/data=!3m1!4b1!4m6!3m5!1s0x2e780b0029c5ca87:0x2bedf254132eb7fe!8m2!3d-7.4668017!4d112.5631187!16s%2Fg%2F11vmb3xhgm!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoASAFQAw%3D%3D" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>

</body>
</html>