<?php
include("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">TAMBAH KELAS </h3>
    <form action="kelas_insert.php" method="POST">
        <table>
            <tr>
                <td>ID KELAS</td>
                <td><input type="text" name="idkelas"></td>   
            </tr>
            <tr>
                <td>Nama Kelas</td>
                <td><input type="text" name="namakelas"></td>
            </tr>
        </table>
        <button class="tambah "type="submit"> TAMBAH</button>
    </form>
</div>
   