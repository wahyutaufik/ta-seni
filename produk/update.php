<?php 
require_once "config/get_data.php";
?>
<?php foreach ($datas as $key => $s): ?>
	<form action="index.php?module=update" method="POST" enctype="multipart/form-data">
	    <input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="hidden" name="module" value="<?php echo $modulecase ?>">
		<div class="form-group">
			<label>Nama Produk*</label>
		    <input type="text" name="name" value="<?php echo $s['name'] ?>" placeholder="Nama Produk" autocomplete="off" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Harga</label>
		    <input type="text" name="price" value="<?php echo $s['price'] ?>" placeholder="Harga" autocomplete="off" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="description" class="form-control"><?php echo $s['description'] ?></textarea>
			<input type="hidden" name="created_time" value="<?php echo date('Y-m-d h:i:s') ?>">
		</div>
		<div class="form-group">
			<label>Gambar</label>
			<img width="300" src="layout/images/<?php echo $modulecase.'/'.$s['image'] ?>" alt="">
			<input type="file" name="image">
		</div>
		<div>
			<input class="btn btn-primary" type="submit" value="Simpan">
			<a href="javascript:history.back()" class="btn btn-default">Batal</a>
		</div>
	</form>
<?php endforeach ?>