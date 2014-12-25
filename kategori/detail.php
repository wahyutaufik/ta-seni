<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM kategori WHERE id='$id'");
$data = mysql_fetch_array($query);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>
<div class="row-fluid">
	<span><label>Value : </label><label><?php echo $data['value'] ?></label></span><br>
</div>
<div class="row-fluid">
	<span><label>Nama : </label><label><?php echo $data['name'] ?></label></span><br>
</div>
<div>
	<a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-primary">Update</a>
	<a href="index.php?module=delete<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-danger">Delete</a>
	<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
</div>
