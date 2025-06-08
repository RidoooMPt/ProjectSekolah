<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPENDAPRA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            font-size: 14px; /* Reduced base font size for 125% zoom */
        }

        /* Header - Adjusted for 125% zoom */
        .header {
  background-color: #ffffff;
  border-bottom: 2px solid #e0e0e0;
  padding: 15px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
}

        .nav-container {
            max-width: 1100px; /* Slightly reduced max-width */
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1.6rem; /* Adjusted padding */
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px; /* Reduced gap */
        }

        .logo img {
            width: 48px; /* Reduced from 60px */
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
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

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            width: 22px; /* Slightly reduced */
            height: 3px;
            background: #333;
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Hero Section - Adjusted for 125% zoom */
        .hero {
            background: linear-gradient(rgba(32, 178, 170, 0.8), rgba(32, 178, 170, 0.8)), 
                        url('Bgron.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 0; /* Reduced from 8rem */
            min-height: 65vh; /* Reduced from 70vh */
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 700px; /* Reduced from 800px */
            margin: 0 auto;
            padding: 0 1.6rem;
        }

        .hero h1 {
            font-size: 2.8rem; /* Reduced from 3.5rem */
            margin-bottom: 1.2rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.1rem; /* Reduced from 1.3rem */
            margin-bottom: 1.6rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        /* Stats Section - Adjusted for 125% zoom */
        .stats {
            background: white;
            padding: 4rem 0; /* Reduced from 5rem */
        }

        .stats-container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem; /* Reduced gap */
            padding: 0 1.6rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem; /* Reduced padding */
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 65px; /* Reduced from 80px */
            height: 65px;
            background: linear-gradient(135deg, #20b2aa, #2ca59c);
            border-radius: 50%;
            margin: 0 auto 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.6rem; /* Reduced from 2rem */
        }

        .stat-item h3 {
            color: #20b2aa;
            font-size: 1rem; /* Reduced from 1.2rem */
            margin-bottom: 0.6rem;
            font-weight: bold;
        }

        .stat-item p {
            color: #666;
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Leadership Section - Adjusted for 125% zoom */
        .leadership {
            background: #f8f9fa;
            padding: 5rem 0; /* Reduced from 6rem */
        }

        .leadership-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1.6rem;
        }

        .leadership-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem; /* Reduced gap */
            align-items: center;
        }

        .leadership-image {
            text-align: center;
        }

        .leadership-image img {
            width: 220px; /* Reduced from 280px */
            height: 280px; /* Reduced from 350px */
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .signature {
            margin-top: 1.5rem;
            font-style: italic;
            color: #000;
            font-size: 0.95rem; /* Reduced from 1.1rem */
            font-weight: bold;
        }

        .leadership-text h2 {
            color: #20b2aa;
            margin-bottom: 0.8rem;
            font-size: 2rem; /* Reduced from 2.5rem */
            font-weight: bold;
        }

        .leadership-text h3 {
            color: #333;
            margin-bottom: 1.5rem;
            font-size: 1.2rem; /* Reduced from 1.4rem */
        }

        .leadership-text p {
            margin-bottom: 1.2rem;
            line-height: 1.8;
            color: #666;
            font-size: 0.95rem; /* Reduced from 1.1rem */
        }

        /* Programs Section - Adjusted for 125% zoom */
        .programs {
            background: white;
            padding: 5rem 0; /* Reduced from 6rem */
        }

        .programs-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1.6rem;
        }

        .program-item {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem; /* Reduced gap */
            align-items: center;
            margin-bottom: 3rem;
        }

        .program-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .program-image iframe {
            width: 100%;
            height: 240px; /* Reduced from 300px */
            border: none;
            border-radius: 15px;
        }

        .program-content h3 {
            color: #20b2aa;
            font-size: 1.6rem; /* Reduced from 2rem */
            margin-bottom: 1.2rem;
            font-weight: bold;
        }

        .program-content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-size: 0.95rem; /* Reduced from 1.1rem */
        }

        .btn {
            background: linear-gradient(135deg, #20b2aa, #2ca59c);
            color: white;
            padding: 0.8rem 2rem; /* Slightly reduced padding */
            border: none;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(32, 178, 170, 0.3);
        }

        /* Contact Section - Adjusted for 125% zoom */
        .contact {
            background: #f8f9fa;
            padding: 5rem 0; /* Reduced from 6rem */
        }

        .contact-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1.6rem;
        }

        .contact h2 {
            text-align: center;
            color: #20b2aa;
            margin-bottom: 3rem; /* Reduced from 4rem */
            font-size: 2rem; /* Reduced from 2.5rem */
            font-weight: bold;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-form {
            background: white;
            padding: 2.5rem; /* Reduced from 3rem */
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 1.5rem; /* Reduced from 2rem */
        }

        .form-group label {
            display: block;
            margin-bottom: 0.6rem;
            color: #333;
            font-weight: 600;
            font-size: 0.95rem; /* Reduced from 1.1rem */
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem; /* Reduced from 1rem */
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 0.9rem; /* Reduced from 1rem */
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #20b2aa;
        }

        .form-group textarea {
            height: 120px; /* Reduced from 150px */
            resize: vertical;
        }

        .contact-info {
            background: linear-gradient(135deg, #20b2aa, #2ca59c);
            color: white;
            padding: 2.5rem; /* Reduced from 3rem */
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(32, 178, 170, 0.3);
        }

        .contact-info h3 {
            margin-bottom: 1.5rem;
            font-size: 1.3rem; /* Reduced from 1.5rem */
        }

        .contact-info p {
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95rem; /* Reduced from 1.1rem */
        }

        .contact-map {
            margin-top: 1.5rem;
            height: 160px; /* Reduced from 200px */
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
        }

        /* Footer - Adjusted for 125% zoom */
        footer {
  background-color: #f5f5f5;
  padding-top: 40px;
  padding-bottom: 40px;
}

.back-link {
  color: #777;
  margin-left: 45px;
  margin-bottom: 15px;
  display: block;
  text-decoration: none;
}

.footer-container {
  max-width: 1000px;
  margin: 0 auto;
  position: relative;
}

.header {
  background-color: white;
  padding: 15px 20px;
  border-radius: 15px;
  display: inline-flex;
  align-items: center;
  position: absolute;
  top: -30px;
  left: 45px;
  z-index: 2;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.logo {
  width: 60px;
  height: 60px;
  object-fit: contain;
  margin-right: 15px;
}

.title {
  display: flex;
  flex-direction: column;
}

.title h1 {
  color: #00a896;
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 5px;
}

.badge {
  background-color: #00a896;
  color: white;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 14px;
  display: inline-block;
}

.card {
  background-color: #00a896;
  border-radius: 15px;
  padding: 40px 45px;
  margin-top: 30px;
  display: flex;
  justify-content: space-between;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.contact-info {
  flex: 1;
  margin-top: 50px;
}

.contact-info p {
  margin-bottom: 12px;
  font-size: 16px;
  line-height: 1.6;
  color: #ffffff;
}

.contact-info p b {
  color: #ffffff;
  font-weight: bold;
}

.map-section {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.map-section h2 {
  margin-bottom: 15px;
  font-size: 18px;
  font-weight: normal;
  align-self: flex-end;
  color: #ffffff;
}

.map {
  width: 100%;
  max-width: 300px;
  height: 200px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.map img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  font-size: large;
  font-weight: bold;
}
        /* Enhanced Responsive Design for 125% zoom */
        @media (max-width: 1200px) {
            .nav-container {
                max-width: 95%;
            }
            
            .hero h1 {
                font-size: 2.4rem;
            }
            
            .leadership-content,
            .program-item,
            .contact-content,
            .footer-card {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 900px) {
            /* Mobile Navigation */
            .menu-toggle {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 1.5rem;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }

            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .nav-menu li {
                margin: 0.4rem 0;
            }

            .hero {
                padding: 3rem 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .leadership-text h2,
            .contact h2 {
                font-size: 1.8rem;
            }

            .program-content h3 {
                font-size: 1.4rem;
            }

            .contact-form,
            .contact-info {
                padding: 1.8rem;
            }

            .footer-card {
                padding: 2rem;
            }

            .program-image iframe {
                height: 200px;
            }
        }

        @media (max-width: 600px) {
            .nav-container {
                padding: 0 1rem;
            }

            .hero-content,
            .stats-container,
            .leadership-container,
            .programs-container,
            .contact-container,
            .footer-container {
                padding: 0 1rem;
            }

            .hero h1 {
                font-size: 1.6rem;
            }

            .logo img {
                width: 40px;
                height: 40px;
            }

            .logo-text h1 {
                font-size: 1.2rem;
            }

            .logo-text p {
                font-size: 0.7rem;
            }
        }

        /* Additional 125% zoom optimizations */
        @media (min-width: 1400px) {
            body {
                font-size: 15px; /* Slightly larger base font for very large screens */
            }
        }

        /* Ensure text remains readable at all zoom levels */
        h1, h2, h3, h4, h5, h6 {
            line-height: 1.3;
        }

        p, li {
            line-height: 1.7;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <img src="img/Logo.jpg" alt="Logo">
                <div class="logo-text">
                    <h1>SPENDAPRA</h1>
                    <p>SMPN 2 PRAMBON</p>
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="index2">Home</a></li>
                    <li><a href="tentang">Tentang Spendapra</a></li>
                    <li><a href="akademik">Akademik</a></li>
                    <li><a href="profil">Profil Guru</a></li>
                    <li><a href="pendaftaran">Pendaftaran</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="Signin">Sign In</a></li>
                </ul>
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Membangun Generasi Berkarakter</h1>
            <p>SPENDAPRA berkomitmen untuk memberikan pendidikan berkualitas yang membentuk karakter dan mengembangkan potensi setiap siswa.</p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-icon">🎓</div>
                <h3>ALUMNI BERPRESTASI</h3>
                <p>Lebih dari 5000 alumni yang tersebar di berbagai bidang profesi</p>
            </div>
            <div class="stat-item">
                <div class="stat-icon">👥</div>
                <h3>SISWA AKTIF</h3>
                <p>Saat ini melayani lebih dari 2000 siswa dari berbagai jenjang</p>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🏆</div>
                <h3>PRESTASI</h3>
                <p>Ratusan prestasi akademik dan non-akademik tingkat nasional</p>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="leadership" id="tentang">
        <div class="leadership-container">
            <div class="leadership-content">
                <div class="leadership-image">
                    <img src="img/kepala-sekolah.jpg" alt="Kepala Sekolah">                    
                    <div class="signature">
                        <p>Kepala Sekolah,<br>Ruse Rahmawati Wulandari, S.Pd., M.Pd</p>
                    </div>
                </div>
                <div class="leadership-text">
                    <h2>Sambutan Kepala Sekolah</h2>
                    <h3>Ruse Rahmawati Wulandari, S.Pd., M.Pd</h3>
                    <p>Selamat datang di SPENDAPRA. Sebagai institusi pendidikan yang telah berdiri selama lebih dari 25 tahun, kami berkomitmen untuk terus memberikan pendidikan berkualitas tinggi yang tidak hanya mengembangkan kemampuan akademik siswa, tetapi juga membentuk karakter dan akhlak mulia.</p>
                    <p>Dengan dukungan tenaga pendidik yang profesional dan fasilitas yang memadai, kami percaya bahwa setiap siswa memiliki potensi untuk meraih kesuksesan dalam bidang yang mereka minati. Mari bersama-sama membangun generasi masa depan yang cerdas, berkarakter, dan berdaya saing global.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs" id="program">
        <div class="programs-container">
            <div class="program-item">
                <div class="program-image">
                    <iframe src="https://www.youtube.com/embed/H0EaKPaqt4Y?si=dLtxtaLGoka7qenn" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="program-content">
                    <h3>SMP SPENDAPRA</h3>
                    <p>Program pendidikan menengah pertama yang mengintegrasikan kurikulum nasional dengan nilai-nilai keislaman. Dilengkapi dengan fasilitas modern dan tenaga pengajar yang kompeten untuk mengembangkan potensi akademik dan karakter siswa.</p>
                    <a href="#" class="btn">SELENGKAPNYA</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="kontak">
        <div class="contact-container">
            <h2>KRITIK & SARAN</h2>
            <div class="contact-content">
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subjek">Subjek</label>
                            <input type="text" id="subjek" name="subjek" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea id="pesan" name="pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn">KIRIM PESAN</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="header">
                <img src="img/Logo.jpg" alt="Logo SMPN 2 Prambon" class="logo">
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
                    <iframe 
                    src="https://www.google.com/maps/place/SMPN+2+PRAMBON/@-7.4668017,112.5605438,17z/data=!3m1!4b1!4m6!3m5!1s0x2e780b0029c5ca87:0x2bedf254132eb7fe!8m2!3d-7.4668017!4d112.5631187!16s%2Fg%2F11vmb3xhgm!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoASAFQAw%3D%3D" 
                    allowfullscreen="" 
                    loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih atas masukan Anda. Pesan telah terkirim!');
            this.reset();
        });

        // Add scroll effect to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'white';
                header.style.backdropFilter = 'none';