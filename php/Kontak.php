<!DOCTYPE html>
<?php
    include ('../db/koneksi.php');

    if (isset($_POST['kirim'])) {
        $nama= $_POST['nama'];
        $email = $_POST['email'];
        $no_hp= $_POST['no_hp'];
        $pesan= $_POST['isi-pesan'];
        $tambah= mysqli_query($koneksi, "INSERT into pesan VALUES('$nama','$email','$no_hp','$pesan')");
        if ($tambah){
            echo "<script>
            alert('Pesan anda berhasil terkirim');
            window.location='Kontak.php';
            </script>";
        }else {
            echo "<script>
            alert('Pesan anda gagal terkirim');
            window.location='Kontak.php';
            </script>";
        }
    }
?>            
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/Kontak.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <style>

    </style>
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
            <div class="teks">
                <h1>Kontak Kami</h1>
                <br>
                <p><b>Apabila terdapat pertanyaan mengenai kami<br> atau kerjasama dan hal lainnya, hubungi kami<br> melalui</b></p>
                <br>
                <div class="email">
                    <span class="iconify" data-icon="line-md:email-twotone"></span>
                    <p><b>costumer.service@gmail.com</b></p>
                </div>
                <br>
                <div class="telepon">
                    <span class="iconify" data-icon="akar-icons:phone" data-inline="false"></span>
                    <p><b>087812314323</b></p>
                </div>
                <br>
                <p><b>atau isi formulir di samping</b></p>
            </div>
            <div class="pesan">
                <form method="POST" class="form">
                    <h3><b>PESAN</b></h3>
                    <div class="formnama">
                        <p><b>Nama Lengkap</b></p>
                        <input type="text" name="nama">
                    </div>
                    <div class="formemail">
                        <p><b>Email</b></p>
                        <input type="text" name="email">
                    </div>
                    <div class="formtel">
                        <p><b>No. Telepon</b></p>
                        <input type="text" name="no_hp">
                    </div>
                    <div class="formPesan">
                        <p><b>Pesan</b></p>
                        <textarea name="isi-pesan" id="isi-pesan" cols="30" rows="10"></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" value="KIRIM" name="kirim">
                    </div>
                </form>
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
</div>
</body>

</html>