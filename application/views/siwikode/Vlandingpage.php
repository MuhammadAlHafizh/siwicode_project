


	  <div class="m-auto pt-2 row">
		  <h4 class="col-auto">Wisata Rekreasi & Kuliner Unggulan Kota Depok</h4>
	  </div>
	  
	  <div class="card-group">

		<?php foreach($wisata->result() as $wisata) { ?>
    
		<div class="card m-2 shadow">
		  <img class="card-img-top p-2" src="<?=base_url().$wisata->gambar?>" alt="Card image cap">
		  <div class="card-body">
			<h5 class="card-title"><?=$wisata->nama?></h5>
			<p class="card-text text-justify"><?=$wisata->deskripsi?></p>
			<a class="btn btn-primary" href="<?= base_url("index.php/Cdeskripsi/deskripsi/".$wisata->id)?>" role="button">Baca selengkapnya</a>
		  </div>
		</div>

		<?php } ?>

	  </div>





	  