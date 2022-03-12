<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data pegawai
                <a href="beranda.php?page=pegawai&aksi=add">
                    <button class="bg-gradient-success"><i class="fas fa-fw fa-plus"></i></button>
            </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-success">
                <tr>
                        <th>id_pegawai</th>
                        <th>Nama_pegawai</th>
                        <th>jenis_kelamin</th>
                        <th>alamat</th>
                        <th>no_hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id_pegawai</th>
                        <th>Nama_pegawai</th>
                        <th>jenis_kelamin</th>
                        <th>alamat</th>
                        <th>no_hp</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                                                
                         $sql = "select * from tabel_pegawai";
                         $show = $db->query($sql);

                        foreach($show as $agt):
                ?>
                <tr>
                    <td><?php echo $agt["id_pegawai"]?></td>
                    <td><?php echo $agt["Nama_pegawai"]?></td>
                    <td><?php echo $agt["jenis_kelamin"]?></td>
                    <td><?php echo $agt["alamat"]?></td>
                    <td><?php echo $agt["no_hp"]?></td>
                    <td>
                            <a href="beranda.php?page=pegawai&aksi=edit&id=<?php echo $agt['id_pegawai']?>"
                                class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="model/pegawai/prosesdeletepegawai.php?id=<?php echo $agt['id_pegawai']?>"
                                class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>