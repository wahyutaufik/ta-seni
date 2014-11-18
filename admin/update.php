<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM admin WHERE id='$id'");
$data = mysql_fetch_array($query);
$password = base64_decode($data['password']);
 
?>

<form action="index.php?module=update" method="POST">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="hidden" name="module" value="<?php echo $modulecase ?>">
	<div class="row-fluid">
    	<label>USERNAME</label>
    	<input name="username" class="form-control" type="text" value="<?php echo $data['username'] ?>" required>
    </div>
    <div class="row-fluid">
    	<label>PASSWORD</label>
    	<input name="password" class="form-control" type="password" value="<?php echo $password; ?>" required>
    </div>
    <div class="form-group">
    	<label>RE-TYPE PASSWORD</label>
    	<input name="re-password" type="password" class="form-control" value="<?php echo $password; ?>" required>
    </div>
    <div>
		<input class="btn btn-primary" type="submit" value="Simpan">
		<a href="javascript:history.back()" class="btn btn-default">Batal</a>
	</div>
</form>