<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/admin_database.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <img src="../img/Logo2-5.png" alt="">
            <div class="pilihan">
                <h3>Database</h3>
                <ul>
                    <li id="akun"><a href="">Akun Pengguna</a></li>
                    <li><a href="">Materi</a></li>
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
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                    $conn= new mysqli("localhost", "root", "","db_tugasbesar");

                    if ($conn->connect_error){
                        die("Connection Failed: ". $conn->connect_error);
                    }

                    $sql= "SELECT * FROM masuk";
                    $result = $conn->query($sql);

                    if ($result->num_rows> 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo"<tr>
                                <td>".$row['nama_lengkap']."</td>
                                <td>".$row['nama']."</td>
                                <td>".$row['email']."</td>
                                <td> <a href='?email=".$row['email']."'>Delete</a></td>
                                <td> <a href='form_update.php?email=".$row['email']."'>Update</a></td>
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
</body>
</html>