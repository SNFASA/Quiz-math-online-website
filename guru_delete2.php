<?php
include("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">
    <h3 class="panjang">Padam Guru</h3>
    <form action="guru_delete.php" class="panjang" method="post">
        <table>
            <tr>
                <td>ID Guru</td>
                <td>
                    <input type="text" name="idguru">
                </td>
            </tr>
        </table>
        <button class="delete" type="submit">Padam</button>
    </form>
</div>