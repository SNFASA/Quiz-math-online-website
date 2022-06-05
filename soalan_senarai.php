<?php
include("sambungan.php");
include('menu_guru.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<div class="panjang">
    <table>
        <caption>Senarai Soalan</caption>
        <tr>
            <th>ID</th>
            <th>Nama Soalan</th>
            <th>Pilihan A</th>
            <th>Pilihan B</th>
            <th>Pilihan C</th>
            <th>Jawapan</th>
        </tr>
        
        <?php 
        $sql ='select * from soalan ';
        $result = mysqli_query($sambungan,$sql);
        while($soalan = mysqli_fetch_array($result)) {
            echo '<tr>
            <td>'.$soalan["idsoalan"].'</td>
            <td>'.$soalan["namasoalan"].'</td>
            <td>'.$soalan["pilihan_a"].'</td>
            <td>'.$soalan["pilihan_b"].'</td>
            <td>'.$soalan["pilihan_c"].'</td>
            <td>'.$soalan["jawapan"].'</td>
            
            </tr>';
        } 
        ?>
    </table>
</div>