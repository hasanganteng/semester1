<?php
//file json tg akan di baca
$file ="latihan.json";


//mendapatkan file json
$anggota = file_get_contents($file);

$data = json_decode($anggota,true);

foreach ($data as $data) {
    echo "nama :".$d['nama']."<br>";
    echo "domisili :".$d['domisili']."<br>";
    echo "hobi : ";
    echo "<ul>";
    echo "<li>";
    echo implode ("<li>".$d['hobi'])."</li><br>";
    echo "</li>";
    echo "</ul>";
}

?>
        

