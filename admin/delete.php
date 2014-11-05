<?php 
$id = $_GET['id'];
?>

<fieldset>
	<form action="index.php?module=delete_admin&id=<?php echo $id ?>" method="POST">
		<label>Yakin ingin menghapus data ini?</label>
		<input type="submit" value="Ya" class="btn btn-warning">
		<a href="index.php?module=admin_list" class="btn btn-danger">Tidak</a>
	</form>
</fieldset>