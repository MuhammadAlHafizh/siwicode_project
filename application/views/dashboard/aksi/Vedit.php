

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url("index.php/Cadmin/aksiEdit/".$admin->id."/".$admin->role)?>" method="POST">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Data Lama</th>
                                                <th>Data Baru</th>
                                            </tr>
                                        </thead>
                    
                                        <tbody>
                                            <?php ?>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>Username</td>
                                                <td><?=$admin->username?></td>
                                                <td>
                                                    <input class="input100" type="username" name="username" placeholder="Username">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Email</td>
                                                <td><?=$admin->email?></td>
                                                <td>
                                                    <input class="input100" type="email" name="email" placeholder="Email">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Password</td>
                                                <td><?=$admin->password?></td>
                                                <td>
                                                    <input class="input100" type="password" name="password" placeholder="Password">
                                                </td>
                                            </tr>

                                            <button class="btn btn-primary my-4">Edit Data</button>

                                            <?php ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
