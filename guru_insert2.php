<?php 
include ("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">Tambah Guru Baru</h3>
    <form  class="panjang" action="guru_insert.php" method="POST">
        
        <table>
            <tr>
                <td>ID GURU</td>
                <td><input type="text" name="idguru" value="G01"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namaguru"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" placeholder="max 8 char"></td>
            </tr>
        </table>
        <button class="tambah" type="submit">Tambah</button>
    </form>
</div>