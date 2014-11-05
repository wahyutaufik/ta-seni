<form action="index.php?module=simpan" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="">
	<input type="hidden" name="module" value="<?php echo $modulecase ?>">
	<div class="form-group">
		<label>Nama Produk*</label>
	    <input type="text" name="name" placeholder="Nama Produk" autocomplete="off" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Harga</label>
	    <input type="text" name="price" value="" placeholder="Harga" autocomplete="off" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="description" class="form-control"></textarea>
		<input type="hidden" name="created_time" value="<?php echo date('Y-m-d h:i:s') ?>">
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="image">
	</div>
	<div>
		<input class="btn btn-primary" type="submit" value="Simpan">
		<a href="javascript:history.back()" class="btn btn-default">Batal</a>
	</div>
</form>