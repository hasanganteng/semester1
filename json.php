<?php

// $mahasiswa = [
//'nama'=>'Nurul huda',
//   'Domisili'=>'Surabaya'
//];
$nilaiUjian = [70,80,90];

echo json_encode($nilaiUjian);
//echo json_encode($Mahasiswa);

$listMahasiswajson = '[
    {"nama" : "Nurrul Huda"},
    {"nama" : "Renza Ilhami Rizqi"},
    {"nama" : "Taufan Aji},
    {"nama" : "Rahmad Dwi Oktanto"},
}';

// dikonversikan ke json
$list = json_decode ($listMahasiswajson);

// tampilkan datanya
foreach ($list as $key => $Mahasiswa) {
    echo "nama ke -{$key} : {$Mahasiswa->nama} <br>";
}

?>