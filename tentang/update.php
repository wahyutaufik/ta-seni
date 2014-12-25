<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM tentang WHERE id='$id'");
$data = mysql_fetch_array($query);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>

<form action="index.php?module=update" method="POST">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="hidden" name="module" value="<?php echo $modulecase ?>">
	<div class="row-fluid">
    	<label>JUDUL</label>
    	<input name="judul" class="form-control" type="text" value="<?php echo $data['judul'] ?>" required>
    </div>
    <div class="row-fluid">
    	<label>ISI</label>
    	<textarea name="isi" class="form-control" cols="30" rows="10"><?php echo $data['isi'] ?></textarea>
    </div>
    <div>
		<input class="btn btn-primary" type="submit" value="Simpan">
		<a href="javascript:history.back()" class="btn btn-default">Batal</a>
	</div>
</form>