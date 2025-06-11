<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler SMPN 2 Prambon</title>
    <style>
        /* Dasar */
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
          color: #000000;
        }

        body {
          background-color: #f5f5f5;
        }

        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 15px;
        }

        .main-content {
          margin-top: 20px;
          margin-bottom: 40px;
        }

        /* Navbar */
        header {
          background-color: #ffffff;
          border-bottom: 2px solid #e0e0e0;
          padding: 15px 30px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          flex-wrap: wrap;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }

        .logo-container {
          display: flex;
          align-items: center;
        }

        .logo-container img {
          width: 80px;
          height: 80px;
          object-fit: contain;
          margin-right: 15px;
        }

        .logo-text h1 {
          font-size: 24px;
          color: #2ca59c;
          margin-bottom: 2px;
        }

        .logo-text p {
          font-size: 14px;
          color: #555;
          margin: 0;
        }

        nav ul {
          list-style: none;
          display: flex;
          gap: 25px;
          align-items: center;
        }

        nav ul li {
          list-style: none;
        }

        nav ul li a {
          text-decoration: none;
          color: #000000;
          font-weight: 500;
          padding: 8px 14px;
          transition: all 0.3s ease;
          border-radius: 4px;
        }

        nav ul li a:hover,
        nav ul li.active a {
          background-color: #2ca59c;
          color: #ffffff;
        }

        /* Banner Section */
        .banner-section {
          padding: 30px;
          background-color: #f8f9fa;
        }

        .banner-container {
          position: relative;
          display: flex;
          gap: 20px;
          align-items: flex-start;
        }

        .banner-images {
          flex: 1;
          display: grid;
          grid-template-columns: 2fr 1fr;
          grid-template-rows: auto auto;
          gap: 10px;
        }

        .main-banner {
          grid-row: span 2;
          width: 100%;
          height: 300px;
          object-fit: cover;
          border-radius: 10px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .small-banner {
          width: 100%;
          height: 145px;
          object-fit: cover;
          border-radius: 8px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .ekstrakurikuler-badge {
          background: linear-gradient(135deg, #ff8c42, #ffa566);
          color: white;
          padding: 20px 25px;
          border-radius: 15px;
          text-align: center;
          box-shadow: 0 6px 20px rgba(255, 140, 66, 0.3);
          min-width: 200px;
          position: relative;
        }

        .ekstrakurikuler-badge::before {
          content: "";
          position: absolute;
          left: -10px;
          top: 50%;
          transform: translateY(-50%);
          width: 0;
          height: 0;
          border-top: 10px solid transparent;
          border-bottom: 10px solid transparent;
          border-right: 10px solid #ff8c42;
        }

        .ekstrakurikuler-badge h2 {
          font-size: 18px;
          margin-bottom: 5px;
          font-weight: bold;
          color: white;
        }

        .ekstrakurikuler-badge p {
          font-size: 12px;
          opacity: 0.9;
          color: white;
        }

        /* Content Section */
        .content-section {
          padding: 40px 30px;
        }

        .content-wrapper {
          max-width: 1000px;
          margin: 0 auto;
        }

        .text-content h2 {
          font-size: 28px;
          color: #2c5aa0;
          margin-bottom: 20px;
          font-weight: bold;
        }

        .text-content p {
          font-size: 14px;
          line-height: 1.8;
          margin-bottom: 15px;
          text-align: justify;
          color: #555;
        }

        .ekstrakurikuler-title {
          text-align: center;
          margin: 40px 0;
          padding: 20px;
          background: linear-gradient(135deg, #e3f2fd, #f8f9fa);
          border-radius: 10px;
        }

        .ekstrakurikuler-title h3 {
          font-size: 24px;
          color: #2c5aa0;
          margin-bottom: 5px;
          font-weight: bold;
        }

        .ekstrakurikuler-title p {
          font-size: 14px;
          color: #ff8c42;
          margin: 0;
        }

        /* Activities Grid */
        .activities-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
          gap: 25px;
          margin-top: 30px;
        }

        .activity-card {
          background: white;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          border: 1px solid #e8f4fd;
        }

        .activity-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .activity-card img {
          width: 100%;
          height: 150px;
          object-fit: cover;
        }

        .activity-card h4 {
          padding: 15px;
          text-align: center;
          font-size: 16px;
          color: #2c5aa0;
          font-weight: 600;
          background-color: #f8f9fa;
          margin: 0;
        }

        /* tampilan ekstrakurikuler */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Ubah dari auto-fit menjadi 2 kolom tetap */
            gap: 20px;
            margin-top: 30px;
        }


        .grid-item {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 15px;
        }

        .grid-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .grid-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .grid-item h3 {
            font-size: 16px;
            color: #2c5aa0;
            margin: 0;
        }

        @media (max-width: 480px) {
          .logo-text h1 {
            font-size: 14px;
          }

          .activities-grid {
            grid-template-columns: repeat(2, 1fr);
          }

          .activity-card h4 {
            font-size: 14px;
            padding: 10px;
          }

          .activity-card img {
            height: 120px;
          }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="img/Logo.jpg" alt="Logo Spendapra" />
            <div class="logo-text">
                <h1>SPENDAPRA</h1>
                <p>SMPN 2 PRAMBON</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tentang.php">Tentang Spendapra</a></li>
                <li class="active"><a href="akademik.php">Akademik</a></li>
                <li><a href="profil_guru.php">Profil Guru</a></li>
                <li><a href="pendaftaran.php">Pendaftaran</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signin.php">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Banner Section -->
        <section class="banner-section">
            <div class="banner-container">
                <div class="banner-images">
                    <img src="/api/placeholder/500/300" alt="Kegiatan Sekolah" class="main-banner">
                    <img src="/api/placeholder/200/150" alt="Kegiatan 2" class="small-banner">
                    <img src="/api/placeholder/200/150" alt="Kegiatan 3" class="small-banner">
                </div>
                <div class="ekstrakurikuler-badge">
                    <h2>EKSTRAKURIKULER</h2>
                    <p>SMP NEGERI 2 PRAMBON</p>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <section class="content-section">
            <div class="content-wrapper">
                <div class="text-content">
                    <h2>Ekstrakurikuler</h2>
                    <p>
                        Kegiatan ekstrakurikuler merupakan bagian penting dari proses pendidikan yang 
                        berlangsung untuk mengembangkan potensi, bakat, dan minat siswa secara optimal. 
                        Melalui berbagai kegiatan ini siswa para pelajar siswa dapat mengasah 
                        kemampuan, menambah wawasan, membangun karakter, meningkatkan prestasi, dan 
                        memperoleh pengalaman di luar pembelajaran di kelas.
                    </p>
                    <p>
                        Berdasarkan Undang - Undang Nomor 20 Tahun 2003 Pasal 12 ayat (1) huruf b, 
                        bahwa peserta didik berhak mendapatkan pelayanan sesuai bakat dan minatnya. 
                        Hal ini diperkuat dengan Permendikbud Nomor 62 Tahun 2014 dan Permendikbud 
                        Nomor 111 Tahun 2014, yang menyatakan bahwa kegiatan ekstrakurikuler 
                        merupakan kegiatan yang dilaksanakan dalam rangka pengembangan kurikulum yang 
                        dilakukan di luar jam belajar kegiatan intrakurikuler dan kegiatan kokurikuler 
                        di bawah bimbingan dan pengawasan satuan pendidikan sesuai dengan 
                        Kurikulum 2013.
                    </p>
                    
                    <div class="ekstrakurikuler-title">
                        <h3>EKSTRAKURIKULER</h3>
                        <p>SMP NEGERI 2 PRAMBON</p>
                    </div>
                </div>

                <!-- Activities Grid -->
                <div class="grid-container">
                  <?php
                  include ('koneksi.php');
                  $result = mysqli_query($mysqli, "SELECT * FROM ekstrakurikuler") or die (mysqli_error($mysqli));

                  while($data = mysqli_fetch_array($result)){
                      ?>
                      <div class="grid-item">
                          <img src="<?php echo $data['foto'] ?>">
                          <strong><h3><?php echo $data['nama']; ?></h3></strong>
                      </div>
                  <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>