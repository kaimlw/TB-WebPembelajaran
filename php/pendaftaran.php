<!DOCTYPE html>

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
                <div class="illdaftar">
                    <img src="../img/login.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, a sed possimus dolorem non consequuntur quia consectetur eos repellat rem repudiandae eius aliquid id ea magnam dolores explicabo quasi. Accusamus.</p>
                </div>
                <div class="formDaftar">
                    <h1>Pendaftaran</h1>
                    <form class="form" method="POST">
                        <div class="formlengkap">
                            <p>Nama Lengkap</p>
                            <input type="text" name="nama_lengkap">
                        </div>
                        <div class="formnama">
                            <p>Nama Pengguna</p>
                            <input type="text" name="username">
                        </div>
                        <div class="formEmail">
                            <p>Email</p>
                            <input type="text" name="email">
                        </div>
                        <div class="formPass">
                            <p>Kata Sandi</p>
                            <input type="password" name="pass">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="checkbox" id="check"> 
                            <p> Dengan mengklik ini maka saya setuju untuk mengikuti <span class="ketentuan">Ketentuan Pengguna</span>  serta <span class="ketentuan">Kebijakan Privasi</span> </p> 
                        </div>
                        <div class="submit">
                            <input type="submit" value="DAFTAR" name="daftar">
                        </div>
                    </form>
                    <p>Punya akun? Pergi ke <a href="Masuk.php">Masuk</a></p>
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
<?php 
    include "../db/koneksi.php";

    if (isset($_POST['daftar'])) {
        $nama_lengkap= $_POST['nama_lengkap'];
        $username = $_POST['username'];
        $email= $_POST['email'];
        $pass= md5($_POST['pass']);
        $tambah= mysqli_query($koneksi, "INSERT into masuk VALUES('$username','$nama_lengkap','$email','$pass')");
        if ($tambah){
            echo "<script>
            alert('Data anda berhasil ditambahkan silahkan menuju halaman masuk');
            window.location='masuk.php';
            </script>";
        }else {
            echo "<script>
            alert('Daftar Gagal');
            window.location='daftar.php';
            </script>";
        }
    }
?>
</html>