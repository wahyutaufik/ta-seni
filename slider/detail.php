<?php  
require_once "config/get_data.php";
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
	header('Location:index.php?module=home&message=login');
}
?>
<?php foreach ($datas as $key => $s): ?>
	<div class="form-group">
		<label>Gambar :</label>
		<img src="layout/images/<?php echo $modulecase.'/'.$s['image'] ?>" alt=""> 
	</div>
	<div class="form-group">
		<label>Keterangan :</label>
		<?php echo $s['description'] ?>
	</div>
	<div>
		<a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-primary">Update</a>
		<a href="index.php?module=delete<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-danger">Delete</a>
		<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
	</div>
<?php endforeach ?>