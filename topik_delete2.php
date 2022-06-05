<?php
include("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">
    <h3 class="panjang">Padam Topik</h3>
    <form action="topik_delete.php" class="panjang" method="post">
        <table>
            <td>Nama topik</td>
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
        </table>
        <button class="delete" type="submit">Padam</button>
    </form>
</div>