<?php
    include('sambungan.php');
    //Bahgian ini untuk daftar masuk pengguna  //

    $idpelajar =$_POST["idpelajar"];
    $namapelajar =$_POST["namapelajar"];
    $idkelas =$_POST["idkelas"];
    $password =$_POST["password"];
    $sql = "insert into pelajar values('$idpelajar','$namapelajar','$idkelas','$password')";
    $result = mysqli_query($sambungan , $sql);
    if ($result)
        //Bahagian untuk pop-up signup//
        echo  "<script>alert('Berjaya signup')</script>";
    else
       echo "<script>alert('Berjaya signup')</script>";
    
    echo "<script>window.location='index.php'</script>";
  

?>