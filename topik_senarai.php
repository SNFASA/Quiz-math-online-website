<?php
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<div class="kandungan">
    <table>
        <caption>SENARAI TOPIK</caption>
        <tr>
            <th>ID TOPIK</th>
            <th>Nama</th>
            
        </tr>
        
        <?php 
            include("sambungan.php");
            $sql ='select * from topik ';
            $result = mysqli_query($sambungan,$sql);
            while($topik = mysqli_fetch_array($result)) {
                echo '<tr>
                <td>'.$topik["idtopik"].'</td>
                <td>'.$topik["namatopik"].'</td>   
                </tr>';
            } 
        ?>
    </table>
</div>