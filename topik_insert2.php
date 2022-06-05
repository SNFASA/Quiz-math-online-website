<?php 
include ("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class=panjang>
    <h3 class="panjang">Tambah Topik</h3>
    <form  class="panjang" action="topik_insert.php" method="POST">
        
        <table>
            <tr>
                <td>ID TOPIK</td>
                <td><input type="text" name="idtopik" placeholder="T01"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namatopik"></td>
            </tr>
        </table>
        <button class="tambah" type="submit">Tambah</button>
    </form>
</div>