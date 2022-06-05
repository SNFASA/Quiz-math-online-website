<?php 
    $host = "localhost" ;
    $user = 'root';
    $password = '';
    $database ='onlinequiz';

    $sambungan = mysqli_connect($host, $user,$password ,$database)
    or die('Sambungan Gagal');
    
?> 