<!DOCTYPE html>
<?php 
include ('../db/koneksi.php');
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $pesan = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($nama) && !empty($nomor) && !empty($pesan)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'arkthe40@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'kontak dari '.$nama;
            $htmlContent = '<h2> via Form Kontak US</h2>
                <h4>nama</h4><p>'.$nama.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Sub</h4><p>'.$nomor.'</p>
                <h4>Message</h4><p>'.$pesan.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: '.$nama.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}

?>
<!DOCTYPE html>
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
            <div class="kontak">
                <h1>Kontak Kami</h1>
                <p>Apabila terdapat pertanyaan mengenai kami atau kerjasama dan hal lainnya, hubungi kami melalui</p>
                <div class="email">
                    <span class="iconify" data-icon="line-md:email-twotone"></span>
                    <p>costumer.service@gmail.com</p>
                </div>
                <div class="telepon">
                    <img src="logo telepon" alt="">
                    <p>087812314323</p>
                </div>
                <p>atau isi formulir di samping</p>
            </div>
            <div class="pesan">
                <form method="POST" class="form">
                    <h3>PESAN</h3>
                    <div class="formnama">
                        <p>Nama Lengkap</p>
                        <input type="text" name="nama">
                    </div>
                    <div class="formemail">
                        <p>Email</p>
                        <input type="text" name="email">
                    </div>
                    <div class="formtel">
                        <p>No. Telepon</p>
                        <input type="text" name="pass">
                    </div>
                    <div class="formPesan">
                        <p>Pesan</p>
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
</div>
</body>
</html>