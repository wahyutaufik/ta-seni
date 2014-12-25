<?php  
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>
<form action="index.php?module=simpan" method="POST">
	<input type="hidden" name="id" value="">
	<input type="hidden" name="module" value="<?php echo $modulecase ?>">
	<div class="form-group">
    	<label>Provinsi*</label>
    	<input name="provinsi" type="text" class="form-control" required>
    </div>
    <div class="form-group">
    	<label>Harga*</label>
    	<input name="harga" type="number" class="form-control" required>
    </div>
    <div>
		<input type="submit" class="btn btn-primary" value="Simpan" id="register-submit">
		<a href="javascript:history.back()" class="btn btn-default">Batal</a>
	</div>
</form>