<?php
//class
class laptop{
     //property/atribut
     var $pemilik;
     var $merk;
     var $ukuran_layar;
     // lanjut isi dari class laptop...

     //method/function
     function hidupkan_laptop() {

         return "hidupkan laptop";
     }

     function matikan_laptop() {
         return "matikan laptop";
     }

     //isi dari class laptop
    }
 //object
$laptop_hasan = new laptop();

echo $laptop_hasan->hidupkan_laptop();
echo "<br>";
echo $laptop_hasan->matikan_laptop();

?>
