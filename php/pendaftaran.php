<!DOCTYPE html>
<?php 
    include "../db/koneksi.php";

    if (isset($_POST['proses'])) {
        mysqli_query($koneksi, "INSERT into masuk set
        nama_lengkap= '$_POST[nama_lengkap]',
        username= '$POST[nama]',
        email= '$POST[email],
        password ='$POST[password]");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="style/pendaftaran.css">
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
                <div class="illdaftar">
                    <img src="../img/misi.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, a sed possimus dolorem non consequuntur quia consectetur eos repellat rem repudiandae eius aliquid id ea magnam dolores explicabo quasi. Accusamus.</p>
                </div>
                <div class="formDaftar">
                    <h1>Pendaftaran</h1>
                    <form action="" class="form">
                        <div class="formlengkap">
                            <p>Nama Lengkap</p>
                            <input type="text" name="nama_lengkap">
                        </div>
                        <div class="formnama">
                            <p>Nama Pengguna</p>
                            <input type="text">
                        </div>
                        <div class="formEmail">
                            <p>Email</p>
                            <input type="text">
                        </div>
                        <div class="formPass">
                            <p>Kata Sandi</p>
                            <input type="password">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="" id=""> 
                            <p> Dengan mengklik ini maka saya setuju untuk mengikuti <span class="ketentuan">Ketentuan Pengguna</span>  serta <span class="ketentuan">Kebijakan Privasi</span> </p> 
                        </div>
                        <div class="submit">
                            <button>DAFTAR</button>
                        </div>
                    </form>
                    <p>Punya akun? Pergi ke <a href="">Masuk</a></p>
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