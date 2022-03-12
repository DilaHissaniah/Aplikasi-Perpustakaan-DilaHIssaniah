<?php
@$id=$_GET['id'];

$sql  = "select * from tabel_user where id_user=$id";
$show =$db->query($sql);
$hasil=mysqli_fetch_assoc($show);

?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data User</h4>
                        <br>
                        <form action="model/user/prosesupdate.userphp" method="POST">
                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $hasil['id_user']?>">
                            <table class="table">
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name=""Username 
                                    id="Username" value="<?php echo $hasil['Username']?>">
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="Password" id="Password">
                                        <?php foreach ($showauser $agt)   :
                                            $id_agt =$agt['Password'];
                                        ?>
                                             <option value="<?php echo $agt['Password']?>"
                                             <?php
                                                 if ($id_agt == $id_agt) {echo "selected"; }
                                             ?> >
                                                 <?php echo $agt['Password']?></option>
                                                 <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                <tr>
                                <tr>
                                    <td><select class="form-control" name="Level" id="Level">
                                    <?php foreach ($showuser as $user)   :
                                            $id_pgw =$pgw['Level'];
                                        ?>
                                             <option value="<?php echo $agt['Level']?>"
                                             <?php
                                                 if ($id_peg== $id_pgw) {echo "selected"; }
                                             ?> >
                                                 <?php echo $agt['Level']?></option>
                                                 <?php endforeach;?>
                                         </select>
                                         </td>
                                </tr>
                                <tr>
                                    <td>Dibuatpada</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="20" name="Dibuatpada"
                                     id="Dibuatpada" value="<?php echo $hasil['Dibuatpada']?>"></td>
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