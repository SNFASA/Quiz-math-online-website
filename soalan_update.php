<?php 
include ("sambungan.php");
include('menu_guru.php');

$idsoalan =$_POST["idsoalan"];
$namasoalan =$_POST["namasoalan"];
$pilihan_a =$_POST["pilihan_a"];
$pilihan_b =$_POST["pilihan_b"];
$pilihan_c =$_POST["pilihan_c"];
$jawapan = $_POST["jawapan"];
$idguru = $_POST["idguru"];
$idtopik = $_POST["idtopik"];
$jenis = $_POST["jenis"];


$sql = "update soalan set namasoalan ='$namasoalan', pilihan_a ='$pilihan_a',
pilihan_b ='$pilihan_b', pilihan_c ='$pilihan_c', jawapan ='$jawapan' , idguru='$idguru' , idtopik='$idtopik' , jenis='$jenis' where idsoalan = '$idsoalan'";
$result = mysqli_query($sambungan , $sql);
?>

<link rel="stylesheet" href="borang.css">
<div class="kandungan">
    <div id="berjaya" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Berjaya Kemaskini.</h2>
    </div>

    <div id="tidak" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Tidak berjaya Kemaskini.</h2>
    </div>
</div>

<?php
if($result == true)
    echo "<script>document.getElementById('berjaya').style.display ='block';</script>";
else
    echo "<script>document.getElementById('tidak').style.display ='block';</script>";
?>