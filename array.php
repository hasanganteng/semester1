<?php

//echo $nama['1'];

//pembuatan array

$nama = array(
        1=>"Andri",
        2=>"Loko",
        3=>"Sukma",
        4=>"Rina",
        5=>"Sari");


//cara akses array


echo"Kelompok 1 : ".$nama['5']." & ".$nama[4];
echo"<br>";
echo"Kelompok 2 : ".$nama['3']." & ".$nama[1];
?>

<?php
//array assosiatif
$arrNilai = array (
      "Ani"  => 80,
      "Otim" => 90,
      "Ana"  => 75,
      "Budi" => 85,
);

 echo $arrNilai['Ana'];
 echo " ";
 echo $arrNilai['Otim'];

 ?>

 <?php
 //pembuatan arrray

 $buah = array(
    1=>"Semangka",
    2=>"Melon",
    3=>"Anggur",
    4=>"Strowbery",
    5=>"Alpukat");

$warna = array(
    1=>"Hijau",
    2=>"Merah",
    3=>"Ungu");

  //cara akses array
  echo "Buah ".$buah[3] ." Berwarna ".$warna[1];

  ?>

  <?php
  //array assosiatif 2
  $employee =[];
  $employee['name'] = 'john';
  $employee['email'] = 'john@xample.com';
  $employee['phone'] = '1234567890';

  echo "nama : ".$employee['name']."<br>";
  echo "email : ".$employee['email']."<br>";
  echo "phone : ".$employee['phone']."<br>";


  ?>






 


