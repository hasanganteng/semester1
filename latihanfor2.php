<!DOCTYPE html>
<html>
<head>
<title>Form Input</title>
</head>

<body>
<h2>latihan for 2(mengurutkan bilangan genap)</h2>
<form action="" method= "POST" >
<table>
<tr>
<td>Masukan Jumlah</td>
<td>:</td>
<td><input type ="text"name="angka" required><td>
</tr>
<tr>
<td><td>
<td><input type="submit" name="simpan" value="MARI KITA COBA"><td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])) {
    $angka = $_POST['angka'];
    for ($i = 2; $i <= $angka ; $i+=2) {
        echo"$i <br>";
    }
}
?>