<!DOCTYPE html>
<html>
<head>
<title>form vaksin</title>
</head>
<body>
<form action="" method="POST">
<center>
<h2>Syarat Masuk Ke Miko Mall</h2>
<table>
<tr>
<td>Nama Anda</td>
<td>:</td>
<td><input type="text" name="Nama" required></td>
</tr>
<tr>
<td>Umur</td>
<td>:</td>
<td><input type="text" name="Umur" required></td>
</tr>
<tr>
<td>Status Vaksin</td>
<td>:</td> 
<td><select name="Vaksin" required>
<option selected="selected">--- Status Vaksin ---</option>
<option value="Sudah vaksin">--- Sudah Vaksin ---</option>
<option value="Belum vaksin">--- Belum Vaksin ---</option>
</select></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="Submit" name="Simpan" value="KIRIM"></td>
</tr>
<br>
</table>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['Simpan'])) {
$Nama   = $_POST['Nama'];
$Umur   = $_POST['Umur'];
$vaksin = $_POST['Vaksin'];
echo"<br>";
echo"<center>";
echo"<table>";
echo"<tr>";
echo"<td> Nama Anda </td>";
echo"<td> : </td>";
echo"<td> $Nama </td>";
echo"</tr>";
echo"<tr>";
echo"<td> Umur </td>";
echo"<td> : </td>";
echo"<td> $Umur Tahun </td>";
echo"</tr>";
if ($Umur >= 12 && $Umur <=50){
echo"<tr>";
echo"<td> Status vaksin </td>";
echo"<td> : </td>";
echo"<td> $vaksin </td>";
echo"</tr>";
echo"</tr>";
echo"</table>";
if($vaksin == "Sudah vaksin </td>") {
echo"<br><b><i>Diizinkan</i></b> <br>";
} else if ($vaksin == "Belum vaksin") {
echo"<br><b><i>Tidak Diizinkan</i></b> <br>";
?>
<br>
<a href="https://pedulilindungi.id/">Silahkan Daftar Vaksin</a>
<?php
}
} else {
    echo "<tr>";
    echo "<td> Status Vaksin </td>";
    echo "<td> : </td>";
    echo "<td> $vaksin </td>";
    echo "</tr>";
    echo "</table>";
    if ($vaksin == "Sudah vaksin") {
    echo"<br><b><i>Tidak Diizinkan</i></b> <br>";
} else if ($vaksin == "Belum vaksin") {
    echo"<br><b><i>Tidak Diizinkan</i></b> <br>";
    ?>
    <br>
    <a href="https://pedulilindungi.id/">Silahkan Daftar Vaksin</a>
    <?php
}
} 
echo "</center>";
}

?>


    

    








