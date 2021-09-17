<?php

 class manusia{

    function __destruct(){
        echo "ini adalah Method DESTRUCT";
 }

 function nama(){
     echo"<br>Nama Saya Adalah Alid Taher<br>";
 }
function __construct(){
    echo"ini adalah Method CONSTRUCT";
    
}
}

$cetak = new manusia();

echo $cetak->nama();