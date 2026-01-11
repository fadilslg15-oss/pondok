<?php
$page = isset($_GET['p']) ? $_GET['p'] : 'home';
$title = "Pondok Pesantren| " . ucfirst(str_replace('-', ' ', $page));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1a5d1a; 
            --secondary: #f39c12; 
            --light: #f8f9fa;
            --dark: #2c3e50;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #fff; color: var(--dark); line-height: 1.6; }

        /* HEADER & NAVIGATION */
        header { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 0 5%; height: 85px; }
        
        /* LOGO STYLING */
        .logo-container { display: flex; align-items: center; text-decoration: none; }
        .logo-img { 
            height: 55px; /* Ukuran tinggi logo */
            width: auto; 
            margin-right: 15px; /* Jarak antara logo dan teks */
        }
        .logo-text { font-weight: 700; color: var(--primary); font-size: 1.3rem; line-height: 1.2; }

        .nav-links { list-style: none; display: flex; height: 100%; }
        .nav-item { position: relative; height: 100%; }
        .nav-item > a { 
            text-decoration: none; color: #444; padding: 0 15px; font-size: 0.8rem; 
            font-weight: 600; height: 100%; display: flex; align-items: center; text-transform: uppercase;
        }
        .nav-item:hover > a { color: var(--primary); background: #f9f9f9; }

        /* DROPDOWN */
        .dropdown {
            position: absolute; top: 85px; left: 0; background: #fff;
            min-width: 220px; display: none; flex-direction: column;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1); border-top: 3px solid var(--primary);
        }
        .dropdown a { 
            padding: 12px 20px; text-decoration: none; color: #555; font-size: 0.85rem;
            border-bottom: 1px solid #eee; transition: 0.3s;
        }
        .dropdown a:hover { background: var(--primary); color: #fff; padding-left: 25px; }
        .nav-item:hover .dropdown { display: flex; }

        /* CONTENT AREA */
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1590076215667-873d96c89bb0?auto=format&fit=crop&q=80&w=1500'); 
            background-size: cover; background-position: center; 
            color: #fff; text-align: center; padding: 100px 50px; 
        }
        .container { width: 90%; max-width: 1100px; margin: 50px auto; min-height: 400px; }
        h2 { color: var(--primary); margin-bottom: 20px; border-left: 5px solid var(--secondary); padding-left: 15px; }
        
        .content-grid { display: grid; grid-template-columns: 1fr; gap: 30px; }
        @media (min-width: 992px) { .content-grid { grid-template-columns: 2fr 1fr; } }
        
        .sidebar { background: var(--light); padding: 25px; border-radius: 10px; height: fit-content; }
        .sidebar img { width: 100%; border-radius: 8px; margin-bottom: 15px; }

        footer { background: #1a1a1a; color: #999; padding: 40px 5% 20px; text-align: center; font-size: 0.8rem; }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <a href="?p=home" class="logo-container">
            <img src="logo pondok.jpg" alt="Logo Pesantren" class="logo-img">
            <div class="logo-text">Sirojussu'adai<br><span style="font-size: 0.9rem; color: var(--secondary);"></span></div>
        </a>
        
        <ul class="nav-links">
            <li class="nav-item"><a href="?p=home">Home</a></li>
            <li class="nav-item">
                <a href="#">Tentang Kami ▾</a>
                <div class="dropdown">
                    <a href="?p=sejarah">Sejarah</a>
                    <a href="?p=visi-misi">Visi & Misi</a>
                    <a href="?p=nilai-organisasi">Nilai Organisasi</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#">Kepengurusan ▾</a>
                <div class="dropdown">
                    <a href="?p=struktur-organisasi">Struktur Organisasi</a>
                    <a href="?p=tugas-fungsi">Tugas & Fungsi</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#">Program Kerja ▾</a>
                <div class="dropdown">
                    <a href="?p=tahunan">Tahunan</a>
                    <a href="?p=per-divisi">Per Divisi</a>
                </div>
            </li>
            <li class="nav-item"><a href="?p=agenda">Agenda</a></li>
            <li class="nav-item"><a href="?p=berita">Berita</a></li>
            <li class="nav-item"><a href="?p=dokumentasi">Dokumentasi</a></li>
            <li class="nav-item"><a href="?p=download">Download</a></li>
            <li class="nav-item"><a href="?p=kontak">Kontak</a></li>
        </ul>
    </nav>
</header>

<div class="hero">
    <h1>Selamat Datang di Al-Hikmah</h1>
    <p>Integrasi Keilmuan Pesantren dan Kecakapan Digital</p>
</div>

<div class="container">
    <div class="content-grid">
        <div class="main-content">
            <?php
            switch ($page) {
                case 'sejarah':
                    echo "<h2>Sejarah Pesantren</h2>";
                    echo "<p>Didirikan dengan misi luhur untuk menjaga tradisi keilmuan Islam...</p>";
                    echo "<img src='https://images.unsplash.com/photo-1540959733332-e94e1bf3253d?w=800' style='width:100%; border-radius:10px; margin-top:20px;'>";
                    break;
                case 'kontak':
                    echo "<h2>Kontak Kami</h2>";
                    echo "<p>Alamat: Jl. Pesantren Siber No. 1, Cirebon</p><p>WA: 0812-3456-7890</p>";
                    break;
                case 'home':
                default:
                    echo "<h2>Visi Masa Depan Pesantren</h2>";
                    echo "<p>Pondok Pesantren Al-Hikmah Siber hadir sebagai solusi pendidikan di era industri 4.0. Kami mengkombinasikan metode sorogan dan bandongan dengan kurikulum teknologi informasi modern.</p>";
                    break;
            }
            ?>
        </div>
        
        <div class="sidebar">
            <h3>Agenda Terdekat</h3>
            <hr style="margin: 10px 0; opacity: 0.2;">
            <p><strong>15 Jan 2026</strong> - Webinar Dakwah Digital</p>
            <p><strong>20 Jan 2026</strong> - Tes Hafalan Santri Baru</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Pondok Pesantren Al-Hikmah Siber. Terinspirasi dari UINSSC.</p>
</footer>

</body>
</html>
$title = "Pondok Pesantren Al-Hikmah Siber | " . ucfirst(str_replace('-', ' ', $page));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1a5d1a; 
            --secondary: #f39c12; 
            --light: #f8f9fa;
            --dark: #2c3e50;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #fff; color: var(--dark); line-height: 1.6; }

        /* HEADER & NAVIGATION */
        header { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 0 5%; height: 85px; }
        
        /* LOGO STYLING */
        .logo-container { display: flex; align-items: center; text-decoration: none; }
        .logo-img { 
            height: 55px; /* Ukuran tinggi logo */
            width: auto; 
            margin-right: 15px; /* Jarak antara logo dan teks */
        }
        .logo-text { font-weight: 700; color: var(--primary); font-size: 1.3rem; line-height: 1.2; }

        .nav-links { list-style: none; display: flex; height: 100%; }
        .nav-item { position: relative; height: 100%; }
        .nav-item > a { 
            text-decoration: none; color: #444; padding: 0 15px; font-size: 0.8rem; 
            font-weight: 600; height: 100%; display: flex; align-items: center; text-transform: uppercase;
        }
        .nav-item:hover > a { color: var(--primary); background: #f9f9f9; }

        /* DROPDOWN */
        .dropdown {
            position: absolute; top: 85px; left: 0; background: #fff;
            min-width: 220px; display: none; flex-direction: column;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1); border-top: 3px solid var(--primary);
        }
        .dropdown a { 
            padding: 12px 20px; text-decoration: none; color: #555; font-size: 0.85rem;
            border-bottom: 1px solid #eee; transition: 0.3s;
        }
        .dropdown a:hover { background: var(--primary); color: #fff; padding-left: 25px; }
        .nav-item:hover .dropdown { display: flex; }

        /* CONTENT AREA */
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1590076215667-873d96c89bb0?auto=format&fit=crop&q=80&w=1500'); 
            background-size: cover; background-position: center; 
            color: #fff; text-align: center; padding: 100px 50px; 
        }
        .container { width: 90%; max-width: 1100px; margin: 50px auto; min-height: 400px; }
        h2 { color: var(--primary); margin-bottom: 20px; border-left: 5px solid var(--secondary); padding-left: 15px; }
        
        .content-grid { display: grid; grid-template-columns: 1fr; gap: 30px; }
        @media (min-width: 992px) { .content-grid { grid-template-columns: 2fr 1fr; } }
        
        .sidebar { background: var(--light); padding: 25px; border-radius: 10px; height: fit-content; }
        .sidebar img { width: 100%; border-radius: 8px; margin-bottom: 15px; }

        footer { background: #1a1a1a; color: #999; padding: 40px 5% 20px; text-align: center; font-size: 0.8rem; }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <a href="?p=home" class="logo-container">
            <img src="https://cdn-icons-png.flaticon.com/512/2641/2641434.png" alt="Logo Pesantren" class="logo-img">
            <div class="logo-text">AL-HIKMAH<br><span style="font-size: 0.9rem; color: var(--secondary);">SIBER</span></div>
        </a>
        
        <ul class="nav-links">
            <li class="nav-item"><a href="?p=home">Home</a></li>
            <li class="nav-item">
                <a href="#">Tentang Kami ▾</a>
                <div class="dropdown">
                    <a href="?p=sejarah">Sejarah</a>
                    <a href="?p=visi-misi">Visi & Misi</a>
                    <a href="?p=nilai-organisasi">Nilai Organisasi</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#">Kepengurusan ▾</a>
                <div class="dropdown">
                    <a href="?p=struktur-organisasi">Struktur Organisasi</a>
                    <a href="?p=tugas-fungsi">Tugas & Fungsi</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#">Program Kerja ▾</a>
                <div class="dropdown">
                    <a href="?p=tahunan">Tahunan</a>
                    <a href="?p=per-divisi">Per Divisi</a>
                </div>
            </li>
            <li class="nav-item"><a href="?p=agenda">Agenda</a></li>
            <li class="nav-item"><a href="?p=berita">Berita</a></li>
            <li class="nav-item"><a href="?p=dokumentasi">Dokumentasi</a></li>
            <li class="nav-item"><a href="?p=download">Download</a></li>
            <li class="nav-item"><a href="?p=kontak">Kontak</a></li>
        </ul>
    </nav>
</header>

<div class="hero">
    <h1>Selamat Datang di Al-Hikmah</h1>
    <p>Integrasi Keilmuan Pesantren dan Kecakapan Digital</p>
</div>

<div class="container">
    <div class="content-grid">
        <div class="main-content">
            <?php
            switch ($page) {
                case 'sejarah':
                    echo "<h2>Sejarah Pesantren</h2>";
                    echo "<p>Didirikan dengan misi luhur untuk menjaga tradisi keilmuan Islam...</p>";
                    echo "<img src='https://images.unsplash.com/photo-1540959733332-e94e1bf3253d?w=800' style='width:100%; border-radius:10px; margin-top:20px;'>";
                    break;
                case 'kontak':
                    echo "<h2>Kontak Kami</h2>";
                    echo "<p>Alamat: Jl. Pesantren Siber No. 1, Cirebon</p><p>WA: 0812-3456-7890</p>";
                    break;
                case 'home':
                default:
                    echo "<h2>Visi Masa Depan Pesantren</h2>";
                    echo "<p>Pondok Pesantren Al-Hikmah Siber hadir sebagai solusi pendidikan di era industri 4.0. Kami mengkombinasikan metode sorogan dan bandongan dengan kurikulum teknologi informasi modern.</p>";
                    break;
            }
            ?>
        </div>
        
        <div class="sidebar">
            <h3>Agenda Terdekat</h3>
            <hr style="margin: 10px 0; opacity: 0.2;">
            <p><strong>15 Jan 2026</strong> - Webinar Dakwah Digital</p>
            <p><strong>20 Jan 2026</strong> - Tes Hafalan Santri Baru</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Pondok Pesantren Al-Hikmah Siber. Terinspirasi dari UINSSC.</p>
</footer>

</body>
</html>