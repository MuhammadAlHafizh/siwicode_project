

              


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Wisata</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url("index.php/Cwisata/aksiEdit/".$wisata->id)?>" method="POST">
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
                                                <td>Nama</td>
                                                <td><?=$wisata->nama?></td>
                                                <td>
                                                    <input class="input100" type="username" name="nama" placeholder="Nama">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Alamat</td>
                                                <td><?=$wisata->alamat?></td>
                                                <td>
                                                    <input class="input100" type="username" name="alamat" placeholder="Alamat">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Deskripsi</td>
                                                <td><?=$wisata->deskripsi?></td>
                                                <td>
                                                    <input class="input100" type="username" name="deskripsi" placeholder="Deskripsi">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Email</td>
                                                <td><?=$wisata->email?></td>
                                                <td>
                                                    <input class="input100" type="email" name="email" placeholder="Email">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Web</td>
                                                <td><?=$wisata->web?></td>
                                                <td>
                                                    <input class="input100" type="address" name="web" placeholder="Web">
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
