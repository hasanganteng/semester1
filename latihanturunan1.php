<?php

echo "<center>";

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
        <table>
            <form action="" method="post">
            <center><img src="download.png"></center>
         <h3><b>Penggajihan</h3></b>
         <h3><b>Guru / Karyawan Yayasan Assalaam </h3></b>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><input type="text" name="no"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>
                       Unit
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="unit" required>
                            <option value="">Pilih Unit</option>
                            <option value="tk">Tk</option>
                            <option value="sd">Sd</option>
                            <option value="smp">Smp</option>
                            <option value="mts">Mts</option>
                            <option value="sma">Sma</option>
                            <option value="smk">Smk</option>
                        </select>
                    </td>
                </tr>
                <td>Tanggal  </td>
            <td>: </td>
            <td><input type ='date' name = 'tanggal'> </td>
            </tr>
            <tr>
            <td><h2><b>Gaji</b></h2</td>
            <tr>
                    <td>
                       Jabatan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="jabatan" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Guru">Guru</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </td>
                    <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><input type="text" name="lama"></td>
                </tr>
                <td>
                       Status Kerja
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="tetap">Pegawai Tetap</option>
                            <option value="kontrak">Pegawai Kontrak</option>
                        </select>
                    </td>
                </tr>
              <center><td><h2><b>Potongan</b></h2></td></center>
            <tr>
                    <td>
                    BPJS
                    </td>
                    <td>
                        :
                    </td>
                    <td><input type="text" name="bpjs"></td>
                    <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><input type="text" name="pinjaman"></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><input type="text" name="tabungan"></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td><input type="text" name="lainnya"></td>
                </tr>
               
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </form>
        </table>
    </body>
</html>