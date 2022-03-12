<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User </h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="nama_pegawai"
                                            id="nama_pegawai">
                                    </td>
                                </tr>
                                <tr>
                                    <td>id_user</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="id_user"
                                            id="id_user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>id_pegawai</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="id_pegawai" id="id_pegawai" cols="10"
                                            rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="20" name="username"
                                            id="username"></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="password"
                                            id="password">
                                    </td>
                                </tr>
                                   <td>level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="level"
                                            id="level">
                                    </td>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
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