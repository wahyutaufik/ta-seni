<?php 
require_once "config/get_data.php";
?>
<?php foreach ($datas as $key => $s): ?>
	<form action="index.php?module=update" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="module" value="<?php echo $modulecase ?>">
		<div class="form-group">
			<label>Gambar*</label>
			<img src="layout/images/<?php echo $modulecase.'/'.$s['image'] ?>" alt="">
		    <input type="file" name="image">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
		    <input type="text" name="description" value="<?php echo $s['description'] ?>" placeholder="Keterangan" autocomplete="off" class="form-control" required>
		    <input type="hidden" name="id" value="<?php echo $id ?>">
		</div>
		<div>
			<input class="btn btn-primary" type="submit" value="Simpan">
			<a href="javascript:history.back()" class="btn btn-default">Batal</a>
		</div>
	</form>
<?php endforeach ?>