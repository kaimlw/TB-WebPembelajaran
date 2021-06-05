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
    <title>Akun Pengguna</title>
    <link rel="stylesheet" href="style/admin_database.css">
    <link rel="stylesheet" href="style/navdatabase.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <img src="../img/Logo2-5.png" alt="">
            <div class="pilihan">
                <h3>Database</h3>
                <ul>
                    <li id="aktif"><a href="database_akun.php"><div class="isi-nav">
                        <span class="iconify" data-icon="ant-design:user-outlined" data-inline="false"></span>
                        <p>Akun Pengguna</p>
                    </div></a></li>
                    <li><a href="database_pesan.php"><div class="isi-nav">
                        <span class="iconify" data-icon="carbon:email" data-inline="false"></span>
                        <p>Pesan</p>
                    </div></a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Akun Pengguna</h1>
            <hr>
            <center>
                <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $cari= "SELECT * FROM masuk";
                    $result = mysqli_query($koneksi,$cari);

                    if ($result->num_rows> 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo"<tr>
                                <td>".$row['nama_lengkap']."</td>
                                <td>".$row['nama']."</td>
                                <td>".$row['email']."</td>
                                <td> <div class='hapus'><a href='?email=".$row['email']."'>
                                    <div class='isihapus'>
                                        <span class='iconify' data-icon='ic:baseline-delete-outline' data-inline='false'></span>
                                        <p>Delete</p>
                                    </div>
                                </a></div></td>
                                </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
                </table>
            </center>
             
        </div>
    </div>
    <?php
        if (isset($_GET['email'])) {
            mysqli_query($koneksi,"DELETE FROM masuk WHERE email='$_GET[email]'");
            echo "<script> alert ('Data telah terhapus') </script>";
            echo "<meta http-equiv=refresh content=2;URL='database_akun.php'>";
        }
    ?>
</body>
</html>