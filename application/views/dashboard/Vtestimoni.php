

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
                                            <th>Wisata</th>
                                            <th>Profesi</th>
                                            <th>User</th>
                                            <th>Catatan</th>
                                            <th>Rating</th>
                                            <th>Last Update</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach($testimoni as $tes){
                                        ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$tes->nama_wisata?></td>
                                            <td><?=$tes->nama?></td>
                                            <td><?=$tes->username?></td>
                                            <td><?=$tes->komentar?></td>
                                            <td><?=$tes->rating?></td>
                                            <td><?= date("y-m-d H:i",strtotime($tes->last_update)); ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?= base_url("index.php/Ctestimoni/editTestimoni/".$tes->id)?>">Edit</a>
                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')" href="<?php echo base_url('index.php/Ctestimoni/aksiHapus/'.$tes->id);?>">Hapus</a></button>
                                                
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        $nomor++;
                                        }
                                        
                                        ?>

                                        <a class="btn btn-success btn-sm my-1" href="<?= base_url("index.php/Ctestimoni/tambahTestimoni")?>">Tambah Data</a>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
