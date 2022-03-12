<?php 
    include "../../config/koneksi.php";

   
    $id = $_GET['id'];


    $sql = "DELETE from tbl_anggota where id_anggota = $id";
    $db->query($sql);


    header('Location: ../../beranda.php?page=anggota');

?>

