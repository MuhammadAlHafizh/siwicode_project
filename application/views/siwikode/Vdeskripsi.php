

	  <div class="m-auto pt-2 row">
          <h4 class="col-auto">Detail Wisata <?=$wisata->nama?></h4>
          <p class="col-auto ml-auto">Home > Daftar Wisata > <span class="text-primary"><?=$wisata->nama?></span></p>
      </div>

      <div class="mx-2 mb-2 pt-2 shadow-lg">
        <table align="center" class="container">
            <tr>
				<h5 class="ml-2">Galeri Wisata</h5>
                <td>
                    <img class="detail" src="img/r2.png" alt="">
                </td>
                <td>
                    <img class="detail" src="img/r22.png"alt="">
                </td>
                <td>
                    <img class="detail" src="img/r2.png" alt="">
                </td>
                <td>
                    <img class="detail" src="img/r22.png" alt="">
                </td>
                <td>
                    <img class="detail" src="img/r2.png" alt="">
                </td>
                <td>
                    <img class="detail" src="img/r22.png" alt="">
                </td>
            </tr>
        </table>
	  </div>
	  
	  <div class="row pb-2 mx-2">
		<div class="mx-2 py-2 col float-right text-justify bayangan">
		  <h5>Deskripsi</h5>
		  <p><?=$wisata->deskripsi?></p>
		  <p><?=$wisata->alamat?></p>
		</div>
		<div class="mx-2 py-2 col float-right text-justify bayangan">
		  <h5>Alamat</h5>
          <iframe src="<?=$wisata->maps?>" width="625" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>

    <h4 class="bg-primary ml-3 p-2 testimoni text-center text-white">Testimoni dan Komentar</h4>
	<div class="card-group px-2 my-2">

  <?php
  foreach($testimoni->result() as $testi) {
  ?>
        <div class="card mx-2 shadow">
          <div class="card-body">
            <h5 class="card-title">
              <?=$testi->profesi_id?>
            </h5>
            <p class="card-text"><?=$testi->komentar?></p>
          </div>
          <div class="card-footer bg-primary">
            <small class="text-white"><?=$testi->last_update?></small>
          </div>
        </div>

    <?php
  }
    ?>

  </div>   
      

    <div class="card-group px-2 my-2 ml-2">
      <input class="my-4 ml-2 inputCatatan" type="textarea" placeholder="Catatan">
      <select class="my-4 ml-2" name="rating" id="rating">
        <option value="1">1 Bintang</option>
        <option value="2">2 Bintang</option>
        <option value="3">3 Bintang</option>
        <option value="4">4 Bintang</option>
        <option value="5">5 Bintang</option>
        <option value="6">6 Bintang</option>
      </select>
      <a class="my-4 ml-2 btn btn-primary btn-sm text-center" href="<?=base_url("index.php/Ctestimoni")?>">Isi komentar</a>

    </div>
    

  
