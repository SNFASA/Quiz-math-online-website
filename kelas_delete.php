<?php
include("sambungan.php");
include('menu_guru.php');


$idkelas = $_POST["idkelas"];

$sql = "delete from kelas where idkelas = '$idkelas' ";
$result = mysqli_query($sambungan , $sql);
if($result == true)
?>

<link rel="stylesheet" href="borang.css">
<div class="kandungan">
    <div id="berjaya" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Berjaya dapam.</h2>
    </div>

    <div id="tidak" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Tidak berjaya dapam.</h2>
    </div>
</div>

<?php
if(mysqli_affected_rows($sambungan) > 0)
    echo "<script>document.getElementById('berjaya').style.display ='block';</script>";
else
    echo "<script>document.getElementById('tidak').style.display ='block';</script>";
?>  