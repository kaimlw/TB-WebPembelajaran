<!DOCTYPE html>
<?php
    include ('../db/koneksi.php');
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Materi</title>
    <link rel="stylesheet" href="../style/navbar.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/IsiMateri-style.css">
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
        
        <div class="mainContent">
            <div class="navigation">
                <div class="pilihan">
                    <h3>Daftar Materi</h3>
                    <?php 
                        $id=$_GET['id_materi'];
                        $bagian=$_GET['id_bagian'];
                        $no=$_GET['no'];

                        $cari= "SELECT * FROM materi,isi_materi WHERE materi.id_materi = '$id' AND materi.id_materi=isi_materi.id_materi";
                        $tampil= mysqli_query($koneksi,$cari);
                        while ($data= mysqli_fetch_assoc($tampil)) {
                            $db_bagian=$data['id_bagian'];?>
                            <ul>
                                <li><h3><?php echo $data['id_bagian'] ?></h3></li>
                                <?php
                                    $tampil= mysqli_query($koneksi,$cari); 
                                    while ($data= mysqli_fetch_assoc($tampil)) {
                                        if ($db_bagian==$data['id_bagian']) {
                                            echo "<li><a href='IsiMateri.php?id_materi=".$data['id_materi']."&&id_bagian=".$data['id_bagian']."&& no=".$data['no']."'>".$data['judul_isi'] ."</a></li>";
                                        }else {
                                            $db_bagian=$data['id_bagian'];
                                            echo "</ul><ul>
                                            <li><h3>".$data['id_bagian']."</h3></li>
                                            <li><a href='IsiMateri.php?id_materi=".$data['id_materi']."&&id_bagian=".$data['id_bagian']."&& no=".$data['no']."'>".$data['judul_isi'] ."</a></li>";
                                        }
                                    }
                                ?>
                            </ul>                            
                    <?php }
                    ?>
                </div>
            </div>
            
            <div class="content">
                <?php
                    $cari= "SELECT * FROM isi_materi WHERE isi_materi.id_bagian= '$bagian' AND isi_materi.no= '$no' AND isi_materi.id_materi='$id'";
                    $tampil=mysqli_query($koneksi,$cari);
                    while ($data= mysqli_fetch_assoc($tampil)) {
                ?>

                <h1><?php echo $data['judul_isi'] ?></h1>
                <img src="../img/<?php echo $data['gambar_materi'] ?>" alt="">
    
                <div class="isi-materi">
                    <p><?php echo $data['isi_materi']; ?></p>
                </div>

                <div class="video">
                    <?php echo $data['link_youtube']; ?>
                </div>

                <?php } ?>
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
</html>