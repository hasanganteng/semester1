<?php
if(isset($_POST['simpan'])){
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $JK = $_POST['JK'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<center>
<h2>Data Siswa Kelas XII RPL</h2>
<table border="1">
<tr>
<th>Nama</th>
<th>Kelas</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
</tr>
<?php
for($i=0; $i<count($Nama); $i++){
    ?>
    <tr>
    <td><?php echo $Nama[$i]; ?></td>
    <td><?php echo $Kelas[$i]; ?></td>
    <td><?php echo $JK[$i];  ?></td>
    <td><?php echo $Jurusan[$i]; } ?></td>
    </tr>
    </table>
    </center>
    </body>
    </html>





