<?php
include("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">
        <h3 class="panjang">Tambah Pelajar</h3>
        <form  class="panjang"action="pelajar_insert.php" method="POST">
            <table>
                <tr>
                    <td class="warna"> ID Pelajar</td>
                    <td><input type="text" name="idpelajar" placeholder="P001" pattern="[A-Z0-9]{4}"
                    oninvalid="this.setCustomValidity('Sila masukan 4 aksara')" oninput="this.setCustomValidity('')"required></td>
                </tr>
                <tr>
                    <td class="warna">Nama</td>
                    <td><input type="text" name="namapelajar"></td>
                </tr>
                <tr>
                    <td class="warna">ID Kelas</td>
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
                <td class="warna">Password</td>
                <td><input type="text" name="password"></td>
            </tr>
        </table>
        <button  class="tambah" type="submit">Tambah</button>
    </form>
    <br>

    <!--kebolehan untuk mengubah warna -->
    <center>
        <button class=biru onclick="tukar_warna(0)">Biru</button>
        <button class=hijau onclick="tukar_warna(1)">Hijau</button>
        <button class=merah onclick="tukar_warna(2)">Merah</button>
        <button class=hitam onclick="tukar_warna(3)">Hitam</button>
    </center>
</div>

<script>

    function tukar_warna(n){
        var warna= ["Blue" ,"Green","Red","Black"];
        var teks = document.getElementsByClassName("warna");
        for (var i=0 ; i< teks.length; i++)
        teks[i].style.color = warna[n];

    }
</script>