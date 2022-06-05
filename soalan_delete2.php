<?php
include("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">PADAM SOALAN</h3>
    <form action="soalan_delete.php" method="POST">
        <table>
            <tr>
                <td>Soalan</td>
                    <td>
                            <select name="idsoalan">
                                <?php
                                    $sql = "select * from soalan";
                                    $data = mysqli_query($sambungan ,$sql);
                                    while ($soalan = mysqli_fetch_array($data)) {
                                    echo "<option value='$soalan[idsoalan]'>$soalan[namasoalan]</option>";
                                    }
                                ?>
                        </select>
                    </td>
            </tr>
        </table>
        <button class="delete" type="submit">PADAM</button>
    </form>
</div>