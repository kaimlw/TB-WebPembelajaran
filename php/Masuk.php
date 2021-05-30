<!DOCTYPE html>
<?php
session_start();
include "../db/koneksi.php"
?>

<?php
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($koneksi, "SELECT * from masuk where email = '$_POST[email]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION["nama"] = $_POST['nama'];

        echo "<meta http-equiv=refresh content=0;URL='admin_database.php'>";
    }else{
        echo "<h2 align=center>Email atau Password anda Salah !</h2>";
        echo "<meta http-equiv=refresh content=2;URL='Masuk.php'>";
    }
}

?>

<html lang="en">
    <head>
        <title>Masuk</title>
        <link rel="stylesheet" href="../style/masuk.css">
        <link rel="stylesheet" href="../style/navbar.css">
        <link rel="stylesheet" href="../style/footer.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    </head>
<body>
    <div class="container">
        <div class="navbar">
            <ul class="nav">
                <div class="logo-header">
                    <li><a href="Home.html"><img src="../img/Logo2-5.png" alt=""></a></li>
                </div>
                <div class="navi">
                    <li><a href="Materi.html">MATERI</a></li>
                    <li><a href="About.html">TENTANG KAMI</a></li>
                    <li><a href="Kontak.html">KONTAK</a></li>
                    <li id="masuk"><a href="Masuk.html">MASUK</a></li>
                </div>
            </ul>
        </div> 
        <div class="content">
            <div class="isi-content">
                <div class="ilmasuk">
                    <img src="../img/misi.jpg" alt="">
                    <p>Berkarya di industri kreatif itu memang menyenangkan. Terlebih jika pesan visual yang kita sampaikan bisa menginspirasi banyak orang. Pastinya, Anda mau kan? Menjadi seorang yang ahli dalam bidang desain grafis?</p>
                </div>
                <div class="masuk">
                    <h1>Masuk</h1>
                    <form action="" method="POST" class="form">
                        <div class="formEmail">
                            <p>Email</p>
                            <input type="text" name="nama">
                        </div>
                        <div class="formPass">
                            <p>Kata Sandi</p>
                            <input type="Password" name="password">
                        </div>
                        <div class="submit">
                            <input type="submit" value="MASUK" name="proseslog">
                        </div>
                    </form>
                    <p>Belum punya akun? <a href="daftar.php" >Daftar Sekarang!</a></p>
                </div>
            </div>
        </div>      
        
        <div class="container-footer">
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
                    <a href=""><img src="../img/Logo2-5.png" alt=""></a>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>