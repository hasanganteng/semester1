<!DOCTYPE html>
<html>
<body>
<form action="" method="POST">
<center>
<h2>Form Pengulangan</h2>
<table>
<tr>
<td></td>
<td></td>
<td>1.Deret Bilangan Ganjil</td>
</tr>
<tr>
<td></td>
<td></td>
<td>2.Segitiga Sama Kaki Terbalik</td>
</tr>
<tr>
<td></td>
<td></td>
<td>3.Deret Bilangan Kelipatan 3</td>
<tr>
</tr>
<td>Pilih<td>
<td><input type="text" name="Pilih" required></td>
</tr>
<tr>
<td>Masukkan Angka</td>
<td>:</td>
<td><input type="text" name="Angka" required></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="Submit" name="Simpan" Value="KIRIM"></td>
</tr>
<br>
</table>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['Simpan'])){
$Pilih  = $_POST['Pilih'];
$Angka  = $_POST['Angka'];
switch($Pilih) {
    case 1:
        echo "<center><h3>Deret Bilangan Ganjil</h3></center>";
        echo "<center>";
        for ($i = 1; $i <= $Angka ; $i+=2) {
            echo "$i";
        }
        echo "<center>";
        break;
        case 2;
        echo "<center><h3>Segitiga Sama kaki Terbalik</h3></center>";
        echo "<center>";
        for ($a = 1; $a <= $Angka ; $a++) {
            for ($b = 1; $b <= $a ; $b++) {
                echo " ";
            }
            for ($c = $Angka; $c >= $a ; $c-=1) {
                echo "*";
            }
            echo "<br>";
        }
        echo "</center>";
        break;
        case 3:
        echo "<center><h3>Deret Bilangan Kelipatan</h3></center>";
        echo "<center>";
        for ($i = 3; $i <= $Angka ; $i+=3) {
            echo "$i";
        }
        echo "</center>";
        break;
        default :
        echo "<center>Tidak Ada Ngab !!!</center>";
        break;
    }
}
?>



        

        










