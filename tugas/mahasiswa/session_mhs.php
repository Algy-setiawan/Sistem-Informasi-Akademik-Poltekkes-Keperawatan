<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
if($_SESSION['kd_dosen']!="2"){
    die("Anda bukan Mahasiswa!!!");
}
?>