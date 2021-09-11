<?php
function luaslingkaran($jari , $phi=22/7)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}
function luassegitiga($alas , $tinggi)
{
    $luas = ($alas * $ $tinggi)/2;
    return $luas;
}
function luaspersegip($panjang , $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}
?> 
<!-- (jari) -->
luas lingkaran =<?php echo luaslingkaran(7); ?> <br>
<!-- (alas , tinggi) -->
luas segitiga =<?php echo luassegitiga(2,5); ?> <br>
<!-- (panjang , lebar) -->
luas persegi panjang =<?php echo luaspersegip(10,4); ?> <br>


<?php ?>





