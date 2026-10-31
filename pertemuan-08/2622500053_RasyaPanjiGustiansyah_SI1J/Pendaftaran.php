<?php
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
        <section class="section-pendaftaran" id="pendaftaran">
            <h2>Daftar Pengunjung</h2><br>
            <div class="content">

                <form id="contactForm" action="Pendaftaran.php" method="get" novalidate>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap (Wajib Diiisi)*</label><br>
                        <input class="input-form" type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap"
                            minlength="3" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email (Wajib Diisi)*</label><br>
                        <input class="input-form" type="email" id="email" name="email" placeholder="nama@gmail.com"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="nohp">No.hp (Wajib Diisi)*</label><br>
                        <input class="input-form" type="number" id="nohp" name="nohp" placeholder="Masukkan No.Hp" required>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan (Wajib Diisi)*</label><br>
                        <textarea class="input-form" id="pesan" name="pesan" maxlength="400" placeholder="Tulis pesan anda" 
                            required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM (Wajib Diisi)*</label><br>
                        <input class="input-form" type="number" id="nim" name="nim" placeholder="Isi NIM anda" required>
                    </div>

                    <div class="form-group">
                        <p>Apakah Panji Ganteng? (Wajib Diisi)*</p>
                        <input type="radio" id="ya" name="Apakah_Panji_Ganteng?" value="ya" required>
                        <label for="ya">Ganteng</label><br>
                        <input type="radio" id="yaya" name="Apakah_Panji_Ganteng?" value="yaya">
                        <label for="yaya">Ganteng Banget</label>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Pendaftaran</label><br>
                        <input class="input-form" type="date" id="tanggal" name="tanggal" required>
                    </div>
                    <button type="submit">Kirim</button>
                    <button type="reset">Batal</button>
                    <p id="formFeedback"></p>
                </form>
            </div>
        </section>
    </main>
    <!--Ini Footer-->
    <footer class="footer">
        <p>&copy; <?php echo $footer; ?> </p>
    </footer>
    <script src="blog.js"></script>
</body>

</html>