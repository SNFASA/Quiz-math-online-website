<?php
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<div class="kandungan">
    <table>
        <caption>SENARAI NAMA GURU</caption>
        <tr>
            <th>ID Guru</th>
            <th>Nama Guru</th>
            
        </tr>
        
        <?php 
            include("sambungan.php");
            $sql ='select * from guru ';
            $result = mysqli_query($sambungan,$sql);
            while($guru = mysqli_fetch_array($result)) {
                echo '<tr>
                <td>'.$guru["idguru"].'</td>
                <td>'.$guru["namaguru"].'</td>   
                </tr>';
            } 
        ?>
    </table>
</div>