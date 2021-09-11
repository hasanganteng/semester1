<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>document</title>
</head>
<body><center>
    <form action="" method="post">
        <h2>Data Nilai Siswa</h2>
        <table>
            <tr>
                <td>jumlah siswa</td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type ="submit" name="proses" value="proses"></td>
</tr>
</table>
<br>
</form>

<?php

      if(isset($_POST['proses'])){
          $jumlah =$_POST['jumlah'];
          ?>

          <form action="latihanformarray2.php" method="post">
              <table>
                  <?php
                  for($i=1; $i <= $jumlah;$i++){
                      ?>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>Data Siswa ke - <?php echo $i; ?></td>
                  </tr>

                  <tr>
                      <td>NIS</td>
                      <td>:</td>
                      <td><input type ="text" name ="nis[]"/></td>
                  </tr>
                  <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><input type ="text" name="nama[]"></td>
                  </tr>
                  <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td><input type ="text" name ="kelas[]"/></td>
                  </tr>
                  <tr>
                      <td>Bahasa Indonesia</td>
                      <td>:</td>
                      <td><input type ="text" name ="indo[]"/></td>
                  </tr>
                  <tr>
                      <td>Bahasa Inggris</td>
                      <td>:</td>
                      <td><input type ="text" name ="eng[]"/></td>
                  </tr>
                  <tr>
                      <td>Matematika</td>
                      <td>:</td>
                      <td><input type ="text" name ="mtk[]"/></td>
                  </tr>
                  <tr>
                      <td>Produktif</td>
                      <td>:</td>
                      <td><input type ="text" name ="pro[]"/></td>
                  </tr>


                 <?php
                  }
                  ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name ="simpan" value="simpan"/></td>
                </tr>
                </table>
                </form>
                <?php
      }
      ?>
      </body>
    </center>
    </html>