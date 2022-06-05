<?php
include("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<div class="kandungan">
    <table>
        <caption>Senarai Nama Pelajar</caption>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>ID Kelas</th>
            <th>Password</th>
        </tr>
        
        <?php 
        $sql ='select * from pelajar ';
        $result = mysqli_query($sambungan,$sql);
        while($pelajar = mysqli_fetch_array($result)) {
            echo '<tr>
            <td>'.$pelajar["idpelajar"].'</td>
            <td>'.$pelajar["namapelajar"].'</td>
            <td>'.$pelajar["idkelas"].'</td>
            <td>'.$pelajar["password"].'</td>
            </tr>';
        } 
        ?>
    </table>
</div>