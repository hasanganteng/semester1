<?php
//class
//class pesawat{
     //property/atribut
     //var $pemilik;
     //var $merk;
     //var $ukuran;
     // lanjut isi dari class pesawat...

     //method/function
     //function hidupkan_pesawat() {

         //return "hidupkan pesawat";
    // }

     //function matikan_pesawat() {
        // return "matikan pesawat";
     //}

     //function istirahatkan_pesawat() {
       // return "istirahatkan pesawat";
   // }


     //isi dari class pesawat
    //}
 //object
//$pesawat_hasan = new pesawat();

//echo $pesawat_hasan->hidupkan_pesawat();
//echo "<br>";
//echo $pesawat_hasan->matikan_pesawat();
//echo "<br>";
//echo $pesawat_hasan->istirahatkan_pesawat();
//echo"<br>";

class pesawat{
    var $pemilik;
    var $merk;
    var $ukuran;
    var $jenis;
    function hidupkan_pesawat() {
        return "pesawat dibuka";
    }
    function matikan_pesawat() {
        return "pesawat ditutup";
    }
    function istirahatkan_pesawat() {
        return "pesawat di istirahatkan";
    }
}

$pesawat_hasan = new pesawat;

$pesawat->pemilik="hasan";
$pesawat->merk="indonesia";
$pesawat->ukuran="xl";
$pesawat->jenis="garuda";

echo"pesawat milik $pesawat pemilik $pesawat->merk <br>";
 


}
