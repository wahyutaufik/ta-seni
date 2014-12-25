<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM ongkir WHERE id='$id'");
$data = mysql_fetch_array($query);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>

<form action="index.php?module=update" method="POST">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="hidden" name="module" value="<?php echo $modulecase ?>">
	<div class="row-fluid">
    	<label>Provinsi</label>
    	<input name="provinsi" class="form-control" type="text" value="<?php echo $data['provinsi'] ?>" required>
    </div>
    <div class="row-fluid">
    	<label>Harga</label>
    	<input name="harga" class="form-control" type="number" value="<?php echo $data['harga'] ?>" required>
    </div>
    <div>
		<input class="btn btn-primary" type="submit" value="Simpan">
		<a href="javascript:history.back()" class="btn btn-default">Batal</a>
	</div>
</form>