<?php 
include ("sambungan.php");
include('menu_pelajar.php');
$idtopik = $_GET['idtopik'];
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">

    <form action="jawab_semak.php" method="post">
        <table>
            <caption>SOALAN KUIZ ONLINE</caption>
            <tr>
                <th>Bil</th>
                <th>Soalan</th>
            </tr>

            <?php
                $sql = "select * from soalan where idtopik = '$idtopik' order by idsoalan ASC";
                $data = mysqli_query($sambungan, $sql);
                $bil = 1 ;
                while($soalan = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td class="bil"><?php echo $bil ?></td>
                <td class="soalan">

                <?php
                    $jenis = $soalan['jenis'];
                    if($jenis == 1)
                    echo"
                    $soalan[namasoalan]<br>
                    <input type=radio name=$soalan[idsoalan] value=A >A. $soalan[pilihan_a]<br>
                    <input type=radio name=$soalan[idsoalan] value=B >B. $soalan[pilihan_b]<br>
                    <input type=radio name=$soalan[idsoalan] value=C >C. $soalan[pilihan_c]<br>
                    <input type=hidden name=idtopik value=$idtopik>";
                
                    elseif ($jenis == 2)
                    echo"
                    $soalan[namasoalan]<br>
                    <input type=radio name=$soalan[idsoalan] value=Benar>Benar<br>
                    <input type=radio name=$soalan[idsoalan] value=Salah>Salan<br>
                    <input type= hedden name=idtopik value+$idtopik>";

                    elseif ($jenis == 3)
                    echo"
                    $soalan[namasoalan]<br>
                    <input type=text name=$soalan[idsoalan]><br>
                    <input type=hidden name=idtopik value=$idtopik>";
                ?>
                </td>
            </tr>
            <?php $bil = $bil + 1 ;}?>
        </table>
            <center>
                <button class="semak" type="submit">Semak</button>
            </center>
    </form>
</div>