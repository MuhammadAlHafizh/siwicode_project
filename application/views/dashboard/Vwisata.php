

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">WISATA</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Wisata</th>
                                            <th>Kuliner</th>
                                            <th>Deskripsi</th>
                                            <th>Rating</th>
                                            <th>Email</th>
                                            <th>Web</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                        <?php
                                        foreach($wisata->result() as $key => $wisata){
                                        ?>
                                        <tr>
                                            <td><?= $key+1;?></td>
                                            <td><?=$wisata->nama_wisata?></td>
                                            <td><?=$wisata->nama_jw?></td>
                                            <td><?=$wisata->nama_jk?></td>
                                            <td><?=$wisata->deskripsi?></td>
                                            <td><?=$wisata->bintang?></td>
                                            <td><?=$wisata->email?></td>
                                            <td><?=$wisata->web?></td>
                                            <td><?=$wisata->alamat?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?= base_url("index.php/Cwisata/editWisataAdmin/".$wisata->id)?>">Edit</a>
                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')" href="<?php echo base_url('index.php/Cwisata/aksiHapus/'.$wisata->id);?>">Hapus</a></button>
                                                
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                            <a class="btn btn-success btn-sm my-1" href="<?= base_url("index.php/Cwisata/tambahWisata")?>">Tambah Data</a>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
