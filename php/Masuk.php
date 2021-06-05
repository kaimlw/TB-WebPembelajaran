<!DOCTYPE html>
<?php
session_start();
include "../db/koneksi.php";
if (isset($_SESSION['email'])) {
    header('location: Home.php');
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
            <div class="isi-content">
                <div class="ilmasuk">
                    <img src="../img/login.jpg" alt="">
                    <p>Berkarya di industri kreatif itu memang menyenangkan. Terlebih jika pesan visual yang kita sampaikan bisa menginspirasi banyak orang. Pastinya, Anda mau kan? Menjadi seorang yang ahli dalam bidang desain grafis?</p>
                </div>
                <div class="masuk">
                    <h1>Masuk</h1>
                    <form method="POST" class="form">
                        <div class="formEmail">
                            <p>Email</p>
                            <input type="text" name="email">
                        </div>
                        <div class="formPass">
                            <p>Kata Sandi</p>
                            <input type="Password" name="pass">
                        </div>
                        <div class="submit">
                            <input type="submit" value="MASUK" name="login">
                        </div>
                    </form>
                    <p>Belum punya akun? <a href="pendaftaran.php" >Daftar Sekarang!</a></p>
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
</body>
<?php
if(isset($_POST['login'])){
    $email= $_POST['email'];
    $pass= $_POST['pass'];

    $sql = mysqli_query($koneksi, "SELECT * from masuk where email = '$email' and password = '$pass'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $data= mysqli_fetch_array($sql);
        $_SESSION["email"] = $data['email'];

        echo "<meta http-equiv=refresh content=0;URL='Home.php'>";
    }else{
        echo "<script> alert('Email atau Password anda salah!');</script>";
        echo "<meta http-equiv=refresh content=2;URL='Masuk.php'>";
    }
}

?>
</html>