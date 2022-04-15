<?php
include "koneksi.php" ;
$id = $_GET['id'] ;
$host->query("delete from barang where id ='$id'") ;
header('location:index.php?pesan=hapus') ;