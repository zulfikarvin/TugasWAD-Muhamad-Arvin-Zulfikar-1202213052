<?php
require 'function.php';

$no = $_GET["no"];

$brg = query("SELECT * FROM semua_mobil WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Mobil berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Barang gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SHOWROOM MOBIL CICI</title>
        <style>
            body {
            background: linear-gradient(to right, #ABB2B9,#808B96);
            color: white; 
            font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Ubah Data Barang SHOWROOM MOBIL CICI</h1>
        <form action="" method="post">
            <input type="hidden" name="no" value="<?=$brg['no'];?>">
            <ul>
                <li>
                    <label for="kodemobil">Kode Mobil</label>
                    <input type="text" name="kodemobil" id="kodemobil" required value = <?= $brg["kodemobil"];?>>
                </li>
                <li>
                    <label for="namamobil">Nama Mobil</label>
                    <input type="text" name="namamobil" id="namamobil" required value = <?= $brg["namamobil"];?>>
                </li>
                <li>
                    <label for="hargajual">Harga Barang</label>
                    <input type="text" name="hargajual" id="hargajual" required value = <?= $brg["hargajual"];?>>
                </li>
                <li>
                    <label for="stokmobil">Stok Barang</label>
                    <input type="text" name="stokmobil" id="stokmobil" required value = <?= $brg["stokmobil"];?>>
                </li>
                <li>
                    <label for="gambarmobil">Gambar Mobil</label>
                    <input type="text" name="gambarmobil" id="gambarmobil" required value = <?= $brg["gambarmobil"];?>>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>