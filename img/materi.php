<?php
include "session.php";
include "koneksi.php";
?>
<p align="center">
Halo, Selamat datang <b><?php echo $_SESSION['nama']; ?></b><br>
Silahkan <a href="logout.php"> <b> Logout </b> </a> Untuk keluar dari materi
</p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="Materi-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Roboto:wght400;700&display=swap" rel="stylesheet">    
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <ul class="nav">
                <div class="logo-header">
                    <li><a href=""><img src="Logo2-5.png" alt=""></a></li>
                </div>
                <div class="navi">
                    <li><a href="Materi">MATERI</a></li>
                    <li><a href="About">TENTANG KAMI</a></li>
                    <li><a href="Kontak">KONTAK</a></li>
                    <li id="masuk"><a href="Masuk">MASUK</a></li>    
                </div>
            </ul>
        </div>
        
        <div class="main-content">
            <div class="illmateri">
                <img src="logo1.png" alt="">
            </div>
            <div class="judulMateri">
                <h1>PHOTOSHOP</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione asperiores quod itaque mollitia soluta minus, velit delectus beatae ullam, tempore molestias? Nam cupiditate, esse neque itaque illo doloremque quas quae?</p>
            </div>    
        </div>

        <div class="daftarMateri">
            <h3>DAFTAR MATERI</h3>
            <div class="accordion">
                <div class="main-Materi">
                    <div class="label">Materi 1</div>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptatum minus cumque quia temporibus porro delectus, dolores sapiente consequatur repellendus ducimus eveniet vero totam officia vitae fuga repellat nemo nobis?</p>
                    </div>
                </div>
                <div class="main-Materi">
                    <div class="label">Materi 2</div>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptatum minus cumque quia temporibus porro delectus, dolores sapiente consequatur repellendus ducimus eveniet vero totam officia vitae fuga repellat nemo nobis?</p>
                    </div>
                </div>
                <div class="main-Materi">
                    <div class="label">Materi 3</div>
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptatum minus cumque quia temporibus porro delectus, dolores sapiente consequatur repellendus ducimus eveniet vero totam officia vitae fuga repellat nemo nobis?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="isi-footer">
                <div class="materi">
                    <h3>Materi</h3>
                    <a href="photoshop">Photoshop</a>
                    <a href="illustrator">Illustrator</a>
                    <a href="figma">FIGMA</a>
                </div>
                <div class="about">
                    <h3>Tentang Kami</h3>
                    <a href="About us">About Us</a>
                    <a href="Testimonial">Testimonial</a>
                </div>
                <div class="kontak">
                    <h3>Hubungi Kami</h3>
                    <a href="email">Email</a>
                    <a href="telepon">Telepon</a>
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
                <a href=""><img src="logo1.png" alt=""></a>
            </div>   
        </div>
    </div>
</body>
</html>