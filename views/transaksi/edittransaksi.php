<?php
@$id=$_GET['id'];

$sql  = "select * from tabel_transaksi where id_transaksi=$id";
$show =$db->query($sql);
$hasil=mysqli_fetch_assoc($show);

?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesupdatetransaksi.php" method="POST">
                        <input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $hasil['id_transaksi']?>">
                            <table class="table">
                                <tr>
                                    <td>tanggal_transaksi</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="tanggal_transaksi" 
                                    id="tanggal_transaksi" value="<?php echo $hasil['tanggal_transaksi']?>">
                                   
                                    </td>
                                </tr>
                                <tr>
                                    <td>nama anggota</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="nama_anggota" id="nama_anggota">
                                        <?php foreach ($showanggota as $agt)   :
                                            $id_agt =$agt['nama_anggota'];
                                        ?>
                                             <option value="<?php echo $agt['nama_anggota']?>"
                                             <?php
                                                 if ($id_ang == $id_agt) {echo "selected"; }
                                             ?> >
                                                 <?php echo $agt['nama_anggota']?></option>
                                                 <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td><select class="form-control" name="id_pegawai" id="id_pegawai">
                                    <?php foreach ($showpegawai as $agt)   :
                                            $id_pgw =$pgw['id_pegawai'];
                                        ?>
                                             <option value="<?php echo $agt['id_pegawai']?>"
                                             <?php
                                                 if ($id_peg== $id_pgw) {echo "selected"; }
                                             ?> >
                                                 <?php echo $agt['Nama_pegawai']?></option>
                                                 <?php endforeach;?>
                                         </select>
                                         </td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="20" name="no_hp"
                                     id="no_hp" value="<?php echo $hasil['no_hp']?>"></td>
                                </tr>
                                <tr>
                                    <td>jabatan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="20" name="jabatan"
                                     id="jabatan"  value="<?php echo $hasil['jabatan']?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>