<?php
    $koneksi = mysqli_connect('localhost','root','','db_tugasbesar');
    
    if ($koneksi->connect_error) {
        die("Connection failed : " . $$koneksi->connect_error);
    }
?>