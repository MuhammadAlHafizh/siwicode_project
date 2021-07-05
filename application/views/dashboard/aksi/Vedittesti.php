

                <!-- Begin Page Content -->
                <!-- <div class="container-fluid"> -->

                    <!-- DataTales Example -->
                   <!--  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Testimoni</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url("index.php/Ctestimoni/aksiEdit/".$testi->id)?>" method="POST">
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
                                                <td>Wisata ID</td>
                                                <td><?=$testi->wisata_id?></td>
                                                <td>
                                                    <select name="wisata" id="wisata">
                                                        <?php foreach($wisata->result() as $w) { ?>
                                                        <option value="<?=$w->id?>"><?=$w->nama?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Profesi ID</td>
                                                <td><?=$testi->profesi_id?></td>
                                                <td>
                                                    <select name="profesi" id="profesi">
                                                        <?php foreach($profesi->result() as $p) { ?>
                                                        <option value="<?=$p->id?>"><?=$p->nama?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>User ID</td>
                                                <td><?=$testi->user_id?></td>
                                                <td>
                                                    <select name="user" id="user">
                                                        <?php foreach($user->result() as $u) { ?>
                                                        <option value="<?=$u->id?>"><?=$u->username?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Komentar</td>
                                                <td><?=$testi->komentar?></td>
                                                <td>
                                                    <input class="input100" type="textarea" name="komentar" placeholder="Komentar">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Rating</td>
                                                <td><?=$testi->rating?></td>
                                                <td>
                                                    <select name="rating" id="rating">
                                                        <option value="1">1 Bintang</option>
                                                        <option value="2">2 Bintang</option>
                                                        <option value="3">3 Bintang</option>
                                                        <option value="4">4 Bintang</option>
                                                        <option value="5">5 Bintang</option>
                                                        <option value="6">6 Bintang</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <button class="btn btn-primary my-1">Edit Data</button>

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
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Testimoni</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url("index.php/Ctestimoni/aksiEdit/".$testi->id)?>" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Wisata</label>
                             <select name="wisata" id="wisata" class="form-control">
                                <?php foreach($wisata->result() as $w) { ?>
                                       <option value="<?=$w->id?>" <?php if($testi->wisata_id == $w->id){echo 'selected';} ?>><?=$w->nama?></option>
                                <?php } ?>
                             </select>   
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Profesi</label>
                            <select name="profesi" id="profesi" class="form-control">
                                <?php foreach($profesi->result() as $p) { ?>
                                <option value="<?=$p->id?>" <?php if($testi->profesi_id == $p->id){echo 'selected';} ?>><?=$p->nama?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Rating</label>
                            <select name="rating" id="rating" class="form-control">
                                <option value="1" <?php if($testi->rating == "1"){echo 'selected';} ?>>1 Bintang</option>
                                <option value="2" <?php if($testi->rating == "2"){echo 'selected';} ?>>2 Bintang</option>
                                <option value="3" <?php if($testi->rating == "3"){echo 'selected';} ?>>3 Bintang</option>
                                <option value="4" <?php if($testi->rating == "4"){echo 'selected';} ?>>4 Bintang</option>
                                <option value="5" <?php if($testi->rating == "5"){echo 'selected';} ?>>5 Bintang</option>
                                <option value="6" <?php if($testi->rating == "6"){echo 'selected';} ?>>6 Bintang</option>
                            </select>
                         </div>   
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>User</label>
                            <select name="user" id="user" class="form-control">
                                <?php foreach($user->result() as $u) { ?>
                                <option value="<?=$u->id?>" <?php if($testi->user_id == $u->id){echo 'selected';}?>><?=$u->username?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="komentar"><?php echo $testi->komentar; ?></textarea>
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