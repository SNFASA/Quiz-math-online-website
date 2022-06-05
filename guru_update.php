<?php 
include ("sambungan.php");
include('menu_guru.php');

$idguru =$_POST["idguru"];
$namaguru = $_POST["namaguru"];

$sql = "update guru set namaguru = '$namaguru' where idguru = '$idguru'";
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
if(mysqli_affected_rows($sambungan) > 0)
    echo "<script>document.getElementById('berjaya').style.display ='block';</script>";
else
    "Ralat : $sql<br>".mysqli_error($sambungan);

?>
