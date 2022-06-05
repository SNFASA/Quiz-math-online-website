<?php
include("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">PADAM KELAS</h3>
    <form action="kelas_delete.php" method="POST">
        <table>
            <tr>
                <td>ID KELAS</td>
                <td><input type="text" name="idkelas"></td>
            </tr>
        </table>
        <button  class="delete" type="submit">PADAM</button>
    </form>
</div>