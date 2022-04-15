<?php
include "koneksi.php" ;

$id = $_POST['id'] ;
$kategori = $_POST['kategori'] ;
$nama = $_POST['nama'] ;
$harga_jual = $_POST['harga_jual'] ;
$harga_beli = $_POST['harga_beli'] ;
$stok = $_POST['stok'] ;

$host->query("update barang set kategori = '$kategori',nama = '$nama',harga_beli = '$harga_beli',harga_jual = '$harga_jual',stok = '$stok' where id ='$id'") ;
header('location:index.php?pesan=update') ;