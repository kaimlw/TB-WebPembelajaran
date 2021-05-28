<?php
session_start();
if(!isset($_SESSION['nama'])){
    header("location:Masuk.php");
}

?>