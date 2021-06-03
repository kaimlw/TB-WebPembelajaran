<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="navbar">
        <ul class="nav">
                <div class="logo-header">
                    <li><a href="Home.php"><img src="../img/Logo2-5.png" alt=""></a></li>
                </div>
                <div class="navi">
                    <li><a href="Home.php#daftar-materi">MATERI</a></li>
                    <li><a href="About.php">TENTANG KAMI</a></li>
                    <li><a href="Kontak.php">KONTAK</a></li>
                    <?php 
                        if(isset($_SESSION['email'])){
                            echo "<li id='keluar'><a href='logout.php'><span class='iconify' data-icon='ic:round-logout'></span>LOGOUT</a></li>";
                        }
                        else {
                            echo"<li id='masuk'><a href='Masuk.php'>MASUK</a></li>";
                        }
                    ?>
                </div>
            </ul>
        </div>
        <div class="content">
            <div class="company">
                <div class="com">
                    <h1>Tentang Kami</h1>
                    <br>
                    <p>Website ini mengembangkan berbagai layanan belajar berbasis teknologi, termasuk video belajar menarik, serta konten-konten pendidikan lainnya yang bisa diakses melalui web.
                        Website ini menawarkan pembelajaran cara mendesain sesuatu menggunakan aplikasi Photoshop, Ilustrator, dan Figma disajikan menarik sehingga belajar desain lebih menyenangkan. 
                    </p>
                </div>
                <div class="ilcomp">
                    <img src="../img/cn.jpg" alt="">
                </div>
            </div>
            <div class="visi">
                <div class="ilvisi">
                    <img src="../img/visi.jpg" alt="">
                </div>
                <div class="vis">
                    <h1>Visi</h1>
                    <br>
                    <p>Visi kami adalah menjadi media informasi yang menyajikan beragam informasi seputar dunia teknologi dan hiburan digital. Kami berkomitmen untuk bisa menyajikan informasi bermanfaat yang dapat menambah wawasan dan pengetahuan para pembaca.</p>
                </div>
            </div>
            <div class="misi">
                <div class="mis">
                    <h1>Misi</h1>
                    <br>
                    <p>Dengan menumbuhkan rasa penasaran dan cinta akan proses belajar di dalam diri semua orang di mana pun dia berada, maka segala bentuk proses belajar dapat dilakukan dengan penuh semangat dan penuh rasa kemerdekaan. Dengan semangat kemerdekaan belajar itu, website ini untuk kita semua agar bisa bersama-sama merangkai Indonesia yang cerdas dan cerah.</p>
                </div>
                <div class="ilmisi">
                    <img src="../img/misi.jpg" alt="">
                </div>
            </div>
        </div>
        
        <div class="container-footer">
            <div class="footer">
                <div class="isi-footer">
                    <div class="materi">
                        <h3>Materi</h3>
                        <a href="Materi.php?id_materi=P">Photoshop</a>
                        <a href="Materi.php?id_materi=I">Illustrator</a>
                        <a href="Materi.php?id_materi=F">FIGMA</a>
                    </div>
                    <div class="about">
                        <h3>Tentang Kami</h3>
                        <a href="About.php">About Us</a>
                        <a href="Home.php#testi">Testimonial</a>
                    </div>
                    <div class="kontak">
                        <h3>Hubungi Kami</h3>
                        <a href="Kontak.php">Email</a>
                        <a href="Kontak.php">Telepon</a>
                    </div>
                    <div class="media">
                        <h3>Sosial Media</h3>
                        <div class="icon">
                            <a href="ig" id="ig"><span class="iconify" data-icon="akar-icons:instagram-fill" data-inline="false"></span></a>
                            <a href="fb" id="fb"><span class="iconify" data-icon="akar-icons:facebook-fill" data-inline="false"></span></a>
                            <a href="twit" id="tw"><span class="iconify" data-icon="whh:circletwitter" data-inline="false"></span></a>    
                        </div>
                    </div> 
                </div>
                <div class="logo-footer">
                    <a href="Home.php"><img src="../img/Logo2-5.png" alt=""></a>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>