<?php 
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM admin WHERE id='$id'");
$data = mysql_fetch_array($query);
$password = '*hidden*';
 
?>
<form action="index.php?module=update_admin&id=<?php echo $id ?>" method="POST">
	<div class="row-fluid">
    	<span><label>USERNAME : </label><label><?php echo $data['username'] ?></label></span>
    </div>
    <div class="row-fluid">
    	<span><label>PASSWORD : </label><label><?php echo $password ?></label></span>
    </div>
    <div>
		<a href="index.php?module=update<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-primary">Update</a>
    	<a href="index.php?module=delete<?php echo ucfirst($modulecase); ?>&id=<?php echo $id ?>" class="btn btn-outline btn-danger">Delete</a>
		<a href="index.php?module=list<?php echo ucfirst($modulecase); ?>" class="btn btn-outline btn-success">list</a>
	</div>
</form>