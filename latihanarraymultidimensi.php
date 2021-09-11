<?php
$hobi = [
    [
        'Artikel'=>'Artikel Detik.com',
        'berita'=> [
        ['jenis'=>'olahraga',
          'jenisol'=>[
            ['jenisnya'=>'Sepak Bola',
            'cabang'=>[
                ['cabangnya'=>'Sepak Bola Nasional'],
                ['cabangnya'=>'Sepak Bola Internasional'],

            ]
            ],
            ['jenisnya'=>'Bulu Tangkis',
            'cabang'=>[
                ['cabangnya'=>'Bulu Tangkis Nasional'],
                ['cabangnya'=>'Bulu Tangkis Internasional'],

            ]
            ],
            ['jenisnya'=>'Atletik',
            'cabang'=>[
                ['cabangnya'=>'Atletik Nasional'],
                ['cabangnya'=>'Atletik Internasional'],
            ]
            ]
          ]
        ],
        ['jenis'=>'Ekonomi',
          'jenisol'=>[
            ['jenisnya'=>'Saham',
            'cabang'=>[
                ['cabangnya'=>'Permintaan'],
                ['cabangnya'=>'Penawaran'],

            ]
            ],
            ['jenisnya'=>'Bank',
            'cabang'=>[
                ['cabangnya'=>'Pendapatan Nasional'],
                ['cabangnya'=>'Pertumbuhan Ekonomi'],

            ]
            ],
            ['jenisnya'=>'Atletik',
            'cabang'=>[
                ['cabangnya'=>'Atletik Nasional'],
                ['cabangnya'=>'Atletik Internasional'],
            ]
            ]
          ]
        ],
        ['jenis'=>'Politik',
          'jenisol'=>[
            ['jenisnya'=>'Dalam Negara',
            'cabang'=>[
                ['cabangnya'=>'surut legislasi'],
                ['cabangnya'=>'banjir Kontroversi'],

            ]
            ],
            ['jenisnya'=>'Luar Negeri',
            'cabang'=>[
                ['cabangnya'=>'Kerja Sama'],
                ['cabangnya'=>'Negara yg makmur'],

            ]
            ]
          ]
        ],
        ]
    ]
];

  foreach ($hobi as $data1) {
      echo "Artikel : " . $data1['Artikel']."<br>";
      echo "Jenis Berita :";
      echo"<ul>";
      foreach ($data1['berita'] as $jenis) {
          echo"<li>".$jenis['jenis']."</li>";
          echo"</ul>";
          foreach ($jenis['jenisol'] as $jenisnya) {
            echo"<ul>";
            echo"<ul>";
            echo"<li>".$jenisnya['jenisnya']."</li>";
            echo"</ul>";
            echo"</ul>";
            foreach ($jenisnya['cabang'] as $cabangnya) {
                echo"<ul>";
                echo"<ul>";
                echo"<ul>";
                echo"<li>".$cabangnya['cabangnya']."</li>";
                echo"</ul>";
                echo"</ul>";
                echo"</ul>";
            }
        }
    }
}
    
    


?>