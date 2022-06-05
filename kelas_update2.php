<?php
include ("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">KEMASKINI KELAS</h3>
    <form action="kelas_update.php" method="POST">
        <table>
            <tr>
                <td>ID KELAS</td>
                <td><input type="text" name="idkelas"></td>
            </tr>
            <tr>
                <td>Nama KELAS</td>
                <td><input type="text"name="namakelas"></td>
            </tr>
        </table>
        <button class="update" type="submit">Update</button>
    </form>
</div>
