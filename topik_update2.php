<?php
include ("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">Kemaskini Topik</h3>
    <form action="topik_update.php" method="POST">
        <table>
            <tr>
                <td>ID TOPIK</td>
                <td><input type="text" name="idtopik"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namatopik"></td>
            </tr>
        </table>
        <button class="update" type="submit">Update</button>
    </form>
</div>