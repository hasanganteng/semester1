<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" conten="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body><center>

<form action="" method="post">
<h2 >Data Siswa Kelas XII RPL</h2 >
<table>
<tr>
<td>Jumlah Siswa</td>
<td>:</td>
<td><input type="number" name="jumlah"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="proses" value="proses"></td>
</tr>
</table>
<br>
</form>

<?php
if(isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];
    ?>

    <form action ="hasilformarray1.php" method="post">
    <table>
    <?php
    for($i=1; $i<=$jumlah;$i++){
        ?>
        <tr>
        <td></td>
        <td></td>
        <td>Data Siswa ke - <?php echo $i; ?></td>
        </tr>
        <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama[]"></td>
        </tr>
        <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="kelas[]" /></td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="text" name="JK[]" /></td>
        </tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><input type="text" name="Jurusan[]" /></td>
        </tr>
        <?php
    }
    ?>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value="simpan" /></td>
    </tr>
    </table>
    </form>
    <?php
}
?>
</body>
</center>
</html>




