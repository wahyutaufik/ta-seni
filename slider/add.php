<?php $modulecase = substr(strstr(strtolower(preg_replace('/\B([A-Z])/', ' $1', $module)), " "), 1); ?>
<form action="index.php?module=simpan" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="">
	<input type="hidden" name="module" value="<?php echo $modulecase ?>">
	<div class="form-group">
		<label>Gambar*</label>
	    <input type="file" name="image">
	</div>
	<div class="form-group">
		<label>Keterangan</label>
	    <input type="text" name="name" value="" placeholder="Keterangan" autocomplete="off" class="form-control" required>
	</div>
	<div>
		<input class="btn btn-primary" type="submit" value="Simpan">
		<a href="javascript:history.back()" class="btn btn-default">Batal</a>
	</div>
</form>