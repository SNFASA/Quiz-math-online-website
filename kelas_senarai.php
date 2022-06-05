<?php
include("sambungan.php");
include('menu_guru.php');

?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<div class="kandungan">
    <table>
        <caption>Senarai Nama Kelas</caption>
        <tr>
            <th>IDkelas</th>
            <th>Nama kelas</th>
            
        </tr>
        
        <?php 
        $sql ='select * from kelas ';
        $result = mysqli_query($sambungan,$sql);
        while($kelas = mysqli_fetch_array($result)) {
            echo '<tr>
            <td>'.$kelas["idkelas"].'</td>
            <td>'.$kelas["namakelas"].'</td>
            
            
            </tr>';
        } 
        ?>
    </table>
</div>