<?php
class keuangan{

  public function gaji($jabatan,$pendidikan){

    echo "jabatan : ".$jabatan."<br>";
    if($jabatan =="direktur"){
      $gaji=10000000;
    }
     else if($jabatan =="manager"){
      $gaji=5000000;
    }
    if($jabatan =="karyawan"){
      $gaji=3000000;
    }
    else{
      $gaji = 0;
    }

    echo"gaji pokok :".$gaji_pokok."<br>";
 
    
    echo"pendidikan : ".$pendidikan."<br>";

  }

  public function pengeluaran(){

  }
  public function sisa(){

  }
}
?>