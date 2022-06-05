<?php
include("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">PADAM PELAJAR</h3>
    <form action="pelajar_delete.php" method="POST">
        <table>
            <td>Nama pelajar</td>
                <td>
                        <select name="idpelajar">
                            <?php
                                $sql = "select * from pelajar";
                                $data = mysqli_query($sambungan ,$sql);
                                while ($pelajar = mysqli_fetch_array($data)) {
                                echo "<option value='$pelajar[idpelajar]'>$pelajar[namapelajar]</option>";
                                }
                            ?>
                        </select>
                </td>        
        </table>
        <button class="delete" type="submit">PADAM</button>
    </form>
</div>