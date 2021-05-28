<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "masuk";

$koneksi = new Mysqli($servername, $username, $password,$database);

if ($koneksi->connect_error) {
    die("Connection failed : " . $$koneksi->connect_error);
}

?>