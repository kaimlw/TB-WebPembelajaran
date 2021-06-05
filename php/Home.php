<!DOCTYPE html>
<?php 
    include ('../db/koneksi.php');
    session_start()
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/Home-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
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
        
        <div class="main-content-1">
            <div class="com">
                <h1>Design Your Future Career Here!</h1>
                <p>Dapatkan beragam materi yang dapat membantu anda menjadi mahir menggunakan aplikasi desain. Tak perlu biaya, anda dapat menikmati semuanya!</p>
            </div>
            <div class="ilustrasi">
                <img src="../img/home-2.png" alt="">
            </div>
        </div>
        <div class="content" id="daftar-materi">
            <h1>Materi</h1>
            <div class="isi-Content">
                <?php
                    if (isset($_SESSION['email'])) {
                        echo "
                        <div class='photoshop'>
                            <div class='logo-photoshop'>
                                <span class='iconify' data-icon='vscode-icons:file-type-photoshop' data-inline='false'></span>
                                <h3>Photoshop</h3>
                            </div>
                            <div class='tulisan'>
                                <h4><a href='Materi.php?id_materi=P'>Pelajari Sekarang</a></h4>
                                <span class='iconify' data-icon='dashicons:arrow-right-alt2' data-inline='false'></span>
                            </div>
                        </div>
                        <div class='illustrator'>
                            <div class='logo-photoshop'>
                            <span class='iconify' data-icon='vscode-icons:file-type-ai' data-inline='false'></span>             
                            <h3>Illustrator</h3>
                        </div>
                        <div class='tulisan'>
                            <h4><a href='Materi.php?id_materi=I'>Pelajari Sekarang</a></h4>
                            <span class='iconify' data-icon='dashicons:arrow-right-alt2' data-inline='false'></span>
                        </div>
                        </div>
                        <div class='figma'>
                            <div class='logo-photoshop'>
                                <span class='iconify' data-icon='grommet-icons:figma' data-inline='false'></span>                  
                                <h3>FIGMA</h3>
                            </div>
                            <div class='tulisan'>    
                                <h4><a href='Materi.php?id_materi=F'>Pelajari Sekarang</a></h4>
                                <span class='iconify' data-icon='dashicons:arrow-right-alt2' data-inline='false'></span>
                            </div>
                        </div>";            
                    }else {
                        echo "
                        <div class='photoshop'>
                            <div class='container-tutup'>
                                <span class='iconify' data-icon='bx:bx-lock-alt' data-inline='false'></span>
                                <div class='tutup'></div>
                            </div>
                            <div class='logo-photoshop'>
                                <span class='iconify' data-icon='vscode-icons:file-type-photoshop' data-inline='false'></span>
                                <h3>Photoshop</h3>
                            </div>
                            <div class='tulisan'>
                                <h4><a href=''>Pelajari Sekarang</a></h4>
                                <span class='iconify' data-icon='dashicons:arrow-right-alt2' data-inline='false'></span>
                            </div>
                        </div>
    
                        <div class='illustrator'>
                            <div class='container-tutup'>
                                <span class='iconify' data-icon='bx:bx-lock-alt' data-inline='false'></span>
                                <div class='tutup'></div>
                            </div>
                            <div class='logo-photoshop'>
                            <span class='iconify' data-icon='vscode-icons:file-type-ai' data-inline='false'></span>             
                            <h3>Illustrator</h3>
                        </div>
                        <div class='tulisan'>
                            <h4><a href=''>Pelajari Sekarang</a></h4>
                            <span class='iconify' data-icon='dashicons:arrow-right-alt2' data-inline='false'></span>
                        </div>
                        </div>
                            <div class='figma'>
                            <div class='container-tutup'>
                                <span class='iconify' data-icon='bx:bx-lock-alt' data-inline='false'></span>
                                <div class='tutup'></div>
                            </div>
                            <div class='logo-photoshop'>
                                <span class='iconify' data-icon='grommet-icons:figma' data-inline='false'></span>                  
                                <h3>FIGMA</h3>
                            </div>
                            <div class='tulisan'>    
                                <h4><a href=''>Pelajari Sekarang</a></h4>
                                <span class='iconify' data-icon='dashicons:arrow-right-alt2' data-inline='false'></span>
                            </div>
                        </div>";            
                    }
                ?>
                
            </div>
        </div>
        <div class="testimoni">
            <h1>Testimoni</h1>
            <div class="slider">
                <div class="slides">
                    <!-- Radio Button Start -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!-- Radio Button End -->

                    <!-- Slide Content Start -->
                    <div class="slide first">
                        <div class="foto">
                            <img src="../img/testi-1.png" alt="">
                        </div>
                        <div class="testi">
                            <p class="kalimat">" Web yang keren banget! Baru 3 menit belajar udah ngerti semuanya! "</p>
                            <p class="nama">~ Ahmad Kunad</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="foto">
                            <img src="../img/testi-2.png" alt="">
                        </div>
                        <div class="testi">
                            <p class="kalimat">" Saya kira web apaan, ternyata buat belajar aplikasi desain. Bagus lah. "</p>
                            <p class="nama">~ Asep Anggut </p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="foto">
                            <img src="../img/testi-3.png" alt="">
                        </div>
                        <div class="testi">
                            <p class="kalimat">" Setelah belajar dari sini, saya mengerti makna kehidupan "</p>
                            <p class="nama">~ Ridwan Senja</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="foto">
                            <img src="../img/testi-4.png" alt="">
                        </div>
                        <div class="testi">
                            <p class="kalimat">" Apakah muka saya terlihat kecewa dengan website ini? "</p>
                            <p class="nama">~ Husni Hepi</p>
                        </div>
                    </div>
                    <!-- Slide Content End -->

                    <!-- Automatic Navigation Start -->
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!-- Automatic Navigation End -->
                </div>
                <!-- Manual Navigation Start -->
                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!-- Manual Navigation Start -->
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
                        <a href="Kontak.php">Kontak</a>
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
    <script>
        var counter= 1;
        setInterval(function () {
            document.getElementById('radio'+ counter).checked=true;
            counter++;
            if (counter>4) {
                counter=1
            }
        },5000)
    </script>
</body>
</html>