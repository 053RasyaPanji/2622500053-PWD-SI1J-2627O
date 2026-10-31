<?php
$nama = "Rasya Panji Gustiansyah";
$hobi = "Basket";
$footer = "262250053_Rasya Panji Gustiansyah_SI1J_UTS Pemrograman Web Dasar";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tentang Panji</title>
</head>

<body>
    <!--Ini header-->
    <header>
        <img src="img/logoisbal.png" width="200" height="150" class="header-top">WEBSITE PRIBADI PANJI
    </header>
    <main>
        <!--Ini Navbar-->
        <nav>
            <ul id="navMenu">
                <li><a href="Beranda.php">Beranda</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="Pendaftaran.php">Pendaftaran</a></li>
            </ul>
        </nav>
        <!--Ini konten-->
        <section id="home">
            <div class="content">
                <h2>Welcome</h2>
                <img src="img/Foto1.jpeg" width="200" height="280">
                <img src="img/Foto2.jpeg" width="150" height="280">
                <img src="img/Foto3.jpeg" width="280" height="200">
                <img src="img/Foto4.jpeg" width="200" height="280">
                <p>Selamat Datang di Blog Pribadi Panji<br>
                    Perkenalan singkat, kenalin nama saya <?php echo $nama; ?>. Liat foto diatas?<br>
                    Itu saya waktu SMP. Hobi saya olahraga khususnya <?php echo $hobi; ?>. Mau kenalan lebih lanjut? Ayo liat Biodata
                    Panji di samping.
                </p>
                <br>
                <br>
                <br>
            </div>
        </section>
    </main>
    <!--Ini Footer-->
    <footer class="footer">
        <p>&copy; <?php echo $footer; ?></p>
    </footer>
</body>

</html>