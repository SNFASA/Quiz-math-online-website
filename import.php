<?php
    include('sambungan.php');
    include('menu_guru.php');
  

 //Bahagian ini untuk upload fail data //
    $namajadual = $_POST['namatable'];
    $namafail = $_FILES['namafail']['name'];

    $fail = fopen($namafail , "r");
        while(!feof($fail)){

            $medan = explode(",",fgets($fail));

            if($namajadual === "pelajar"){
                $idpelajar = $medan[0];
                $namapelajar = $medan[1];
                $idkelas = $medan[2];
                $password = $medan[3];
                $sql = "insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$password')";
                if(mysqli_query($sambungan,$sql))
                    $Berjaya = true ;
                else
                    $Berjaya = false ;
            }

            if($namajadual === "soalan"){
                $idsoalan = $medan[0];
                $namasoalan = $medan[1];
                $pilihan_a = $medan[2];
                $pilihan_b = $medan[3];
                $pilihan_c= $medan[4];
                $jawapan = $medan[5];
                $idguru = $medan[6];
                $idtopik =$medan[7];
                $jenis = $medan[8];
                $sql = "insert into soalan values('$idsoalan','$namasoalan','$pilihan_a','$pilihan_b',
                '$pilihan_c','$jawapan','$idguru','$idtopik', '$jenis')";
                if(mysqli_query($sambungan,$sql))
                    $Berjaya = true ;
                else
                    $Berjaya = false ;
            }
        } 
?>
 <!--Bahagian untuk memaparkan pop-up import data-->
<link rel="stylesheet" href="borang.css">

<div class="kandungan">
    <div id="berjaya" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Berjaya import. <br> Sila lihat pada bahagian senarai.</h2>
    </div>

    <div id="tidak" style="display:none">
        <h3 class="panjang">MESEJ</h3>
        <h2 class="mesej">Tidak berjaya import.</h2>
    </div>
</div>

<?php
if(mysqli_affected_rows($sambungan) > 0)
    echo "<script>document.getElementById('berjaya').style.display ='block';</script>";
else
    echo  "<script>document.getElementById('berjaya').style.display ='block';</script>";

?>

