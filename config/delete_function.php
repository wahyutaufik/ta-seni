<?php  
$id    = $_GET['id'];
$table = $_POST['module'];
$query = "DELETE FROM $table WHERE id = $id";
mysql_query($query);

/*redirect*/
header('Location:index.php?module=list'.ucfirst($table).'&message=deleted');
?>
