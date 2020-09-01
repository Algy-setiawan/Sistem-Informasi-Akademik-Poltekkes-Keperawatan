<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
if($_SESSION['kd_dosen']!="1"){
    die("Anda bukan Dosen!!");
}
?>