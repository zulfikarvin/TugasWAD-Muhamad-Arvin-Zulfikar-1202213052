<?php

$conn = mysqli_connect("localhost:3306","root","","wadweek7");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $kodemobil = $data['kodemobil'];
    $namamobil = $data['namamobil'];
    $gambar = $data['gambarmobil'];
    $hargajual = $data['hargajual'];
    $stokmobil = $data['stokmobil'];

    $query = "INSERT INTO semua_mobil
        VALUES
        ('','$kodemobil','$namamobil','$gambar','$hargajual','$stokmobil')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($no){
    global $conn;
    mysqli_query($conn, "DELETE FROM semua_mobil WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $no = $data["no"];
    $kodemobil = $data['kodemobil'];
    $namamobil = $data['namamobil'];
    $gambar = $data['gambarmobil'];
    $hargajual = $data['hargajual'];
    $stokmobil = $data['stokmobil'];

    $query = "UPDATE semua_barang SET
        kodemobil = '$kodemobil',
        namamobil = '$namamobil',
        gambar = '$gambar',
        hargajual = '$hargajual',
        stokmobil = '$stokmobil'
        WHERE no = $no
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>