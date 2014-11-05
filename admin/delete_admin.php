<?php  
$id    = $_GET['id'];
$query = "DELETE FROM `admin` WHERE id='$id'";

mysql_query($query);
header("Location:index.php?module=admin_list&message=deleted");
?>