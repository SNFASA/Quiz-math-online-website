<?php 
include ("sambungan.php");
include('menu_guru.php');

$idtopik = $_POST["idtopik"];
$namatopik = $_POST["namatopik"];

$sql = "insert into topik values('$idtopik', '$namatopik')";
$result = mysqli_query($sambungan , $sql);
?>

<link rel="stylesheet" href="borang.css">
<div class="kandungan">
    <div id="berjaya" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Berjaya tambah.</h2>
    </div>

    <div id="tidak" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Tidak berjaya tambah.</h2>
    </div>
</div>

<?php
if($result == true)
    echo "<script>document.getElementById('berjaya').style.display ='block';</script>";
else
    echo "<script>document.getElementById('tidak').style.display ='block';</script>";
?>
