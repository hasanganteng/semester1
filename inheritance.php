<?php
//class utama

class manusia{
    public $teman;
    public function berinama(){
        echo "nama saya ujang<br>";
    }
}

//class turunan
class teman extends manusia{

    public function berinamateman(){
        echo"nama teman saya andi";
    }
}

//instansiasi class tean
$malasngoding=new teman;

$malasngoding->berinama();
$malasngoding->berinamateman();

?>