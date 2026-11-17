<?php
$nama = "Rasya Panji Gustiansyah";
$umur = "20";
$alamat = "Pangkalpinang";
$hobi = "Basket";
$footer = "262250053_Rasya Panji Gustiansyah_SI1J_UTS Pemrograman Web Dasar";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Tentang Panji</title>
</head>

<body>
    <!--Ini header-->
    <header>
        <img src="img/logoisbal.png" width="200" height="150" class="header-top">
        <h1>WEBSITE PRIBADI PANJI</h1>
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
        <section class="section-profile">
            <div class="content">
                <article>
                    <h2>Biodata</h2>
                    <img src="img/Profile.jpeg" width="200" height="280">
                    <p>Perkenalkan, nama saya <?php echo $nama; ?>. Saya berumur <?php echo $umur; ?> tahun. Saya bertempat tanggal
                        lahir pada Pangkalpinang, 31 Agustus 2006.<br>
                        Saya berasal dari <strong>Tadi</strong>. Bercanda, saya tinggal di <?php echo $alamat; ?>. Pendidikan
                        terakhir saya adalah SMK, tepatnya saya lulusan SMK Negeri 1 Pangkalpinang.<br>
                        Teman-teman saya biasanya memanggil saya dengan <strong>Panji</strong>, tapi saya bisa di panggil
                        Rasya ataupun Panji. Hobi saya adalah olahraga, lebih khususnya <?php echo $hobi; ?>.
                        Funfact dari saya adalah seluruh teman saya yang pernah tidur bersama saya, tidak mau lagi tidur
                        dengan saya. Aneh tapi lucu karena mereka bilang mereka trauma tidur dengan kaki saya.<br>
                    </p>

                    <p>
                        Jika kalian mau mengenal saya lebih lanjut lagi ataupun mau kepoin aku, boleh kalian kepoin ke
                        akun
                        instagram ku.
                    </p>
                    <p>
                        Hubungi di : <a href="https://www.instagram.com/p4nnjay_?vrfl=MTFmcjE4bzd4bDZsdQ=="
                            target="_blank">Instagram</a>
                    </p>
                </article>
            </div>
        </section>
    </main>
    <!--Ini Footer-->
    <footer class="footer">
        <p>&copy; <?php echo $footer; ?> </p>
    </footer>
</body>

</html>