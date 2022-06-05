<?php
include("sambungan.php");
include('keselamatan.php');
$nama = $_SESSION['nama'];
?>


      <link rel="stylesheet" href="menu.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<div class="menu">
      <nav>
         <label class="logo">Kuiz Matematik Online</label>
         <ul >
            <li><a href="home_pelajar.php">Home</a></li>
            <li><a href="jawab_mula.php">Soalan</a></li>
            <li><a href="index.php">Logout</a></li>
            <li><a  class="active"><?php echo $nama ; ?></a></li>

         </ul>
     </nav>
</div>