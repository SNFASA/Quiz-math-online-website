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
        <ul>
            <li><a href="home_guru.php">Home</a></li>
            <li>
                <a href="#">Soalan
                    <i class="fas fa-caret-down"></i>
                </a>
                    <ul>
                         <li><a href="soalan_insert2.php">Tambah</a></li>
                         <li><a href="soalan_update2.php">Kemaskini</a></li>
                         <li><a href="soalan_delete2.php">Padam</a></li>
                         <li><a href="soalan_senarai.php">Senarai</a></li>
                         <li><a href="#">Topik
                         <i class="fas fa-caret-right"></i>
                         </a>
                             <ul>
                                 <li><a href="topik_insert2.php">Tambah</a></li>
                                 <li><a href="topik_update2.php">Kemaskini</a></li>
                                 <li><a href="topik_delete2.php">Padam</a></li>
                                 <li><a href="topik_senarai.php">Senarai</a></li>
                             </ul>
                         </li>
                    </ul>
            </li>
                <li>
                    <a href="#">Guru
                    <i class="fas fa-caret-down"></i>
                    </a>
                    <ul>
                         <li><a href="guru_insert2.php">Tambah</a></li>
                         <li><a href="guru_update2.php">Kemaskini</a></li>
                         <li><a href="guru_delete2.php">Padam Guru</a></li>
                         <li><a href="guru_jawapan2.php">Padam Jawapan</a></li>
                         <li><a href="guru_senarai.php">Senarai</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pelajar
                    <i class="fas fa-caret-down"></i>
                    </a>
                    <ul>
                         <li><a href="pelajar_insert2.php">Tambah</a></li>
                         <li><a href="pelajar_update2.php">Kemaskini</a></li>
                         <li><a href="pelajar_delete2.php">Padam</a></li>
                         <li><a href="pelajar_senarai.php">Senarai</a></li>
                         <li><a  href="#">Kelas
                         <i class="fas fa-caret-right"></i>
                         </a>
                         <ul>
                             <li><a href="kelas_insert2.php">Tambah</a></li>
                             <li><a href="kelas_update2.php">Kemaskini</a></li>
                             <li><a href="kelas_delete2.php">Padam</a></li>
                             <li><a href="kelas_senarai.php">Senarai</a></li>
                         </ul>
                    </ul>
                </li>
                 <li><a href="laporan_pilihan.php">Laporan</a></li>
                 <li><a href="import2.php">Import</a></li>
                 <li><a href="index.php">Logout</a></li>
                 <li><a  class="active"><?php echo $nama ; ?></a></li>
     
        </ul>
    </nav>
</div>