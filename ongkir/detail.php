<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM ongkir WHERE id='$id'");
$data = mysql_fetch_array($query);
if (empty($_SESSION)||$_SESSION['sesi']!='admin') {
    header('Location:index.php?module=home&message=login');
}
?>
<form action="index.php?module=update_admin&id=<?php echo $id ?>" method="POST">
	<div class="row-fluid">
    	<span><label>Provinsi : </label><label><?php echo $data['provinsi'] ?></label></span><br>
    </div>
    <div class="row-fluid">
    	<span><label>Harga : </label><label><?php echo $data['harga'] ?></label></span><br>
    </div>
    <div>
		<a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-primary">Update</a>
    	<a href="index.php?module=delete<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-danger">Delete</a>
		<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
	</div>
</form>