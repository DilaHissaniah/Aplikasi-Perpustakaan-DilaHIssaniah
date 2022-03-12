<?php 
    include "../../config/koneksi.php";

   
    $nama_buku              = $_POST['nama_buku'];
    $penulis                = $_POST['penulis'];
    $penerbit               = $_POST['penerbit'];
    $tahunterbit            = $_POST['tahunterbit'];


    $sql = "INSERT INTO tabel_buku
    (
        nama_buku,
        penulis,
        penerbit,
        tahunterbit
    ) 
    VALUES 
    (
        '".$nama_buku."',
        '".$penulis."',
        '".$penerbit."',
        '".$tahunterbit."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>

