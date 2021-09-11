<!DOCTYPE html>
<html>
<head>
<title>form biodata diri</title>
</head>
<body>
<h2>form biodata diri</h2>
<form method = "POST" action="">
<table>
<tr>
<td>nama</td>
<td>:</td>
<td><input type="text" name ="nama"></td>
</tr>
<tr>
<td>umur</td>
<td>:</td>
<td><input type="text" name="umur"></td>
</tr>
<tr>
<td>alamat</td>
<td>:</td>
<td><input type='text' name="alamat"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value='kirim'></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
$nama  = $_POST['nama'];
$umur  = $_POST['umur'];
$alamat= $_POST['alamat'];

echo"=================  biodata diri =============<br>";
echo"=====================================<br>";
echo"nama  =$nama <br>";
echo"umur  =$umur <br>";
echo"alamat=$alamat <br>";

}
?>


<html>
<head>
</head>
<body>

<h2>Biodata Hasan Ganteng</h2>

<table>
<tr>
<td>Nama :</td>
<td><input type= "text"Name="nama" Placeholder= "Masukan Nama"></td>
</tr>
<tr>
<td>Tempat Lahir : </td>
<td>
<input type= "text"Name="Tempat_Lahir"
Name="Tempat_Lahir" Placeholder= "Masukan Tempat Lahir">
</td>
</tr>
<tr>
<td>Tanggal Lahir : </td>
<td><input type="text"
name="Lahir"Placeholder="Masukan Tanggal Lahir Anda"> </td>
</tr>
<tr>
<td>Jenis Kelamin : </td>
<td><input type="Radio"
name="Jenis_Kelamin" value="Laki-laki">Laki-Laki 
<input type="Radio"
name="Jenis_Kelamin" value="Perempuan">Perempuan </td>
</tr>
<tr>
<td>Alamat Anda : </td>
<td><textarea Name="Alamat Anda">
</textarea></td>
</tr>
<tr>
<td>Agama : </td>
<td><select name="agama">
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
</select>
</tr>
<tr>
<td>Pendidikan Terakhir : </td>
<td><select name="Pendidikan Terakhir">
  <option value="Smp">Smp</option>
  <option value="Sd">Sd</option>
</select>
</tr>
<tr>
<td>Status : </td>
<td><select name="Status">
<option value="Sudah menikah">sudah menikah</option>
</select>
</tr>
<tr>
<td>Hobi : </td>
<td><input type="Radio"
name="Hobi" value="Bermain Gitar">Bermain Gitar</td>
</tr>
<tr>
<td>Cita-Cita</td>
<td><select name="Cita-Cita">
<option value="Pekerja yg Sukses">Pekerja yg sukses</option>
</select>
</tr>
<tr>
<td>Kata-Kata Bijak</td>
<td><textarea Name="Alamat Anda">
</textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value='kirim'></td>
</tr>
</table>
</form>
</body>
</html>














