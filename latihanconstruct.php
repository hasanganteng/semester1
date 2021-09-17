<?php

 class biodata{


function __construct($nama,$jk,$kelas){
    echo"nama saya: $nama <br/>";
    echo"jenis kelamin: $jk <br/>";
    echo"kelas: $kelas <br/>";
    echo"<hr>";
}


 }

 $biodata = new biodata("Hasan","laki-laki","XII RPL 1");
 $biodata = new biodata("Edo","laki-laki","XII RPL 2");
 $biodata = new biodata("Jojo","laki-laki","XII RPL 3");
 ?>