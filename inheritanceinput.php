<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <mmeta name="viewport" content="widht=device=widht, initial-scalet=1.0">
            <title>Document</title>
</head>
<body>
<table>
<from action=""method ="post">
<tr>
<td>nim</td>
<td>:</td>
<td><input type="text" name="nim"></td>
</tr>
<tr>
<td>nama</td>
<td>:</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>:</td>
<td></td>
<td><input type="submit" name="proses" value="proses"></td>
</tr>
</form>
</table>
</body>
</html>
<?php
/*
* kalkulator sederhana dengan php oop
*/
if(isset($_POST['proses'])){
    $nim =$_POST['nim'];
    $nama =$_POST['nama'];

    class input
    {
        public $x;
        public $y;
        public $z;
   
        public function data($x, $y , $z)
        {
           $this->x = $x;
           $this->y = $y;
           $this->z = $z;
        }
    }

$data = new input();
$data->data($nim,$nama);

echo $data->x."<br>";
echo $data->y;
echo $data->z;
}