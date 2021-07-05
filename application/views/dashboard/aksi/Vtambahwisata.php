


                <!-- Begin Page Content -->
                <!-- <div class="container-fluid"> -->

                    <!-- DataTales Example -->
                 <!--    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Wisata</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url("index.php/Cwisata/aksiTambahWisata/")?>" method="POST">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Data Baru</th>
                                            </tr>
                                        </thead>
                    
                                        <tbody>
                                            <?php ?>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>Nama</td>
                                                <td>
                                                    <input class="input100" type="username" name="nama" placeholder="Nama">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Alamat</td>
                                                <td>
                                                    <input class="input100" type="text" name="alamat" placeholder="Alamat">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Deskripsi</td>
                                                <td>
                                                    <input class="input100" type="text" name="deskripsi" placeholder="Deskripsi">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Email</td>
                                                <td>
                                                    <input class="input100" type="email" name="email" placeholder="Email">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Web</td>
                                                <td>
                                                    <input class="input100" type="address" name="web" placeholder="Web">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Jenis Kuliner</td>
                                                <td>
                                                    <select name="jkuliner" id="jkuliner">
                                                        <?php
                                                            foreach($jenis_kuliner->result() as $jk){
                                                        ?>

                                                        <option value="<?=$jk->id?>"><?=$jk->nama?></option>


                                                        <?php
                                                            };
                                                        ?>

                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>Jenis Wisata</td>
                                                <td>
                                                    <select name="jwisata" id="jwisata">
                                                    <?php
                                                        foreach($jenis_wisata->result() as $jw){
                                                    ?>

                                                    <option value="<?=$jw->id?>"><?=$jw->nama?></option>


                                                    <?php
                                                        };
                                                    ?>

                                                    </select>
                                                </td>
                                            </tr>

                                            <button class="btn btn-success my-1">Tambah Data</button>

                                            <?php ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div> -->
                <!-- /.container-fluid -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Wisata</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url("index.php/Cwisata/aksiTambahWisata/")?>" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input  type="text" name="nama" placeholder="Nama" class="form-control">
                        </div>    
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Kuliner</label>
                            <select name="jkuliner" id="jkuliner" class="form-control">
                                <?php foreach($jenis_kuliner->result() as $jk){ ?>
                                    <option value="<?=$jk->id?>"><?=$jk->nama_kuliner?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Wisata</label>
                            <select name="jwisata" id="jwisata" class="form-control">
                                <?php foreach($jenis_wisata->result() as $row){ ?>
                                    <option value="<?=$row->id?>"><?=$row->nama_wisata?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Web</label>
                            <input class="form-control" type="text" name="web" placeholder="Web">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="footer-right">
                     <button class="btn btn-success my-1">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>                