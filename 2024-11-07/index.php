<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 BUDURAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpg" alt=""></a>
            </div>
            <div class="sekolah">
                <h2>SMPN 2 BUDURAN</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=Home">Home</li></a>
                    <li><a href="?menu=Sejarah">Sejarah</li></a>
                    <li><a href="?menu=Kegiatan">Kegiatan</li></a>
                    <li><a href="?menu=Jadwal">jadwal</li></a>
                    <li><a href="?menu=Galeri">Galeri</li></a>
                    <li><a href="?menu=Kontak">kontak</li></a>
                </ul>
            </div>
        </div>
        <div class="konten">
            <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    echo $menu;
                    if ($menu=='Home') {
                        require_once('pages/Home.php');
                    }
                    if ($menu=='Sejarah') {
                        require_once('pages/Sejarah.php');
                    }
                    if ($menu=='Galeri') {
                        require_once('pages/Galeri.php');
                    }
                    if ($menu=='Jadwal') {
                        require_once('pages/Jadwal.php');
                    }
                    if ($menu=='Kontak') {
                        require_once('pages/Kontak.php');
                    }
                    if ($menu=='Kegiatan') {
                        require_once('pages/Kegiatan.php');
                    }

                }
              

            ?>
        </div>
        <div class="footer">
            <p>Web ini dibuat oleh Arif</p>
        </div>
    </div>
    
</body>
</html>