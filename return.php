<?php

function luaspersegi($sisi){
    $luas = $sisi * $sisi;
    return $luas;
}

// pemangilan
echo"luasnya =".luaspersegi(5);
echo"<br>";
echo"luasnya =".luaspersegi(10);
echo"<br>";
echo"luasnya =".luaspersegi(15);
?>