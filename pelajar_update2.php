<?php
include ("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="panjang">
    <h3 class="panjang">Kemaskini Pelajar Baru</h3>
    <form action="pelajar_update.php" method="POST">
        <table>
            <tr>
                <td>ID Pelajar</td>
                <td><input type="text" name="idpelajar"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="namapelajar"></td>
            </tr>
            <tr>
                <td>ID Kelas</td>
                <td>
                        <select name="idkelas">
                            <?php
                                $sql = "select * from kelas";
                                $data = mysqli_query($sambungan ,$sql);
                                while ($kelas = mysqli_fetch_array($data)) {
                                echo "<option value='$kelas[idkelas]'>$kelas[namakelas]</option>";
                                }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
        </table>
        <button class="tambah" type="submit">Tambah</button>
    </form>
</div>