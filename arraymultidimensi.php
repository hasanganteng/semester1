<?php
$data = [
    [
        'nama'=>"hasan ganteng",
        'buah'=>[
            ['jenis' => 'mangga'],
            ['jenis' => 'apel'],
            ['jenis' => 'pear'],

        ]
    ]
    //[
     //   'nama'=>'raisa',
     //   'buah'=>'anggur'
    //]
    ];

    foreach ($data as $data2) {
        echo "nama pemilik : ". $data2['nama'] ."<br>";
        echo "buah kesukaan:";
        echo"<ul>";
        foreach ($data2['buah'] as $data3) {
            echo "<li>" .$data3['jenis'] . "</li>";
        }
        echo"</ul>";
    }
    ?>