<?php
include('sambungan.php');
session_start();

//Bahgian ini untuk login pengguna//

if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM pelajar";
    $result = mysqli_query($sambungan , $sql);
    $jumpa = FALSE;
    while($pelajar = mysqli_fetch_array($result)) {
        if ($pelajar['idpelajar'] == $userid && $pelajar["password"] == $password) {
            $jumpa = TRUE ;
            $_SESSION['username'] =$pelajar ['idpelajar'];
            $_SESSION['nama'] = $pelajar['namapelajar'];
            $_SESSION['status'] = 'pelajar';
            break;
        }
    }
    if($jumpa == FALSE ){
        $sql = " SELECT * FROM guru";
        $result = mysqli_query($sambungan , $sql);
        while($guru = mysqli_fetch_array($result)) {
            if ($guru['idguru'] == $userid && $guru["password"] == $password ){
                $jumpa = TRUE ;
                $_SESSION['username'] =$guru['idguru'];
                $_SESSION['nama'] = $guru['namaguru'];
                $_SESSION['status'] = 'guru';
                break;
            }
        }
    }
      //popup message login //
    if ($jumpa == TRUE ) {
        if($_SESSION['status'] == 'pelajar')
            header('Location: home_pelajar.php');
        else
            header('Location: home_guru.php');
    }
    else 
        echo "<script>alert('kesalahan pada username atau password');
        window.location='index.php'</script>" ; 

}
?>