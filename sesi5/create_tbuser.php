<?php
include_once("konfigurasi.php");

$tbname = "tbUSER";


$sql = "CREATE TABLE $tbname(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(20),
    passkey VARCHAR (255),
    iduser VARCHAR (255)
);";

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,PORT) or die("koneksi gagal");
$hasil = mysqli_query($cnn, $sql);
if($hasil){
    echo "Table $tbname, berhasil dibuat";
}else{
    echo "Table $tbname,gagal dibuat";
}

mysqli_close($cnn);