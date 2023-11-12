<?php
require 'function.php';

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('barang berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Penambahan barang gagal!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Mobil </title>
        <style>
            body {
            background: linear-gradient(to right, #ABB2B9,#808B96);
            color: white;
            font-family: Arial, sans-serif; 
            }
        </style>
    </head>
    <body>
        <h1>Tambah Data Mobil</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodemobil">Kode Mobil</label>
                    <input type="text" name="kodemobil" id="kodemobil">
                </li>
                <li>
                    <label for="namamobil">Nama Mobil</label>
                    <input type="text" name="namamobil" id="namamobil">
                </li>
                <li>
                    <label for="hargajual">Harga Mobil</label>
                    <input type="text" name="hargajual" id="hargajual">
                </li>
                <li>
                    <label for="stokmobil">Stok Mobil</label>
                    <input type="text" name="stokmobil" id="stokmobil">
                </li>
                <li>
                    <label for="gambarmobil">Gambar Mobil</label>
                    <input type="text" name="gambarmobil" id="gambarmobil">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>