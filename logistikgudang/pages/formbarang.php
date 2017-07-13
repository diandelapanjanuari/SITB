<div class="row">
	<h1>Menambahkan Barang</h1>
	<hr>
	<div class="col-md-6 col-sm-6">
		<form class="form-horizontal" action="aksi_tambah.php" method="POST"> 
		  <div class="form-group">
		    <label for="judul" class="col-sm-2 control-label">Judul</label>
		    <div class="col-sm-10">
		      <input type="judul" class="form-control" id="judul" placeholder="Judul" name="judul">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="isi" class="col-sm-2 control-label">Isi</label>
		    <div class="col-sm-10">
		    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="kategori" class="col-sm-2 control-label">Barang</label>
		  	<div class="col-sm-10">
			  	<select name="kategori" id="kategori" class="form-control">
			  	<?php foreach ($daftar_barang as $dk): ?>
			  		<option value="<?php echo $dk['kode_barang'] ?>"><?php echo $dk['nama_barang'] ?></option>
			  	<?php endforeach ?>
			  	</select>
		  	</div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Tambahkan</button>
		    </div>
		  </div>
		</form>
	</div>
</div>

