<?php
   $koneksi = mysqli_connect("localhost","root","","dataipk");


   if (mysqli_connect_errno()){
   	echo "Koneksi database gagal : " . mysqli_connect_error();
   }

?>