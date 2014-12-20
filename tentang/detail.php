<?php  
require_once "config/get_data.php";
?>
<?php foreach ($datas as $key => $ten): ?>
	<div class="form-group">
		<label>Judul :</label>
		<?php echo $ten['judul'] ?>
	</div>
	<div class="form-group">
		<label>Isi :</label>
		<?php echo $ten['isi'] ?>
	</div>
	<div class="form-group">
		<label>Gambar :</label>
		<img width="300" src="layout/images/<?php echo $modulecase.'/'.$ten['image'] ?>" alt=""> 
	</div>
	<div>
		<a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-primary">Update</a>
		<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
	</div>
<?php endforeach ?>