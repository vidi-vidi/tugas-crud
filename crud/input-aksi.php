<?php
include "koneksi.php" ;
$kategori = $_POST['kategori'] ;
$nama = $_POST['nama'] ;
$harga_jual = $_POST['harga_jual'] ;
$harga_beli = $_POST['harga_beli'] ;
$stok = $_POST['stok'] ;

$host->query("insert into barang(kategori,nama,harga_beli,harga_jual,stok) values ('$kategori','$nama','$harga_beli','$harga_jual','$stok')") ;
//$host->query("insert into barang(kategori,nama,harga_) values ('nama') ") ;   
header('location:index.php?pesan=input') ;