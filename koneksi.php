<?php
// koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_cis"; //nama database

$koneksi = new mysqli($host,$user,$pass,$db);
if($koneksi->connect_error){
    die("koneksi gagal:". $koneksi->connect_error);
}else{
   
}
?>