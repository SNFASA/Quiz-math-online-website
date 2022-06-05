<?php
include ("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">Kemaskini Guru</h3>
    <form action="guru_update.php" method="post">
        <table>
            <tr>
                <td>ID GURU</td>
                <td><input type="text" name="idguru"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namaguru"></td>
            </tr>
        </table>
        <button class="update" type="submit">Update</button>
    </form>
</div>