                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data User
                            <a href="beranda.php?page=user&aksi=add">
                                <button class="bg-gradient-success" ><i class="fas fa-fw fa-plus"></i></button>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-success">
                                        <tr>
                                            <th>Id_user</th>
                                            <th>Id_pegawai</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Dibuatpada</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id_user</th>
                                            <th>Id_pegawai</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Dibuatpada</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                                
                                                $sql = "select * from tabel_user";
                                                $show = $db->query($sql);

                                                foreach($show as $agt):
                                       ?>
                                    <tr>
                                           <td><?php echo $agt["id_user"]?></td>
                                           <td><?php echo $agt["id_pegawai"]?></td>
                                           <td><?php echo $agt["username"]?></td>
                                           <td><?php echo $agt["password"]?></td>
                                           <td><?php echo $agt["level"]?></td>
                                           <td><?php echo $agt["dibuatpada"]?></td>
                                           <td>
                                                <a href="beranda.php?page=user&aksi=edit&id=<?php echo $agt['id_user']?>"
                                                class="btn btn-success btn-circle">
                                                <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="model/user/prosesdeleteuser.php?id=<?php echo $agt['id_user']?>"
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