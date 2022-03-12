<?php 
    include "../../config/koneksi.php";

    $nama_buku          = $_POST['nama_buku'];
    $penulis            = $_POST['penulis'];
    $penerbit           = $_POST['penerbit'];
    $tahunterbit        = $_POST['tahunterbit'];



    $sql = "Update tabel_buku set
        nama_buku           = '".$nama_buku."',
        penulis             = '".$penulis."',
        penerbit           = '".$penerbit."',
        tahunterbit         = '".$tahunterbit."'
        
        where id_buku = '".$id_buku."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=buku');

?>