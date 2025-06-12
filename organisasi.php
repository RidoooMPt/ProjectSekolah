<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akademik - organisasi</title>
  <link rel="stylesheet" href="css/organisasi.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <!-- Navbar -->
  <header>
    <div class="logo-container">
        <img src="img/logo.png" alt="Logo Spendapra" />
        <div class="logo-text">
            <h1>SPENDAPRA</h1>
            <p>SMPN 2 PRAMBON</p>
        </div>
        <div class="hamburger" id="hamburger">
            <i class="fas fa-ellipsis-v"></i>
        </div>
    </div>
    <nav>
        <ul class="active">
            <li><a href="index.php">Home</a></li>
            <li><a href="tentang.php">Tentang Spendapra</a></li>
            <li><a href="akademik.php">Akademik</a></li>
            <li><a href="profil_guru.php">Profil Guru</a></li>
            <li><a href="pendaftaran.php">Pendaftaran</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signin.php">Sign In</a></li>
        </ul>
    </nav>
</header>
  <!-- Organisasi -->
  <div class="container">
    <div class="photo-section">
        <div class="main-photo">
            <img src="img/exkul.png" alt="Logo Spendapra" />
        </div>
        
        <div class="overlay-photos">
            <div class="overlay-photo photo-1">
                <img src="img/exkul3.png" alt="Logo Spendapra" />
            </div>
            
            <div class="overlay-photo photo-2">
                <img src="img/exkul2.png" alt="Logo Spendapra" />
            </div>
            
            <div class="overlay-photo photo-3">
                <img src="img/exkul1.png" alt="Logo Spendapra" />
            </div>
        </div>
    </div>

    <div class="info-section">
        <div class="info-card">
            <div class="info-text">
                <h1>EKSTRAKULIKULER</h1>
                <h2>SMPN 2</h2>
                <h3>PRAMBON</h3>
            </div>
        </div>
    </div>
</div>
<!-- Extrakulikuler -->
 <section>
    <section class="Profil-sekolah">
        <div class="judul">
          <h2>SMPN 2 Prambon Sidoarjo</h2>
        </div>
          <div class="welcome-text">
            <p>Kegiatan ekstrakurikuler merupakan bagian penting dari proses pendidikan yang bertujuan untuk mengembangkan potensi, bakat, dan minat siswa secara optimal. Melalui berbagai kegiatan di luar jam pelajaran, siswa dapat mengasah kemampuan, membentuk karakter, menumbuhkan semangat kerja sama, dan meningkatkan kemandirian.</p>

            <p>Berdasarkan Undang-Undang Nomor 20 Tahun 2003 Pasal 12 ayat (1) huruf b, setiap peserta didik berhak mendapatkan pendidikan sesuai bakat dan minatnya. Hal ini diperkuat dengan Permendikbud Nomor 62 Tahun 2014 dan Permendikbud Nomor 81A Tahun 2013, yang menyatakan bahwa kegiatan ekstrakurikuler merupakan bagian integral dari kurikulum dan pengembangan diri dalam Kurikulum 2013.</p>
          </div>
        </div>
 </section>
 <!-- list extra -->
  <section>
    <div class="container-list">
        <h1 class="title-list">Aktivitas Ekstrakurikuler</h1>
        <h1 class="subtitle-list">SMPN 2 Prambon</h1>
        
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
   <!-- footer -->
   <footer>
        <div class="footer-container">
            <div class="header">
                <img src="img/logo.png" alt="Logo SMPN 2 Prambon" class="logo">
                <div class="title">
                    <h1>SPENDAPRA</h1>
                    <div class="badge">SMPN 2 PRAMBON</div>
                </div>
            </div>
            
            <div class="card">
                <div class="contact-info">
                    <p><b>Alamat :</b> Jl. Raya Prambon Kajartengguli, Kec. Prambon, Kab Sidoarjo, Jawa Timur.</p>
                    <p><b>WA :</b> 081233518800</p>
                    <p><b>Instagram :</b> @smpn2_prambon</p>
                    <p><b>Email :</b> Spendapra@gmail.com</p>
                </div>
                
                <div class="map-section">
                    <h2>Lokasi Sekolah</h2>
                    <iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506309.0252272155!2d112.59951496494749!3d-7.516003256430377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b0029c5ca87%3A0x2bedf254132eb7fe!2sSMPN%202%20PRAMBON!5e0!3m2!1sid!2sid!4v1749081920833!5m2!1sid!2sid" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>  
            </div>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const hamburger = document.getElementById('hamburger');
      const navList = document.querySelector('nav ul');
      if (hamburger && navList) {
        hamburger.addEventListener('click', function () {
          navList.classList.toggle('active');
        });
      }
    });
  </script>
</body>
</html>