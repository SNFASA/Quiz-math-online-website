<?php    
include('menu_guru.php');   
include('sambungan.php');
?>
<title>Kuiz Matematik</title>
<link rel="stylesheet" href="senarai.css">
<link rel="stylesheet" href="button.css">
<div class="kandungan">

    <table>
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tarikh</th>
            <th>Topik</th>
            <th>Peratus</th>
        </tr>
        <!--Bahagian ini untuk laporan kuiz -->
        <?php
            $pilihan = $_POST["pilihan"];
            $idkelas = $_POST["idkelas"];
            $peratus = $_POST["peratus"];
            
        
            $sql = "select * from kuiz 
           join pelajar on kuiz.idpelajar = pelajar.idpelajar
           join kelas on pelajar.idkelas = kelas.idkelas 
           join soalan on kuiz.idsoalan = soalan.idsoalan
           join topik on soalan.idtopik = topik.idtopik
           group by pelajar.idpelajar, topik.idtopik ";
     
            switch ($pilihan) {
                case 1 :  $syarat = ""; 
                        $tajuk = "PENCAPAIAN KESELURUHAN"; break;     
                case 2 :  $syarat = "having kelas.idkelas = '$idkelas' "; 
                        $tajuk = "PENCAPAIAN MENGIKUT KELAS";break;
                case 3 :   
                        if ($peratus == 80) {
                            $syarat = "having peratus >= 80";
                            $tajuk = "PENCAPAIAN LEBIH DARI 80%";
                        }
                        else if ($peratus == 50){
                            $syarat = "having peratus >= 50";
                            $tajuk = "PENCAPAIAN LEBIH DARI 50%";
                        }
                        else if ($peratus == 0){
                            $syarat = "having peratus < 50";
                            $tajuk = "PENCAPAIAN KURANG DARI 50%";
                        }        
                        break;
                case 4 :   
                        if ($peratus == 80) {
                            $syarat = "having peratus >= 80 and kelas.idkelas = '".$idkelas."' ";
                            $tajuk = "PENCAPAIAN MENGIKUT KELAS DAN LEBIH 80%";
                        }
                        else if ($peratus == 50){
                            $syarat = "having peratus >= 50 and kelas.idkelas = '".$idkelas."' ";
                            $tajuk = "PENCAPAIAN MENGIKUT KELAS DAN LEBIH 50%";
                        }
                        else if ($peratus == 0){
                            $syarat = "having peratus < 50 and kelas.idkelas = '".$idkelas."' ";
                            $tajuk = "PENCAPAIAN MENGIKUT KELAS DAN KURANG 50%";
                        }        
                        break;    
                }
            $bil = 1;
            $sql = $sql.$syarat;  // cantum
            $data = mysqli_query($sambungan, $sql);        
            while ($kuiz = mysqli_fetch_array($data)) {	
        ?>
        <!--Bahagian ini untuk mencapai query-->
        <tr>
            <td><?php echo $bil; ?></td>
            <td><?php echo $kuiz['namapelajar']; ?></td>
            <td><?php echo $kuiz['namakelas']; ?></td>
            <td><?php echo $kuiz['tarikh']; ?></td>
            <td><?php echo $kuiz['namatopik']; ?></td>
            <td><?php echo $kuiz['peratus']; ?></td>
        </tr>
        <?php
            $bil = $bil + 1;    
            }   // tamat while
        ?>
        <caption><?php echo $tajuk; ?></caption>
    </table>
    <center>
        <button class="cetak" onclick="window.print()">Cetak</button>
    </center>
</div>
