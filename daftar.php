<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="daftar.css">
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
        <div class="daftar">
            <div class="illdaftar">
                <img src="cn.jpg" alt="">
                <p>Berkarya di industri kreatif itu memang menyenangkan. Terlebih jika pesan visual yang kita sampaikan bisa menginspirasi banyak orang. Pastinya, Anda mau kan? Menjadi seorang yang ahli dalam bidang desain grafis?</p>
            </div>
        </div>
        <div class="formdaftar">
            <h4>Pendaftaran</h4>
            <form action="" method="POST">
                <div class="formlengkap">
                    <p>Nama Lengkap</p>
                    <input type="text" name="nama_lengkap">
                </div>
                <div class="formnama">
                    <p>Nama Pengguna</p>
                    <input type="text" name="nama">
                </div>
                <div class="formEmail">
                    <p>Email</p>
                    <input type="text" name="email">
                </div>
                <div class="formPass">
                    <p>Kata Sandi</p>
                    <input type="password" name="password">
                </div>
                <div class="checkbox">
                    <p><input type="checkbox" name="" id=""> Dengan mengklik ini maka saya setuju untuk<br> mengikuti Ketentuan Pengguna serta<br> Kebijakan Privasi</p> 
                </div>
                <div class="submit">
                <input type="submit" value="DAFTAR" name="proses" onclick="alert('Data anda berhasil ditambahkan silahkan menuju halaman masuk')">
                </div>
            </form>
            <p>Punya akun? Pergi ke <a href="Masuk.php">Masuk</a></p>
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

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into masuk set  
nama_lengkap = '$_POST[nama_lengkap]',
nama = '$_POST[nama]',
email = '$_POST[email]',
password = '$_POST[password]'");

}

?>
</html>

