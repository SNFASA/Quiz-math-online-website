<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<?php
include ("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">
    <h3 class="panjang">PADAM JAWAPAN PELAJAR</h3> 
    <form class="panjang" action="guru_jawapan.php" method ="post" >
        <table>
            <tr>
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
            </tr>
        </table>
        <button class="delete" type="submit"> Padam</button>
    </form>
</div>
