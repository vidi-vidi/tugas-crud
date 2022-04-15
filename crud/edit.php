<?php
include "koneksi.php" ;
$id = $_GET['id'] ;
$brg = $host->query("select * from barang where id = '$id'") ;

?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="judul">
        <h2> Menampilkan data dari database<h2>
    </div>
    </br>
    <a href="index.php"> Lihat semua data </a>
    <h3>Edit Data Barang</h3>
    <?php
    while($data = mysqli_fetch_array($brg)){
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Kategsori</td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori'] ?>"></td>
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual'] ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
<html