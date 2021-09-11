<?php
//file json tg akan di baca
$file ="anggota.json";

//mendapatkan file json
$angota = file_get_contents($file);

//mendecode anggota.json
$data = json_decode($angota,true);

//membaca/menampilkan data array menggunakan foreach
foreach ($data as $key =>$d) {
    echo "no : ".$d['no']."<br>";
    echo "nama : ". $d['nama']."<br>";
    echo "Jurusan : ". $d['Jurusan']."<br><br>";

}
?>