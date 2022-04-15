<!DOCTYPE html>
<html>

<head>
    <title> Input Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="judul">
        <h2> Input data database<h2>
    </div>
    </br>
    <a href="index.php"> Lihat semua data </a>
    <h3>Input Data Barang</h3>
    <form method="post" action="input-aksi.php">
        <table>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
<html