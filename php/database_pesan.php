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
    <title>Pesan</title>
    <link rel="stylesheet" href="style/database_pesan.css">
    <link rel="stylesheet" href="style/navdatabase.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="container">
        <div class="navigation">
            <img src="../img/Logo2-5.png" alt="">
            <div class="pilihan">
                <h3>Database</h3>
                <ul>
                    <li><a href="database_akun.php"><div class="isi-nav">
                        <span class="iconify" data-icon="ant-design:user-outlined" data-inline="false"></span>
                        <p>Akun Pengguna</p>
                    </div></a></li>
                    <li id="aktif"><a href="database_pesan.php"><div class="isi-nav">
                        <span class="iconify" data-icon="carbon:email" data-inline="false"></span>
                        <p>Pesan</p>
                    </div></a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Pesan Masuk</h1>
            <div class="accordion">
                <?php
                    $cari="SELECT * FROM pesan";
                    $tampil= mysqli_query($koneksi,$cari);
                    if ($tampil->num_rows>0) {
                        while ($data=mysqli_fetch_assoc($tampil)) {
                    
                    
                ?>
                <div class="main-pesan">
                    <?php
                        echo "<div class='label'>
                                <div class='pengirim'>
                                    <h4>Dari: ".$data['nama']." ( ".$data['email']." )</h4>
                                    <h4>No.Telepon: ".$data['no_hp']."</h4>
                                </div>
                                <div class='hapus'>
                                    <a href='?email=".$data['email']."'><span class='iconify' data-icon='akar-icons:minus' data-inline='false'></span></a>
                                </div>
                              </div>"
                    ?>

                    <div class="content">
                        <p>
                            <?php echo $data['pesan'] ?>
                        </p>
                    </div>
                </div>

                <?php        
                    } }else {
                        echo "<center> <p>0 Results</p> </center>";
                    }
                ?>
            </div>
           
             
        </div>
    </div>
    <?php
        if (isset($_GET['email'])) {
            mysqli_query($koneksi,"DELETE FROM pesan WHERE email='$_GET[email]'");
            echo "<script> alert ('Pesan telah terhapus') </script>";
            echo "<meta http-equiv=refresh content=2;URL='database_pesan.php'>";
        }
    ?>
    <script>
        const accordion = document.getElementsByClassName('main-pesan');

        for (let i = 0; i < accordion.length; i++) {
            accordion[i].addEventListener('click',function(){
                this.classList.toggle('active');
            })
            
        }
    </script>
</body>
</html>