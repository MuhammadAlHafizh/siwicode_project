<?php
    $jenis_wisata = $this->db->get('jenis_wisata');
    $jenis_kuliner = $this->db->get('jenis_kuliner');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Wisata</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url("index.php/Cwisata/aksiEdit/".$wisata->id)?>" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input  type="text" name="nama" placeholder="Nama" class="form-control" value="<?php echo $wisata->nama ?>">
                        </div>    
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" value="<?php echo $wisata->email ?>" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Wisata</label>
                            <select class="form-control" name="jwisata">
                                <?php foreach($jenis_wisata->result() as $row){ ?>
                                    <option value="<?=$row->id?>" <?php if($wisata->jenis_wisata_id == $row->id){echo "selected";} ?>><?=$row->nama_wisata?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Kuliner</label>
                            <select name="jkuliner" id="jkuliner" class="form-control">
                                <?php foreach($jenis_kuliner->result() as $jk){ ?>
                                    <option value="<?=$jk->id?>" <?php if($wisata->jenis_kuliner_id == $jk){echo "selected";} ?>><?=$jk->nama_kuliner?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Web</label>
                            <input class="form-control" type="text" name="web" placeholder="Web" value="<?php echo $wisata->web;?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi"><?php echo $wisata->deskripsi; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat"><?php echo $wisata->alamat; ?></textarea>
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

