<?php
include("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">
    <h3 class="panjang">Tambah Soalan</h3>
    <form action="soalan_insert.php" method="POST">
        <table>
                <tr>
                    <td>ID Soalan</td>
                    <td><input type="text" name="idsoalan" value="S001"></td>
                </tr>
                <tr>
                <td>Soalan</td>
                <td><input type="text" name="namasoalan"></td>
            </tr>
            <tr>
                <td>Pilihan A</td>
                <td><input type="text" name="pilihan_a"></td>
            </tr>
            <tr>
                <td>Pilihan B</td>
                <td><input type="text" name="pilihan_b"></td>
            </tr>
            <tr>
                <td>Pilihan C</td>
                <td><input type="text" name="pilihan_c"></td>
            </tr>
            <tr>
                <td>Jawapan</td>
                <td><input type="text" name="jawapan" placholder="masuka jawapan"></td>
            </tr>

            <tr>
                <td>Guru</td>
                <td>
                   <select name="idguru">
                       <?php
                       $sql = "select * from guru";
                       $data = mysqli_query($sambungan ,$sql);
                       while ($guru = mysqli_fetch_array($data)) {
                           echo "<option value='$guru[idguru]'>$guru[namaguru]</option>";
                       }
                       ?>
                   </select>
               </td>
            </tr>

            <tr>
                <td>Topik</td>
                <td>
                   <select name="idtopik">
                       <?php
                       $sql = "select * from topik";
                       $data = mysqli_query($sambungan ,$sql);
                       while ($topik = mysqli_fetch_array($data)) {
                           echo "<option value='$topik[idtopik]'>$topik[namatopik]</option>";
                       }
                       ?>
                   </select>
               </td>
            </tr>

            <tr>
                <td>Jenis Soalan</td>
                <td>
                    <select name="jenis">
                        <option value="1">Soalan Objektif</option>
                        <option value="2">Soalan Benar/Salah</option>
                        <option value="3">Tempat Kosong</option>
                    </select>
                </td>
            </tr>
            
        </table>
        <button class="tambah" type="submit">Tambah</button>
    </form>
</div>