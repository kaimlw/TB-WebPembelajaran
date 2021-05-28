<!DOCTYPE html>
<?php
session_start();
include "koneksi.php"
?>

<?php
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($koneksi, "select * from masuk where nama = '$_POST[nama]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION["nama"] = $_POST['nama'];

        echo "<meta http-equiv=refresh content=0;URL='materi.php'>";
    }else{
        echo "<h2 align=center>Email atau Password anda Salah !</h2>";
        echo "<meta http-equiv=refresh content=2;URL='Masuk.php'>";
    }
}

?>

<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="masuk.css">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="footer.css">
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
        <div class="login">
            <div class="ilmasuk">
                <img src="misi.jpg" alt="">
                <p>Berkarya di industri kreatif itu memang menyenangkan. Terlebih jika pesan visual yang kita sampaikan bisa menginspirasi banyak orang. Pastinya, Anda mau kan? Menjadi seorang yang ahli dalam bidang desain grafis?</p>
            </div>
            <div class="masuk">
                <form action="" method="POST">
                    <h4>MASUK</h4>
                    <br>
                    <div class="formemail">
                        <p>Nama Pengguna</p>
                        <input type="text" name="nama">
                    </div>
                    <div class="password">
                        <p>Kata Sandi</p>
                        <input type="Password" name="password">
                    </div>
                    <div class="submit">
                        <input type="submit" value="MASUK" name="proseslog">
                    </div>
                </form>
                <p>Belum punya akun? <a href="daftar.php">Daftar Sekarang!</a></p>
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
                <a href=""><img src="Logo2-5.png" alt=""></a>
            </div>   
        </div>
    </div>
</body>
</html>