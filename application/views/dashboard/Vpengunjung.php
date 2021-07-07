

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">USER</h6>
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
                                        foreach($pengunjung->result() as $pengunjung){
                                        ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$pengunjung->username?></td>
                                            <td><?=$pengunjung->email?></td>
                                            <td><?=$pengunjung->password?></td>
                                            <td><?=$pengunjung->last_login?></td>
                                            <td><?=$pengunjung->created_at?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?= base_url("index.php/Cadmin/editAdmin/".$pengunjung->id."/".$pengunjung->role)?>">Edit</a>
                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')" href="<?php echo base_url('index.php/Cadmin/aksiHapus/'.$pengunjung->id."/".$pengunjung->role);?>">Hapus</a></button>
                                                
                                            </td>

                                        </tr>
                                        <?php
                                        $nomor++;
                                        }
                                        ?>


                                        <a class="btn btn-success btn-sm mb-3" href="<?= base_url("index.php/Cadmin/tambahAdmin/".$pengunjung->role)?>">Tambah Data</a>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
