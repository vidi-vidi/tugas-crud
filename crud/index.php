<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="judul">
        <h2> Menampilkan data dari database<h2>
    </div>
    <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'] ;
            if($pesan == "input"){
                echo "Data berhasil diinput" ;
            }else if($pesan == "update"){
                echo "Data berhasil diupdate" ;
            }else{
                echo "Data berhasil dihapus" ;
            }
        }
    ?>
    </br>
    <a class="tombol" href="input.php"> Tambah data baru</a>
    <h3>Data Barang</h3>
    <table border='1' class="table">
        <tr>
            <td>No</td>
            <td>ID</td>
            <td>Kategori</td>
            <td>Nama</td>
            <td>Harga Beli</td>
            <td>Harga Jual</td>
            <td>Stok</td>
            <td>Aksi</td>
        </tr>
        <?php
            include "koneksi.php" ;
            $brg = $host->query("select * from barang") ;
            $nomor = 1 ;
            while($data = mysqli_fetch_array($brg)){
                
                ?>

        <tr>
            <td><?php echo $nomor ?></td>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['kategori'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['harga_beli'] ?></td>
            <td><?php echo $data['harga_jual'] ?></td>
            <td><?php echo $data['stok'] ?></td>
            <td><a href="edit.php?id=<?php echo $data['id'] ?> ">Edit</a>
                <a href="hapus.php?id=<?php echo $data['id'] ?> ">Hapus</a>
            </td>
        </tr>
        <?php
        $nomor++;
            }
        ?>
    </table>
    </bod y>
    <html