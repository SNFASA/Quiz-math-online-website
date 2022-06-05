<?php
include('sambungan.php');
session_start();
$idpelajar = $_SESSION['username'] ;
$idtopik = $_POST["idtopik"];
date_default_timezone_set("Asia/Kuala_lumpur");
$tarikh = date('d/m/Y');
$sql = "select * from soalan where idtopik = '".$idtopik."' order by idsoalan ASC" ;
$data = mysqli_query($sambungan , $sql);
while($soalan = mysqli_fetch_array($data)){
    $idsoalan = $soalan['idsoalan'];
    $jawapanpelajar = $_POST["$idsoalan"];
    $sql = "insert into kuiz values('$idpelajar','$idsoalan','$tarikh','$jawapanpelajar',0)";
    $datakuiz = mysqli_query($sambungan , $sql);
    if ( $datakuiz == true )
        echo "berjaya tambah";
    else
        echo "Ralat : $sql<br>".mysqli_error($sambungan);
}

header("Location:jawab_ulangkaji.php?idtopik=$idtopik");
?>