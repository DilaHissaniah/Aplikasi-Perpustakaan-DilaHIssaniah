<?php

if(@$_GET['page'] == ''){
    include "views/beranda.php"; 
}elseif(@$_GET['page'] == 'user'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'add'){
            include "views/user/adduser.php";
        }
        elseif(@$aksi == 'edit'){
            include "views/user/edituser.php";
        }
        elseif(@$aksi == 'delete'){
            include "model/user/prosesdeleteuser.php";
        }
    }else
    {
        include "views/user/user.php";
    }
}elseif(@$_GET['page'] == 'pegawai'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'add'){
            include "views/pegawai/addpegawai.php";
        }
        elseif(@$aksi == 'edit'){
            include "views/pegawai/editpegawai.php";
        }
        elseif(@$aksi == 'delete'){
            include "model/pegawai/prosesdeletepegawai.php";
        }
    }else
    {
        include "views/pegawai/pegawai.php";
    }
}elseif(@$_GET['page'] == 'buku'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'add'){
            include "views/buku/addbuku.php";
        }
        elseif(@$aksi == 'edit'){
            include "views/buku/editbuku.php";
        }
        elseif(@$aksi == 'delete'){
            include "model/buku/prosesdeletebuku.php";
        }
    }else
    {
        include "views/buku/buku.php";
    }
}elseif(@$_GET['page'] == 'anggota'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'add'){
            include "views/anggota/addanggota.php";
        }
        elseif(@$aksi == 'edit'){
            include "views/anggota/editanggota.php";
        }
        elseif(@$aksi == 'delete'){
            include "model/anggota/prosesdeleteanggota.php";
        }
    }else
    {
        include "views/anggota/anggota.php";
    }
    
}elseif(@$_GET['page'] == 'transaksi'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if(@$aksi == 'add'){
            include "views/transaksi/addtransaksi.php";
        }
        elseif(@$aksi == 'edit'){
            include "views/transaksi/edittransaksi.php";
        }
        elseif(@$aksi == 'delete'){
            include "model/transaksi/prosesdeletetransaksi.php";
        }
    }else
    {
        include "views/transaksi/transaksi.php";
    }
}
    
    