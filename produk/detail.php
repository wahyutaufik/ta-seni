<?php  
require_once "config/get_data.php";
?>
<?php foreach ($datas as $key => $s): ?>
	<div class="form-group">
		<label>Kategori :</label>
		<?php echo $s['category'] ?>
	</div>
	<div class="form-group">
		<label>Nama Produk :</label>
		<?php echo $s['name'] ?>
	</div>
	<div class="form-group">
		<label>Harga Produk :</label>
		<?php echo $s['price'] ?>
	</div>
	<div class="form-group">
		<label>Keterangan :</label>
		<?php echo $s['description'] ?>
	</div>
	<div class="form-group">
		<label>Gambar :</label>
		<img width="300" src="layout/images/<?php echo $modulecase.'/'.$s['image'] ?>" alt=""> 
	</div>
	<div>
		<a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-primary">Update</a>
		<a href="index.php?module=delete<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-danger">Delete</a>
		<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
	</div>
<?php endforeach ?>