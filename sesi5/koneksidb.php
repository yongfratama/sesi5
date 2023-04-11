<?php
   include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
   if($cnn){
       echo "koneksi sukses";
       $sql1 = "CREATE DATABASE " . DBNAME;

      $hasil = mysqli_query($cnn, $sql1);
      if($hasil){
          echo "Database " . DBNAME . "berhasil dibuat";
        }else{
            echo "data base " . DBNAME . "gagal dibuat";
        }

   }else{
       echo "koneksi gagal<br>" .mysqli_connect_error();
   }