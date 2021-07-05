

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ADMIN</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Last Login</th>
                                            <th>Created at</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach($admin->result() as $admin){
                                        ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$admin->username?></td>
                                            <td><?=$admin->email?></td>
                                            <td><?=$admin->password?></td>
                                            <td><?=$admin->last_login?></td>
                                            <td><?=$admin->created_at?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?= base_url("index.php/Cadmin/editAdmin/".$admin->id)?>">Edit</a>
                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')" href="<?php echo base_url('index.php/Cadmin/aksiHapus/'.$admin->id."/".$admin->role);?>">Hapus</a></button>
                                                
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        $nomor++;
                                        }
                                        
                                        ?>

                                        <a class="btn btn-success btn-sm my-1" href="<?= base_url("index.php/Cadmin/tambahAdmin/".$admin->id)?>">Tambah Data</a>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
